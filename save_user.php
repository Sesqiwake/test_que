 <?php
    include "head.html";
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['first_name'])) { $name=$_POST['first_name']; if ($name =='') { unset($name);} }
    if (isset($_POST['last_name'])) { $fam=$_POST['last_name']; if ($fam =='') { unset($fam);} }
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
    if (isset($_POST['tel'])) { $tel=$_POST['tel']; if ($tel =='') { unset($tel);} }
 if (empty($login) or empty($password) or empty($name) or empty($fam) or empty($email) or empty($tel)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $name = stripcslashes($name);
    $name = htmlspecialchars($name);
    $fam = stripcslashes($fam);
    $fam = htmlspecialchars($fam);
    $email = stripcslashes($email);
    $email = htmlspecialchars($email);
    $tel = stripcslashes($tel);
    $tel = htmlspecialchars($tel);
   

    $login = trim($login);
    $password = trim($password);
    $name = trim($name);
    $fam = trim($fam);
    $email = trim($email);
    $tel = trim($tel);

    $message  = "Имя: " . $name. "<br/>";
    $message .= "E-mail: " . $email . "<br/>";
    $message .= "Телефон: " . $tel . "<br/>";
    $message .= "Логин: " . $login; 
    
    include ("bd.php");
 
    $result = mysqli_query($connection,"SELECT * FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id_user'])) {
    exit ("<div style=' position: absolute; top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)' class='alert alert-warning' role='alert'>Логин занят, введите другой<br/><a style='align:center' href='/' class='alert-link'> Назад</a></div>");
    }
 
    $result2 = mysqli_query ($connection,"INSERT INTO users (login,password,first_name,last_name,email,tel) VALUES('$login','$password','$name','$fam','$email','$tel')");

    if ($result2=='TRUE')
    {    
    send_mail($message); // отправим письмо
    echo "<div style=' position: absolute; top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)' class='alert alert-success' role='alert'>Вы успешно зарегистрированы</div>";
    }
 else {
    echo "<div style=' position: absolute; top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)' class='alert alert-danger' role='alert'>Ошибка! Вы не зарегистрированы.</div>";
    }

    function send_mail($message){
    $mail_to = "admin@mail.ru"; 
    $subject = "Feedback message";
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: Новая регистрация <no-reply@test.com>\r\n";
    mail($mail_to, $subject, $message, $headers);
  }
    ?>

