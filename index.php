<html>

<head>
    <title>Работа с формой</title>
</head>

<body>

<form name="form1" action="index.php" method="post">
    <input name="text" type="text" value="">
    <input type="submit" name="submit" value="Отправить">
</form>
<?php

if ((isset($_POST['text'])) and (isset($_POST['text'])) and ($_POST['submit'] == "Отправить"))
{
    $file = fopen ("form.txt","w+");
    $str = trim($_POST['text']);
    if (!$file )
    {
        echo("Ошибка открытия файла");
    }
    else
    {
        fputs ($file, $str);
    }
    fclose ($file);
}

?>
</body>

</html>