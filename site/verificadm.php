<?php
session_start();
if(!$_SESSION2['username']){
    header('location: index.php');
}
?>