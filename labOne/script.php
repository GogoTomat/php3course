<?php
echo 'File name - ' . $_FILES['filename']['name'] . '<br>';
echo 'Size - ' . $_FILES['filename']['size'] . '<br>';
echo 'Type - ' . $_FILES['filename']['type'] . '<br>';
echo 'Saved - ' . $_FILES['filename']['tmp_name'] . '<br>';

if (move_uploaded_file($_FILES['filename']['tmp_name'], __DIR__.'\\temp\\'.$_FILES['filename']['name'])){
    echo 'Success';
}
else{
    echo 'Error';
}
?>
