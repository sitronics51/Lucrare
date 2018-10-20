
<?php include("header.php"); ?>
<?php
if(isset($_POST["register"])){
    if(!empty($_POST['u_name']) &&  !empty($_POST['u_email']) ) {
        $connect=mysqli_connect('localhost', 'root', '', 'site');
        $name=mysqli_real_escape_string($connect,$_POST['u_name']);
        $email=mysqli_real_escape_string($connect,$_POST['u_email']);
        $query=mysqli_query($connect,"SELECT * FROM `Lucrare` WHERE name='{$name}'");
        $numr=mysqli_num_rows($query);
        if($numr==0)
        {
            $sql_q="INSERT INTO `useri`
 (name,email)
 VALUES('{$name}', '${email}'";
            $res=mysqli_query($connect,$sql_q);
            if($res){
                echo "Аккаунт успешно создан";
            }
            else {
                echo "Не удалось добавить информацию";
            }
        }
        else {
            echo "Этот ник занятый. Попробуйте другой!";
        }
    }else {
        //$info = "Все поля обязательны для заполнения!";
        echo "Все поля обязательны для заполнения!";
    }
}
?>
<body>
<div>
    <div>
        <h1>Inregistrare</h1>
        <form action="" method="post" name="registerform">
            <p><label>Name:<br>
                    <input name="u_name" size="20" type="text" value=""></label></p>
            <p><label>E-mail:<br>
                    <input name="u_email" size="30" type="email"></label></p>
            <p><label>Storage:<br>
                    <input name="u_storr" size="30" type="storage"></label></p>
            <form>
                <select name="s1">
                    <option value="db">Database</option>
                    <option value="file">Fisier</option>
                </select>

            </form>
            <p><a href="log.php">Sunteti inregistrat</a></p>
        </form>
    </div>
</div>
</body>
</html>