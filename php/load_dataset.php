<?php

/**
 * dataset.php: directs form POST data, specifically 'svm_dataset[]' to respective
 *              python scripts.
 */

// global variables
  $json = array();

// return JSON array to AJAX
  print json_encode($json);

// debug: return 'file upload(s)' to AJAX
  var_dump($_FILES);

// send 'file upload' to python
  $result = shell_command('python ../python/svm_training.py', $_FILES);

// return Python Data to AJAX
  print $result
?>
