<?php

  require_once('../9php/CPU.php');

  require_once(dirname(__FILE__). '../9php/CPU.php');

  my_debug("some debug message", __LINE__);

  my_debug("another debug message",__LINE__);

  function my_debug($msg,$line){
    echo "Line $line: $msg";
  }
?>