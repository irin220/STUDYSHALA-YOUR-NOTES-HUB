<?php

$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die("Connection Failed:" . mysqli_connect_error());
}

$createDB = "CREATE DATABASE IF NOT EXISTS major";
$con->query($createDB);

$con = mysqli_connect("localhost", "root", "", "major");

$create1 = "CREATE TABLE IF NOT EXISTS notes (
    fid INT AUTO_INCREMENT PRIMARY KEY,
    course VARCHAR(255),
    sem VARCHAR(255),
    sub VARCHAR(255),
    sub_name VARCHAR(255),
    notes VARCHAR(255),
    descr VARCHAR(255)
    )";
$con->query($create1);

$create2 = "CREATE TABLE IF NOT EXISTS books (
    fid INT AUTO_INCREMENT PRIMARY KEY,
    course VARCHAR(255),
    sem VARCHAR(255),
    sub VARCHAR(255),
    sub_name VARCHAR(255),
    books VARCHAR(255),
    title VARCHAR(255),
    auth VARCHAR(255)
    )";
$con->query($create2);

$create3 = "CREATE TABLE IF NOT EXISTS q_paper (
    fid INT AUTO_INCREMENT PRIMARY KEY,
    course VARCHAR(255),
    sem VARCHAR(255),
    sub VARCHAR(255),
    sub_name VARCHAR(255),
    q_paper VARCHAR(255),
    descr VARCHAR(255)
    )";
$con->query($create3);

$create4 = "CREATE TABLE IF NOT EXISTS s_paper (
    fid INT AUTO_INCREMENT PRIMARY KEY,
    course VARCHAR(255),
    sem VARCHAR(255),
    sub VARCHAR(255),
    sub_name VARCHAR(255),
    s_paper VARCHAR(255),
    descr VARCHAR(255)
    )";
$con->query($create4);

$create5 = "CREATE TABLE IF NOT EXISTS link (
    fid INT AUTO_INCREMENT PRIMARY KEY,
    course VARCHAR(255),
    sem VARCHAR(255),
    sub VARCHAR(255),
    sub_name VARCHAR(255),
    link VARCHAR(255),
    descr VARCHAR(255)
    )";
$con->query($create5);

$createSub = "CREATE TABLE IF NOT EXISTS subjects (
    sid INT AUTO_INCREMENT PRIMARY KEY,
    sub_name VARCHAR(255) UNIQUE
    )";
$con->query($createSub);

$createAD = "CREATE TABLE  IF NOT EXISTS admin (
    aid INT PRIMARY KEY,
    aname VARCHAR(255),
    aemail VARCHAR(255),
    apass VARCHAR(255)
    )";
$con->query($createAD);

$ins = "INSERT IGNORE INTO admin SET aid='1', aname='PAIN', aemail='pain@gmail.com', apass='1234'";
$con->query($ins);

?>