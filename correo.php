<?php
if (isset($POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['pedido']) && !empty($_POST['direccion']) && !empty($_POST['email'])){
        $name = $_POST['name'];
        $msg = $_POST['pedido'];
        $asunto = $_POST['direccion'];
        $email = $_POST['email'];
        $header = "From: tamalescrisoficial@gmail.com" . "\r\n";
        $header.= "Reply-To: tamalescrisoficial@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($msg,$asunto,$email,$header);
        if($mail){
            echo "<h4> Mensaje enviado </h4>";
        }
    }
}
?>

