<?php
if( !empty($_POST))
{
$data = $_POST; 
file_put_contents("file_data.json", json_encode($data)."\n", FILE_APPEND );
}
?>
