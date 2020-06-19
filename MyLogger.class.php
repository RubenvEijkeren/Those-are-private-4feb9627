<?php  
/**
 * 
 */
class MyLogger
{
    
    public function log($message, $level)
    {
        echo $level . ": " . $message;
    }
    public function warning($message)
    {
        $this->log($message, "WARNING");
    }
    public function error($message)
    {
        $this->log($message, "ERROR");
    }
    public function info($message)
    {
        $this->log($message, "INFO");
    }
    public function debug($message)
    {
        $this->log($message, "DEBUG");
    }
}
$logger = new MyLogger();
$logger->error("dit is een error");
$logger->log("Hello world!", "INFO");
$logger->info("this is an info log");
?>