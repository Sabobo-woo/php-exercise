<?php
//taking the incoming data from POST
//and inserting it into the database


//here we are requiring the DBB to work with the database

require_once 'DBBlackbox.php';

//insert creates the json which adds to the database
$id = insert($_POST);
//this above works only if data we submited is not empty
var_dump($id);