<?php
$src = $_FILES['video']['tmp_name'];
$filename = $_FILES['video']['name'];
$output_dir = "uploads/".$filename;

if (move_uploaded_file($src, $output_dir )) {
        echo "Success! Image uploaded! File: ".$filename;
} else{
    echo "Error! Image upload failed! File: ".$filename;
};
echo "<br>";
?>