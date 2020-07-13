  
<?php
    $name = $_FILES['userfile']['name'];   
if (isset($name)){
    if (strlen(explode('.', $name)[0]) < 5)
        echo "Le fichier ne correspond pas aux attentes.";
    else {
        $ext = explode('.', $_FILES['userfile']['name'])[1];
        $extposs = array("jpg", "jpeg", "png", "JPG", "JPEG", "PNG");
        if (in_array($ext, $extposs)){
        echo "<p><strong>Nom du fichier:</strong> ".$_FILES['userfile']['name']."</p>";
        echo "<p><strong>Type du fichier:</strong> ".$_FILES['userfile']['type']."</p>";
        echo "<p><strong>Size du fichier:</strong> ".$_FILES['userfile']['size']."</p>";
        $_SESSION['description']=$_POST['description'];
        $_SESSION['titre']=$_POST['titre'];
    
        }
        else{
            echo "Le fichier ne correspond pas aux attentes.";  
        }
    }
}
?>
<?php
function upload_file($upload)
{
if(isset($_FILES['userfile'])){
    $name_file =$_FILES['userfile']['name'];
    $tmp_name = $_FILES['userfile']['tmp_name'];
    $local_image ="uploaded/";
    $upload = move_uploaded_file($tmp_name, $local_image.$name_file);
    echo $_SESSION['image']= 'uploaded/'.$_FILES['userfile']['name'];

    if($upload){
        echo 'uploaded this file'.$name_file;
    }
    else{
        echo 'le téléchargement a échoué.';
    }
}
}
upload_file($upload)
?>