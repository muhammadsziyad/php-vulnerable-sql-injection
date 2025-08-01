<?php
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE user = '" . $username . "' AND pass = '" . $password . "'";
$statement = $conn->query($query);
