<?php 
    session_start();
    if($_SESSION['id']){
        echo "<script>window.location.href='index.php'</script>";
    }
?>
<div class="nav_form">
    <h1>Авторизация</h1>
    <form action="#" method="post" class="input">
        <input type="text" tabindex="1" required name="login" class="info_input" placeholder="Номер телефона" value="<?php echo $_POST['login'] ?>"> 
        <div class="password">
	        <input type="password" tabindex="2" id="password-input3" required placeholder="Пароль" name="pass" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input3');"></a>
        </div>
        <button type="submit" class="info_input info_input_button">Войти</button>
    </form>
    <p>У вас нет аккаунта? <a href="registration.php">Создать</a></p>
</div>
<?php 
        if(!empty($_POST['login']) && !empty($_POST['pass'])){
            $push = 'SELECT id_user, pass_user FROM users WHERE nphone_user="'.$_POST["login"].'"';
            $input = mysqli_query($cat_db, $push);
            $row = mysqli_fetch_array($input);
                if(password_verify($_POST['pass'], $row['pass_user'])){
                   $_SESSION['id'] = $row['id_user']; 
                   echo "<script>window.location.href='index.php'</script>";








                }
                else{
                    echo "<p class='error'>Неверный логин или пароль.</p>";
                }
        }
        ?>