<?php

session_start();

    if(!isset($_SESSION['x'])) {
        $_SESSION['x']=0;
} 
$_SESSION['x'] = $_SESSION['x']+1;

?>

<h2>SESSION</h2>
Страница была открыта
<?=$_SESSION['x']?> раз
