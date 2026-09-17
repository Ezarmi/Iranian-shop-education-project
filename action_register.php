<?php
include("includes/header.php");
if (
    isset($_POST['realname']) && !empty($_POST['realname']) &&
    isset($_POST['username']) && !empty($_POST['username']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['repassword']) && !empty($_POST['repassword']) &&
    isset($_POST['email']) && !empty($_POST['email'])
) {
    $realname = $_REQUEST['realname'];
    $username = $_REQUEST['username'];
    $passwrod = $_REQUEST['password'];
    $repassword = $_REQUEST['repassword'];
    $email = $_REQUEST['email'];
} else {
    exit("برحی از فیلدها مقداردهی نشده اند.");
}
if ($passwrod != $repassword) {
    exit("رمز عبور و تکرار آن یکسان نیست");
}
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    exit("پست الکترونیک وارد شده صحیح نیست.");
}

$link = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno()) {
    // printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit("خطایی با شرح زیر رخ داده است:" . mysqli_connect_errno());
}

$query = "INSERT INTO users (realname,username,password,email,type)
                    VALUES ($realname,$username,$passwrod,$email,'0')";

if (mysqli_query($link,$query)===true){
    echo("<p style='color:green;'><b>".$realname.
        "گرامی عضویت شما با نام کاربری".$username.
    "در فروشگاه با موفقیت انجام شد"."</b></p>");
} else {
    echo("<p style'color:red;'><b>عضویت شما در فروشگاه انجام نشد</b></p>");
}

// بستن اتصال
mysqli_close($link);
?>

<div>
    <?php
    echo ("realname=" . $realname . "<br/>");
    echo ("username=" . $username . "<br/>");
    echo ("password=" . $passwrod . "<br/>");
    echo ("repassword=" . $repassword . "<br/>");
    echo ("email=" . $email . "<br/>");
    ?>

    <?php
    include("includes/footer.php");
    ?>