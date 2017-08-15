<?php
//DATABASE CONNECTION VARIABLES
$host = "192.168.64.2"; // Host name
$username = "admin"; // Mysql username
$password = "Tapearthur1"; // Mysql password
$db_name = "login"; // Database name

//DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES

$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_members = $tbl_prefix."members";
$tbl_attempts = $tbl_prefix."loginAttempts";
