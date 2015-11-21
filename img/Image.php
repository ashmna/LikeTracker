<?php

class Image
{
    private $path;
    private $type;
    private $imageResource;
    private $width;
    private $height;

    public function __construct($path)
    {
        $this->path = $path;
        $this->type = exif_imagetype($path);
        switch ($this->type) {
            case IMAGETYPE_GIF :
                $this->imageResource = imagecreatefromgif($this->path);
                break;
            case IMAGETYPE_JPEG :
                $this->imageResource = imagecreatefromjpeg($this->path);
                break;
            case IMAGETYPE_PNG :
                $this->imageResource = imagecreatefrompng($this->path);
                break;
            default:
                throw new Exception('Not supported image format.');
        }
        imagealphablending($this->imageResource, true);
        list($this->width, $this->height) = getimagesize($this->path);
    }

    public function resize($width = -1, $height = -1)
    {
        $res = false;
        $width  = intval($width);
        $height = intval($height);

        if ($width > 0 && $height < 0) {
            $height = round(($width/$this->width) * $this->height);
        } elseif ($width < 0 && $height > 0) {
            $width  = round(($height/$this->height) * $this->width);
        }

        if ($width > 0 && $height > 0) {
            $tmp = imagecreatetruecolor($width, $height);
            imagealphablending($tmp, false);
            imagesavealpha($tmp, true);
            $res = imagecopyresized($tmp, $this->imageResource, 0, 0, 0, 0, $width, $height, $this->width, $this->height);
            if($res) {
                $this->imageResource = $tmp;
                $this->width  = $width;
                $this->height = $height;
            }
        }
        return $res;
    }

    public function negative()
    {
        return imagefilter($this->imageResource, IMG_FILTER_NEGATE);
    }

    public function grayScale()
    {
        return imagefilter($this->imageResource, IMG_FILTER_GRAYSCALE);
    }

    public function blur($blurs = 1)
    {
        $res = false;
        for ($i = 0; $i < $blurs; $i++) {
            $res = imagefilter($this->imageResource, IMG_FILTER_GAUSSIAN_BLUR);
            if(!$res)
                break;
        }
        return $res;
    }

    public function save($path = '')
    {
        if (!isset($this->imageResource)) {
            throw new Exception('Image resource not founded.');
        }
        if (empty($path)) {
            $path = $this->path;
        }
        $res = false;
        switch ($this->type) {
            case IMAGETYPE_GIF :
                $res = imagegif($this->imageResource, $path);
                break;
            case IMAGETYPE_JPEG :
                $res = imagejpeg($this->imageResource, $path);
                break;
            case IMAGETYPE_PNG :
                $res = imagepng($this->imageResource, $path);
                break;
        }
        return $res;
    }


}

