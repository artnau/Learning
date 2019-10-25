<!DOCTYPE html>
<?php
$DOCUMENT_ROOT = $_SERVER ['DOCUMENT_ROOT'];
?>

<html>
<head>
<title>Автозапчасти - Заказы клиентов</title>
</head>
    <body>
        <header>
        <h1 align='center' style= 'color:orangered'>Автозапчасти</h1>
        <h2 align='center' style= 'color:aqua'>Заказы клиентов:</h2>
        </header>
        <?php

        $fp = fopen ('$DOCUMENT_ROOT/../orders.txt', 'rb');
        flock ($fp, LOCK_SH);
        
        if (!$fp)
        {
            echo '<p><strong>Нет ожидающих заказов. Пожалуйста, поробуйте позже'
            . '</strong></p>';
            exit;
        }
        while (!feof($fp))
        {
            $order = fgets ($fp, 999);
            echo $order.'<br />';
        }
        flock ($fp, LOCK_UN);
        fclose ($fp);
        ?>
    </body>
</html>