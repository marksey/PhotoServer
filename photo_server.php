<?php

    $local_target = "~/webdev/photoServerProject/uploaded/";
    $server_target = $_server['DOCUMENT_ROOT'] . "/photoServerProject/uploaded/";

    $fname = $_FILES["file"]["name"];

    $local_file_location = $local_target.$fname;
    $server_file_location = $server_target.$fname;

    move_uploaded_file($_FILES["file"]["tmp_name"], $local_file_location);

    echo 'Moving file: ' . $fname . '</br></br>to local path: ' . $local_file_location;
    echo '</br></br> But on the server it resides in : ' . $server_file_location;
    echo '</br></br> See?';
    echo "</br></br> <img src=$server_file_location>";

?>