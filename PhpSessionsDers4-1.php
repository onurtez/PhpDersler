<?php session_start(); ?>

<!doctype html>
<html>
<head>
    <title>Session Kullanımı Örneği</title>
</head>
<body>
<h1>Örnek Form</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Ad Soyad :<input type="text" name="ad_soyad">
    E-Posta  :<input type="text" name="eposta">

    <input type="submit" name="submit" value="Session Oluştur">
</form>

<br>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['eposta']))
        $_SESSION['eposta']=$_POST['eposta'];


    if(isset($_POST['ad_soyad']))
        $_SESSION['ad_soyad']=$_POST['ad_soyad'];

}
?>

<?php if(isset($_SESSION['eposta'])){ ?>
    Kayıtlı E-Posta : <b><?= $_SESSION['eposta']; ?></b>
<?php } ?>

<?php if(isset($_SESSION['ad_soyad'])){ ?>
    Kayıtlı Ad Soyad : <b><?= $_SESSION['ad_soyad']; ?></b>
<?php } ?>

</body>
</html>