<?php 
$file = 'unzip.zip';

copy('https://wordpress.org/latest.zip', $file); 

$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE) {
  // extract it to the path we determined above
  $zip->extractTo($path);
  $zip->close();
  echo "Done";
} else {
  echo "Failed";
}
//unlink($file);
//unlink('copy.php');
?>