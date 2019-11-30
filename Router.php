<?php
class Router{
  private $config;
  public $listAccessMethod;
  public $listAccessPath;
  public function __construct($config)
  {
    $this->config = $config;
    $listAccessMethod = [];
    $listAccessPath = [];
  }
  public function LoadConfig(){
    $strFileContent = json_decode(file_get_contents($this->config), true);
    $this->listAccessMethod = $strFileContent["method"];
    $this->listAccessPath = $strFileContent["accessUrl"];
  }
}
?>
