<?php 	


function check() {
    if (isset($_COOKIE["username"]))
       return true;
    else
        return false;
}

 ?>