<?php
session_start();

if (isset($_SESSION['preview'])) {
  unset($_SESSION['preview']);
}
if (isset($_COOKIE['user'])) {
  setcookie('user', '', time() + (-9000), '/');
}

$move = 'http://localhost/invitation-new/master/login/'; //>> LOCAL
// $move = 'https://ada-undangan.online/master/login/'; //>> PUBLIC

if (!isset($_SESSION['login']) || !isset($_SESSION['akses'])) {
  header("Location: $move");
  die;
}
if ($_SESSION['akses'] != 'master') {
  header('Location: ' . $move . '?logout');
  die;
}
