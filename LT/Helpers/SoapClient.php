<?php
namespace LT\Helpers;


use LT\Exceptions\SoapFaultException;
use LT\Exceptions\UndefinedMethodException;

class SoapClient {
    /**
     * @param string $method
     * @param array $arguments
     * @return mixed
     * @throws SoapFaultException
     * @throws UndefinedMethodException
     */
    public static function send($method = '', $arguments = []) {
        if (!empty($method)) {
            try {
                $config = Config::getInstance();
                $soapClient = new \SoapClient($config->soapClientHost, $config->soapClientParams);
                return $soapClient->$method($arguments);
            } catch (\SoapFault $fault) {
                throw new SoapFaultException($fault);
            }
        } else {
            throw new UndefinedMethodException('Soap Method lost Dude :(');
        }
    }
}