<?php
  class Config
  {
    public function __construct() {

    }

    public static function getConfig() {
      $env = file_get_contents('.env');
      if ($env === false) {
        throw new Exception("File doesn't exist", 1);
      }

      $env_n = explode('\n', $env);
      $env_arr = array();

      foreach ($env_n as $value) {
        $aux = explode('=', $value);
        $env_arr[$aux[0]] = $aux[1];
      }

      return $env_arr;
    }
  }
  
?>