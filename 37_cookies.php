<?php
echo "Welcome to the world of cookies";

//Cookies and Sessions

//syntax to set a cookie
//echo time();
setcookie("category","books", time() + 86400, "/");
echo"<Br>";
echo "The cookie is set";

?>