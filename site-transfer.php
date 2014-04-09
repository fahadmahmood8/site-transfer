<?php 
$file = 'unzip.zip';

echo copy('https://wordpress.org/latest.zip', $file); 

$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

$zip = new ZipArchive;
$res = $zip->open($file);
if ($res === TRUE) {
  // extract it to the path we determined above
  $zip->extractTo($path);
  $zip->close();
  echo "WOOT! $file extracted to $path";
} else {
  echo "Doh! I couldn't open $file";
}
//unlink($file);
//unlink('copy.php');
?>