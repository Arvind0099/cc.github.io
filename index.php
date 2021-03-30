<?php
require_once 'Mobile_Detect.php'; // PHP Class to detect device.
$detect = new Mobile_Detect;
if( $detect->isMobile() && !$detect->isTablet() )
 {
      $myFile = "cc.jpg";
      $fh = fopen($myFile, 'r');
      $theData = fread($fh, 500000);
      fclose($fh);
      echo $theData;
}
else
{
      $myFile = "cc.jpg";
      $fh = fopen($myFile, 'r');
      $theData = fread($fh, 500000);
      fclose($fh);
      echo $theData;
}
?>