<style>
    html {
        margin: 1px;
        padding: 1px;
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
    .sub {
        padding: 50px;
        height: 300px;
        display: flex;
        justify-content: center;

    }
    .sub_all {
        display: flex;
        flex-direction: column;
        color: black;
        align-items: center;
        border: 1px solid black;
        padding: 50px;
        margin-top: 50px;
        height: 300px;
    }
    .sub_all a {
        padding: 5px;
        margin: 5px;
        border: 1px solid black;
        cursor: pointer;
        background-color: #7EC1FF;
        text-decoration: none  ;
        color: black;
    }
    .sub_all a:hover {
        padding: 5px;
        margin: 5px;
        border: 1px solid black;
        cursor: pointer;
        background-color: #44A4FC;
        text-decoration: none  ;
        color: black;

    }
    .sub_all a {
        padding: 5px;
        margin: 5px;
        border: 1px solid black;
        cursor: pointer;
        background-color: #7EC1FF;
        text-decoration: none  ;
        color: black;
        width: 200px;
        text-align: center;
    }
    .sub_all h2 {
        padding: 5px;
        margin: 5px;
        border: 1px solid black;
        cursor: pointer;
        background-color: #7EC1FF;
        text-decoration: none  ;
        color: black;
    }

    .sub_answer {
        display: flex;
        flex-direction: column;
        margin-top: 50px;
    }
    .sub_answer h2 {
        padding: 5px;
        margin: 5px;
        border: 1px solid black;
        background-color: #7EC1FF;
        text-decoration: none  ;
        color: black;
    }
    .sub_answer a {
        display: flex;
        margin: 5px;
        justify-content: center;
    }
    .sub_obj   {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .nav_sub {
        color: red;
        display: flex;
        margin: 50px;
        justify-content: center;
        padding: 5px;
        box-sizing: border-box;
        background-color: #7EC1FF;

    }
    .nav_sub a {
        text-decoration: none;
        color: white;
        padding: 5px;
    }
    .img_room {
        width: 400px;
        height: 400px;
        margin-top: 60px;
        margin-right: 80px;
    }
</style>
<div class="sub">
    <p>
    <div class="sub">
        <div class="sub_all">
            <?php
            foreach ($room as $rooom) {
                ?>
                <div class="sub_obj">
                    <a href="<?= app()->route->getUrl('/roomView') ?>?id=<?= $rooom->id ?>"><?= $rooom->name?></a>

                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>