<?php
$target_file =  "nowe_utwory/". basename($_FILES["fileToUpload"]["name"]); if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
{ 
   echo "Uploading...";
  header('Refresh: 2; URL=test_mixer.php');
} 
else echo "Error uploading file.";
?>

