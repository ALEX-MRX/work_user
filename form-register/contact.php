<?php 

    session_start();
   
    $id_contact = $_POST['id_contact'];
    $id_users = $_POST['id_users'];
    $content = $_POST['content'];

    $phoneNumber = $_POST['phoneNumber'];
    $street = $_POST['street'];
    $mail = $_POST['mail'];

    require "connect.php";
    $result = $mysql->query("SELECT * FROM `contacts` WHERE `id_user` = '$id_users'");
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION['id_contact'] = $row['id_contact'];
        }
    }
     
   if($id_contact != $_SESSION['id_contact']){
    $mysql->query("INSERT INTO `contacts` (`id_user`, `id_contact`, `content`, `phoneNumber`, `street`, `mail`) VALUES('$id_users', '$id_contact', '$content', '$phoneNumber', '$street', '$mail')");
   }
    
    
    
    
    $mysql->close();
?>

<p>fheawui</p>