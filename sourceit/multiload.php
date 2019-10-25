<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type content=text/html; charset=utf-8" />
<title>Multiload</title>
</head>
    <body>
        <form action=multiload.php method=post enctype=multipart/form-data>
            <input type=hidden name=MAX_FILE_SIZE value=7000000>
            <p><input type=file name=upload[] multiple></input></p>
            <p><input type=submit value=Загрузить></input></p>
        </form>
        <?php 
        if($_FILES)
{
    foreach ($_FILES['upload']['error'] as $key => $error) {
        if ($error == 0) {
            $tmp_name = $_FILES['upload']['tmp_name'][$key];
            $name = $_FILES['upload']['name'][$key];
            move_uploaded_file($tmp_name, 'uploads/'.$name);
        }
    }
    echo '<h3>Файл(ы) успешно загружен на сервер</h3>';
}
        ?>
    </body>
</html>