<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="/public/style.css">-->
    <title>Авторизация</title>
    <style>
        html {
            margin: 1px;
            padding: 1px;
            width: 100%;
            height: 100%;
        }
        nav {
            color: red;
            display: flex;
            justify-content: center;
            padding: 5px;
            box-sizing: border-box;
            background-color: #7EC1FF;
        }
        .nav a {
            text-decoration: none;
            color: white;
            padding: 5px;
        }
        .log {
            display: flex;
            justify-content: center;
        }
        .login {
            display: flex;
            flex-direction: column;
        }
        .forml {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: center;
            padding: 5px;
        }
        .inlogn{
            padding: 5px;
        }
        .inlogn input{
            padding: 5px;
            width: 230px;
            height: 39px;
            border-radius: 20px;
            border: none;
        }
        .back_log {
            display: flex;
            padding: 70px;
            flex-direction: column;
            border: 1px solid #7EC1FF;
            background-color: #7EC1FF;
            border-radius: 20px;
            align-items: center;
            justify-content: center;
        }
        .but_log {
            background: white;
            margin: 5px;
            border: 1px solid  black;
            cursor: pointer;
            border-radius: 20px;
            text-align: center;
            text-decoration: none;
            color: black;
        }
        .but_logs:hover {
            background: #44A4FC;
            margin: 5px;
            border: 1px solid  black;
            cursor: pointer;
            border-radius: 20px;
            text-align: center;
            text-decoration: none;
            color: black;
        }
        .fot_back{
            display: flex;
            box-sizing: border-box;
            background-color: #7EC1FF;
            color: white;
            padding: 5px;
            width: 100%;
            height: 78px;
            position: absolute;
            bottom: 0%;
        }
        .fot_Author {
            font-size: 10px;
            display: flex;
            flex-direction: column-reverse;
        }
        .inreg {
            padding: 5px;
        }
        .inreg_input{
            padding: 5px;
            width: 230px;
            height: 39px;
            border-radius: 20px;
            border: none;
        }
        .back_add {
            display: flex;
            padding: 70px;
            flex-direction: column;
            border: 1px solid #7EC1FF;
            background-color: #7EC1FF;
            border-radius: 20px;
            align-items: center;
            justify-content: center;
        }
        .adduser {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: center;
            padding: 5px;
        }
        .add_user {
            padding: 5px;
        }
        .add_user input{
            padding: 5px;
            width: 230px;
            height: 39px;
            border-radius: 20px;
            border: none;
        }

        .ad_user {
            display: flex;
            flex-direction: column;
        }

        .Error{
            margin-bottom: 15px;
            text-align: center;
            color: red;

        }

        .img_user {
            width: 50px;
            height: 50px;
            margin-right: 50px;
        }
    </style>
</head>
<main>
    <div class="login">
        <h3><?= $message ?? ''; ?></h3>

        <h3><?= app()->auth->user()->name ?? ''; ?></h3>
        <?php
        if (!app()->auth::check()):
        ?>
        <form class="forml" method="post">
            <div class="back_log">
                <div class="log">
                    <h2>Авторизация</h2>
                </div>
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <label class="inlogn" ><input type="text" name="login" placeholder="Логин"></label>
                <label class="inlogn" ><input type="password" name="password" placeholder="Пароль"></label>
                <button class="but_log" >Авторизоваться</button>
            </div>
        </form>
    </div>
</main>
<footer>
    <div class="fot_back">
    </div>
</footer>
<?php endif;