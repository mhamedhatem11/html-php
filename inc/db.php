<?php
$conn = mysqli_connect ('localhost', 'root', 'root', 'win');
if(!$conn){echo 'Erorr:' . mysqli_connect_error();}