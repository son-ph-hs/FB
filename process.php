<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Xử lý dữ liệu $name, $email, $message

  echo "Cảm ơn bạn đã liên hệ! <br>";
  echo "Họ và tên: $name <br>";
  echo "Email: $email <br>";
  echo "Nội dung: $message";
}

?>
