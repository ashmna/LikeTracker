<?php


namespace LT\Helpers;


class FileSystem {

    private static $fileSystemPart = 1000;

    public static function fileNameToPath($fileName) {
        $key = substr($fileName, 0, 1);
        $extensionIndex = strpos('.', $fileName);
        $extension = substr('.', $fileName);
        $fileNumber = substr($fileName, $extensionIndex);
        $part = static::$fileSystemPart;
        switch($key) {
            case Defines::FILE_TYPE_DOCUMENT: $folderName = 'documents'; break;
            case Defines::FILE_TYPE_IMAGE:    $folderName = 'images'; break;
            case Defines::FILE_TYPE_VIDEO:    $folderName = 'videos'; break;
            case Defines::FILE_TYPE_MUSICS:   $folderName = 'musics'; break;
            default: $folderName = 'documents'; break;
        }
        $number = floor($fileNumber/$part);
        $folderNumber = $part*($number + 1);

        return "data/$folderName/$folderNumber/$fileNumber.$extension";
    }

    public static function generateFileName($originalFilename, $fileType = Defines::FILE_TYPE_DOCUMENT) {
        $extension = explode('.', $originalFilename);
        $extension = $extension[count($extension)-1];

        $part = static::$fileSystemPart;
        $number = App::getCounterNextIndex('fileSystem');
        $folderNumber = floor($number/$part);
        $folderNumber = $part*($folderNumber + 1);

        switch($fileType) {
            case Defines::FILE_TYPE_DOCUMENT: $folderName = 'documents'; break;
            case Defines::FILE_TYPE_IMAGE:    $folderName = 'images'; break;
            case Defines::FILE_TYPE_VIDEO:    $folderName = 'videos'; break;
            case Defines::FILE_TYPE_MUSICS:   $folderName = 'musics'; break;
            default: $folderName = 'documents'; break;
        }

        $path = Config::getSkinRootDir();
        $path .= "/data/$folderName/$folderNumber";
        mkdir($path, 0777, true);
        $path .= "/$number.$extension";
        $fileName = $fileType.$number.'.'.$extension;
        return [$fileName, $path];
    }

    public static function crateFileFromBase64($string, $originalFilename, $fileType = Defines::FILE_TYPE_IMAGE) {
        list($fileName, $path) = static::generateFileName($originalFilename, $fileType);
        list($type, $data) = explode(';', $string);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        file_put_contents($path, $data);
        return $fileName;
    }









}