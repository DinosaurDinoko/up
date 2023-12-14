<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        html {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
        }
        .nav {
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
        .but_logs {
            background: white;
            margin: 5px;
            border: 1px solid  black;
            cursor: pointer;
            border-radius: 20px;
            text-align: center;
            text-decoration: none;
            color: black;
            width: 1200px;
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
        .but_log:hover {
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
        .inreg input{
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
        .back_calc {
            display: flex;
            padding: 20px;
            margin: 20px;
            flex-direction: column;
            border: 1px solid #7EC1FF;
            background-color: #7EC1FF;
            width: 1200px;
            text-align: center;
        }
        .back_calc button {
            border: none;
            border-radius: 20px;

        }
        .back_calc button:hover {
            background-color: #44A4FC;
        }
        .calc_all {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 150px;
        }
        .back_calc1 {
            display: flex;
            padding: 20px;
            margin: 20px;
            flex-direction: column;
            justify-content: center;
            border: 1px solid #7EC1FF;
            background-color: #7EC1FF;
            align-items: center;
            width: 1200px;
        }
        .but_calc {
            border: none;
            border-radius: 20px;

            cursor: pointer;
            background-color: #7EC1FF;
            text-decoration: none;
        }
        .but_calc:hover {
            background-color: #44A4FC;
        }
    </style>
    <title>Места</title>
</head>
<main>
    <div class="calc_all">
        <div class="calc">
            <form class="forml" method="get">
                <div class="back_calc1">
                    <h2>Общее количество посадочных мест для преподователей</h2>
                </div>
                <div class="back_calc1">
                    <p2>По главному корпсу</p2>
                    <h2>
                        <?= $subvision[0] ->rooms ->sum('slot_prepod');?>
                    </h2>
                    <p2>По второму корпсу</p2>
                    <h2>
                        <?= $subvision[1] ->rooms ->sum('slot_prepod');?>
                    </h2>
                    <p2>По третьему корпсу</p2>
                    <h2>
                        <?= $subvision[2] ->rooms ->sum('slot_prepod');?>
                    </h2>
                    <a  class="but_logs"  href="<?= app()->route->getUrl('/Calculations') ?>">Хорошо</a>
                </div>
            </form>
        </div>
    </div>
</main>
<footer>
    <div class="fot_back">
    </div>
</footer>