<?php 
require_once 'LoggerInterface.php';

abstract class AbstractLogger implements LoggerInterface
{
    //implemented 4 out of 5 methods from LoggerInterface
    public function info(string $logMessage)
    {
        $this->log('info', $logMessage);
    }
    public function error(string $logMessage)
    {
        $this->log('error', $logMessage);
    }
    public function warning(string $logMessage)
    {
        $this->log('warning', $logMessage);
    }
    public function success(string $logMessage)
    {
        $this->log('success', $logMessage);
    }
}
