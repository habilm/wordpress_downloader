<?php
$data = file_get_contents("https://wordpress.org/latest.zip");
if(file_put_contents("wordpress.zip",$data)){
  echo "wordpress has been downloaded";
}else{
  echo "someting went wrong. please check after some time";
}
