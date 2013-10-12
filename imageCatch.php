<?php

// var_dump($_FILES);
$output_dir = "img_uploads/";


if(isset($_FILES["myFile"])){
  move_uploaded_file($_FILES["myFile"]["tmp_name"], $output_dir.$_FILES["myFile"]["name"]);
  echo $output_dir.$_FILES['myFile']['name'];
}

?>