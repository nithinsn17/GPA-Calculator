<?php

session_start();

session_unset();
session_destroy();

echo '<script><alert>Logged out!</alert></script>';
header("Location:index.php");
