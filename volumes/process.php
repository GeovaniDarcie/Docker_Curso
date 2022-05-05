<?php 
  $message = $_POST["message"];
  $files = scandir("./messages");
  $num_file = count($files) - 2;

  $fileName = "msg-{$num_file}.txt";
  
  $file = fopen("./messages/{$fileName}", "x");

  fwrite($file, $message);

  fclose($file);

  header("Location: index.php");
