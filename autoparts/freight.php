<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Атозапчасти</title>
<style>
   table {
    width: 450px; /* Ширина таблицы */
    border: 2px solid activecaption; /* Рамка вокруг таблицы */
    margin: auto; /* Выравниваем таблицу по центру окна  */
   }
   td {
    text-align: center; /* Выравниваем текст по центру ячейки */
   }
  </style>
</head>
<body>
    <header>
    <h1 align='center' style= 'color:blue'>Таблица стоимости доставки</h1>
    </header>
    <table border = '1' cellpadding = '3'>
        <tr>
            <td bgcolor = '#F9AD4E' align = 'center'>Расстояние</td>
            <td bgcolor = '#F94EF7' align = 'center'>Стоимость</td>
        </tr>
        <?php
        $distance = 50;
        for ($distance = 50; $distance <= 250; $distance +=50) 
        {
            echo "<tr>\n <td align = 'right'> $distance </td>\n";
            echo " <td align = 'right'>". $distance / 10 . '</td>\n</tr>\n';
        }
        ?>
    </table>
</body>
</html>

