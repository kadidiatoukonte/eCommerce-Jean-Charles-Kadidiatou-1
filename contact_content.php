<?php

if (isset($_POST['email']) AND !empty($_POST['email'])) {
  echo 'Email : ' . htmlspecialchars($_POST['email']) . '</br>';
}

if (isset($_POST['message']) AND !empty($_POST['message'])) {
  echo 'Message : ' . htmlspecialchars($_POST['message']) . '.';
}

?>
