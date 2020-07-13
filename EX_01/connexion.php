<?php $page = 'page connexion'?>

<!doctype html>
<html>
    <title>Connexion</title>
    <meta charset="utf-8">

<body>
<form method="POST" action="securite.php">
        <label for="login">Login</label>
    <div id="login">
        <input type="text" name="login" id="login">
    </div>

    
        <label for="password">Password</label>
    <div id="password">
        <input type="text" name="password" id="password">  
    </div>

    <input type="submit" value="Envoyer">
    </form>
</body>
</html>