<?php
    $login=$_POST['login'];
    $password=$_POST['password'];


        if ($password ==  "2020"){
            session_start();
            $_SESSION['id']=$login;
            setcookie('id', $_SESSION['id'], time() +365*24*3600, null, null, false, true);
            header('Location: http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=1');
            exit();
        }
            

        else{
            echo '<h3>Mauvais couple identifiant / mot de passe.</h3>';
            echo '<p><A HREF="http://localhost/ISCC/J09/EX_01/mini-site-routing.php?page=connexion">Réessayer</A></p>';
        }

function connect_to_database(){
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $databasename = "basetest01";

try{
    $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO produit(id, nom, description, prix, quantite)
    VALUES (8, 'T-shirt noir', 'T-shirt coton de couleur noire', 15.50, 10)";
    $pdo->exec($sql);
    echo "Ajout réussi";
}
catch (PDOException $e){
    echo "Echec de connexion : ". $e->getMessage();
}
}
connect_to_database();
?>