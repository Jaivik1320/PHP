<?php
//verify the user login
session_start();
echo "Welcome". $_SESSION['username'];
echo'<br>';
echo "Your favorite category is". $_SESSION['favcat'];


?>