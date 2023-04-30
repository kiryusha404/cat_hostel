<?php 
    session_start();
    if($_SESSION['id']){
        echo "<script>window.location.href='index.php'</script>";
    }
?>
<div class="modal modal--book parent">
    <h1>Регистрация</h1>
    <form action="#" method="post" class="input">
        <input type="text" tabindex="1" required name="name" class="info_input" placeholder="Имя" value="<?php echo $_POST['name2'] ?>"> 
        <input type="tel" tabindex="2" required name="login" class="info_input" placeholder="Телефон" value="<?php echo $_POST['login'] ?>">
        <input type="email" tabindex="3" required name="email" class="info_input" placeholder="Почта" value="<?php echo $_POST['email'] ?>"> 
        <div class="password">
	        <input type="password" tabindex="4" id="password-input" required placeholder="Пароль" name="pass" class="info_input" value="<?php echo $_POST['pass'] ?>">
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input');"></a>
        </div>
        <div class="password">
	        <input type="password" tabindex="5" id="password-input2" required placeholder="Повтор пароль" name="pass2" class="info_input" value="<?php echo $_POST['pass2'] ?>">
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input2');"></a>
        </div>
        <?php 
            if(!empty($_POST['name']) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['pass'])){
                $push = 'SELECT nphone_user FROM users WHERE nphone_user="'.$_POST['login'].'"';
                $input = mysqli_query($cat_db, $push);
                $row = mysqli_fetch_array($input);
                if($row['nphone_user']==$_POST['login']){
                    echo "<p class='error'>Аккаунт с таким телефоном уже существует.</p>";
                }
                else{
                    if($_POST['pass'] == $_POST['pass2']){
                        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                        $pushdb = 'INSERT INTO `users` ( `name`, `pass_user`,`status_user`, `nphone_user`, `email_user`) VALUES ( "'.$_POST['name'].'", "'.$pass.'", "user", "'.$_POST['login'].'",  "'.$_POST['email'].'");';
                        $inpu = mysqli_query($cat_db, $pushdb);

                        $push = 'SELECT id_user, status_user FROM users WHERE nphone_user="'.$_POST['login'].'"';
                        $input = mysqli_query($cat_db, $push);
                        $row = mysqli_fetch_array($input);
                        $_SESSION['id'] = $row['id_user'];
                        $_SESSION['status'] = $row['status_user']; 
                        echo "<script>window.location.href='index.php'</script>";
                    }
                    else{
                        echo "<p class='error'>Пароли не совпадают.</p>";
                    }
                }
            }    
        ?>
        <button type="submit" class="info_input info_input_button">Зарегистрироваться</button>
    </form>
    <p>У вас уже есть аккаунт? <a href="authorization.php">Войти</a></p>
</div>
<script src="js/pass.js"></script>
