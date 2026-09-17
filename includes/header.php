<?php
session_start();
?>
<!Doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>فروشگاه ایرانیان</title>
    <link href="./assets/css/style.css" type="text/css" rel="stylesheet">
    <style type="text/css">
        .set_style_link {
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="divTable" style="text-align: center;">
        <div class="divTableRow">
            <div class="divTableCell">
                <header class="divTable">
                    <div class="divTableRow">
                        <div class="divTableCell">لوگوی سایت </div>
                    </div>
                </header>
                <nav class="divTable">
                    <ul class="divTableRow">
                        <li class="divTableCell">
                            <a href="index.php" target="_blank" class="set_style_link">
                                صفحه اصلی
                            </a>
                        </li>
                        <li class="divTableCell">
                            <a href="register.php" target="_blank" class="set_style_link">
                                عضویت در سایت
                            </a>
                        </li>
                        <?php
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
                            ?>
                            <li class="divTableCell">
                                <a href="logout.php" target="_blank" class="set_style_link">
                                    خروج از سایت
                                    <?php echo ("({$_SESSION["realname"]})") ?>
                                </a>
                            </li>
                            <?php
                        } // end of if
                        else {
                            ?>
                            <li class="divTableCell">
                                <a class="set_style_link" href="login.php" target="_blank">
                                    ورود به سایت
                                </a>
                            </li>
                            <?php
                        } //end of else
                        ?>

                        <li class="divTableCell">
                            <a href="#" target="_blank" class="set_style_link">
                                درباره ما
                            </a>
                        </li>
                        <li class="divTableCell">
                            <a href="#" target="_blank" class="set_style_link">
                                ارتباط با ما
                            </a>
                        </li>
                        <?php
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] == "admin") {
                            ?>
                            <li class="divTableCell">
                                <a href="admin_products.php" target="_blank" class="set_style_link">
                                    مدیریت سایت
                                </a>
                            </li>
                            <?php
                        } //end of if
                        ?>
                    </ul>
                </nav>
                <section class="divTable">
                    <section class="divTableRow">
                        <aside class="divTableCell" style="width: 25%;">بخش امکانات سایت</aside>
                        <section class="divTableCell" style="width: 75%;">