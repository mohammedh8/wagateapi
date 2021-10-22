<?php

$host = "sql206.epizy.com";
$username = "epiz_29938962";
$password = "5NKIUCFwimtVHgt";
$db = "epiz_29938962_wagate";

$koneksi = mysqli_connect($host, $username, $password, $db) or die("toto");

$base_url = "http://localhost/wa/";
date_default_timezone_set('Asia/Jakarta');
