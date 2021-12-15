<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votes</title>
    <style>
        body{
            background: #222222;
            color: whitesmoke;
            display: flex;
            flex-direction: row;
        }
    </style>
</head>
<body>
<?php
  function showForm1() {
   echo "   <!DOCTYPE html>
            <div align='center'>
            <form action = '".$_SERVER["SCRIPT_NAME"]."' id='logs' method = 'post' name = 'form'>
            <fieldset style='width:0'>
            <legend>Вход</legend>
            <p>Введите свой логин</br>
            <input type = 'text' name = 'login'><br>
            </p>
            <p>
            <input type='submit' name = 'log' id='b1' value='Войти'>
            </p>
            </fieldset></form></div></body></html>";
      }
  
  function showForm2(){
    echo "<!DOCTYPE html>
        <html><head><title>Сайт</title></head><body>
        <div align='center'>
        <form action = '".$_SERVER["SCRIPT_NAME"]."' id='del' method = 'post' name = 'formation'>
        <fieldset style=width:0>
        <input name ='del' type='submit' id='b1' value='Выйти'>
        </fieldset></form></div></body></html>";
  }

if (isset($_POST['log'])) 
  {
    $login = $_POST['login'];
    setcookie("login", $login , time() + 60*60*24*30);
    header("Location: ".$_SERVER['HTTP_REFERER']); 
    }
    elseif  (isset($_POST['del']))
        {
            setcookie("login");
            header("Location: ".$_SERVER['HTTP_REFERER']); 
        };
 
?>
</body>
<html>
<body>
<?php
error_reporting(0);
    $login = $_COOKIE['login'];
    if (isset($login)) 
    {
        echo "Здравствуйте, $login";
        echo showForm2();
    }
    else echo showForm1();
?>
</body>
</html>
</html>
