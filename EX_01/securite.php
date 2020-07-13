<?php 
session_start();

echo $_POST['login'];
echo '<br>';
echo $_POST['password'];
echo '<br>';

function connect_to_database(){
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = "base-site-rooting";


try {
    $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo "<p> Vous êtes connecté</p>";
    return $pdo;
}
catch (PDOException $e) {
    echo "<p> Vous n'êtes pas connecté</p>".$e->getMessage();
}
}
function login($pdo)
{
    try{
        if (!empty($_POST['login'])&& !empty($_POST['password'])){
            $login = $_POST['login'];
            $password = $_POST['password'];
            
            $requete=$pdo->query("SELECT passwordd
            FROM utilisateurs
            WHERE login='login'");
        $res=$requete->fetchAll();

        if($res){
            if ($password == $res [0]['passwordd']){
                echo "Connexion réussie : bon couple identifiant / mot de passe.";
            } else{
                echo "Mauvais couple identifiant / mot de passe.";

            }
        }else{
                echo '<a href="http://localhost:8888/ISCC-2020/ISCC-2020-J12/EX_01/mini-site-routing.php?page=connexion"</a>';
            }
            }
        } catch (PDOException $e){
            echo "Login erreur " . $e->getMessage();        
    }
}

$pdo = connect_to_database();
login($pdo);

$clied = array_keys($_SESSION);
if (array_key_exists('id', $_SESSION) == true) {
    setcookie($cleid['id']);
}
?>