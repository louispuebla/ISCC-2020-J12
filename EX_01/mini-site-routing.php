<!DOCTYPE html>

<html>
    <meta charset="utf-8">
<header>
    <title>Mini site routing</title>
    <A HREF="http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=1">ACCUEIL</A> 
    <A HREF="http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=2">PAGE 1</A> 
    <A HREF="http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=3">PAGE 2</A>
    <A HREF="http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=connexion">PAGE CONNEXION</A>
    <A HREF="http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=admin">ADMIN</A>

</header>

<body>

<?php
session_start();
    if($_GET['page'] ==1){
   echo '<h1>Accueil !</h1>';

}
    elseif($_GET['page'] ==2){
    echo '<h1>Page 2 !</h1>';
}
    elseif ($_GET['page'] ==3){
    echo '<h1>Page 3 !</h1>';
}
    elseif ($_GET['page'] =='connexion'){
    echo '<h1>Connexion</h1>';
    include("connexion.php");
}
    elseif ($_GET['page'] =='admin'){
    echo '<h1>Admin</h1>';
    include("admin.php");
}
?>

<?php
    if(array_key_exists('id', $_SESSION)){
    echo 'Login: '.$_SESSION['id'];
    }

    if(!array_key_exists('id', $_SESSION)){
        if($_COOKIE['id']){
            $_SESSION['id']=$_COOKIE['id'];
        }
        else{
        echo '<p><A HREF="http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=connexion"></p>';
        }
    }
?>
</body>
<footer>
</footer>
</html>