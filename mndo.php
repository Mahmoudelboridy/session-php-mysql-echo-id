<?php
session_start();
if(isset($_SESSION['id'])){

echo "your id ".$_SESSION['id']; 

}

?>