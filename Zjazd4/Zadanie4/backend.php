<?php
$IP = $_SERVER['REMOTE_ADDR'];
if ($IP == "127.0.0.1") {
    include "mainUser.php";
} else {
    include "otherUsers.php";
}
