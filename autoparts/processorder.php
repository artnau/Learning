    <?php
    // короткие имена переменных
        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];
        $address = $_POST['address'];
        $find = $_POST['find'];
        $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
    ?>

<!DOCTYPE html>
<html>
<head>
<title>Автозапчасти - Результаты заказа</title>
</head>
    <body>
        <header>
        <h1 align='left' style= 'color:aqua'>Автозапчасти</h1>
        <h2 align='left' style= 'color:aquamarine'>Результаты заказа:</h2>
        </header>
        <?php
        $date = date('H:i, jS F');
       
        $spare = 0;
        $spare = $tireqty + $oilqty + $sparkqty;
        
        if ($spare == 0){
            echo '<font color = red>';
            echo 'ТЫ НИЧЕГО НЕ ЗАКАЗАЛ<br />';
            echo '</font>';
            exit;
        }
        else 
        {
            echo '<p>Список твоего заказа: </p>';
            
            if ($tireqty > 0)
                echo $tireqty. ' автопокрышек<br />';
            if ($oilqty > 0)
                echo $oilqty. ' бутылок масла<br />';
            if ($sparkqty > 0)
                echo $sparkqty. ' свечей зажигания<br />';
        }
        
        echo '<br />';
        echo 'Всего заказано товаров: '.$spare.'<br />';
        
        $totalamount = 0.00;
        define ('TIREPRICE', 100);
        define ('OILPRICE', 10);
        define ('SPARKPRICE', 4);
        
        $totalamount = $tireqty * TIREPRICE
                     + $oilqty * OILPRICE
                     + $sparkqty * SPARKPRICE;
        echo '<br />';
        echo 'Итого: $' . number_format($totalamount, 2) . '<br />';
        
        $taxrate = 0.10; // налог с продаж 10%
        $totalamount = $totalamount * (1 + $taxrate);
        echo 'Всего, включая налог с продаж: $' . $totalamount.'<br />';
        echo '<br />';
        echo 'Адрес доставки: '. $address. ' <br />';

// условия для вычисления скидки с занесением в $outputstring        
        if ($tireqty < 10) {
            $tirediscount = 0;
        } elseif ($tireqty >= 10 && $tireqty <= 49) {
            $tirediscount = 5;
        } elseif ($tireqty >= 50 && $tireqty <= 99) {
            $tirediscount = 10;
        } elseif ($tireqty >= 100) {
            $tirediscount = 15;
        }

        if ($oilqty < 10) {
            $oildiscount = 0;
        } elseif ($oilqty >= 10 && $oilqty <= 49) {
            $oildiscount = 5;
        } elseif ($oilqty >= 50 && $oilqty <= 99) {
            $oildiscount = 10;
        } elseif ($oilqty >= 100) {
            $oildiscount = 15;
        }

        if ($sparkqty < 10) {
            $sparkdiscount = 0;
        } elseif ($sparkqty >= 10 && $sparkqty <= 49) {
            $sparkdiscount = 5;
        } elseif ($sparkqty >= 50 && $sparkqty <= 99) {
            $sparkdiscount = 10;
        } elseif ($sparkqty >= 100) {
            $sparkdiscount = 15;
        }

        if ($spare < 100) {
            $sparediscount = 0;
        } elseif ($spare >= 100 && $spare <= 149) {
            $sparediscount = 5;
        } elseif ($spare >= 150 && $spare <= 199) {
            $sparediscount = 10;
        } elseif ($spare >= 200) {
            $sparediscount = 15;
        }
// условие для вычисления действия рекламы с занесением в $outputstring 
        if ($find == 'a') {
            $ad = ' Я регулярный клиент';
        }
          elseif ($find == 'b') {
            $ad = ' Клиент обратившийся после телерекламы';
        }
          elseif ($find == 'c') {
            $ad = ' Клиент обратившийся после нахождения информации в справочнике';
        }
          elseif ($find == 'd') {
            $ad = ' Клиент обратившийся после нахождения информации в интернете';
        }    
        
/* переменная для записи в orders.txt */
        $outputstring =  $date."|\t"."\n"
                        .$tireqty." автопокрышек|\t"."\n"
                        .$oilqty." бутылок c маслом|\t"."\n"
                        .$sparkqty." свечей зажигания|\t"."\n"
                        .$ad."|\t"."\n"        
                        .$totalamount." общая стоимость без скидки|\t\$"."\n"
                        .$tirediscount."% скидка на покрышки|\t"."\n"
                        .$oildiscount."% скидка на масло|\t"."\n"
                        .$sparkdiscount."% скидка на свечи зажигания|\t"."\n"
                        .$sparediscount."% общая скидка|\t"."\n"        
                        .$address."\t"."\n";
                        
        
//        открыть файл для добавления
        $fp = fopen ('$DOCUMENT_ROOT/../orders.txt', 'ab');
        flock ($fp, LOCK_EX); // блокирование файла для записи
        if (!$fp)
        {
            echo '<p><strong>В настоящий момент ваш запрос не может быть обработан. '
            . 'Пожалуйста, попытайтесь позже.</strong></p></body></html>';
            exit;
        }
        fwrite($fp, $outputstring, strlen ($outputstring));
        flock ($fp, LOCK_UN); //снятие блокировки записи
        fclose($fp);
        
        echo '<font color = blue>';
        echo '<p>ЗАКАЗ ПРИНЯТ</p>';
        echo '</font>';
        
        echo '<font color = red>';
        echo '<p>Заказ обработан в. ';
        echo $date;
        echo '</font>';
        ?>
    </body>
</html>

<?php

        

