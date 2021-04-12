<?php
session_start();

unset($_SESSION['account']);

header('Location: a0412-30-login.php');
