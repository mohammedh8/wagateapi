<?php

$host = "http://92.205.13.208";
$username = "damasbot";
$password = "Mm5329924";
$db = "wagate";

$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "http://localhost/wa/";
date_default_timezone_set('Asia/Jakarta');
