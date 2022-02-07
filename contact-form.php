<?php
 if(isset($_POST['submit'])) {
     $name = $_POST['name'];
     $surname = $_POST['surname'];
     $mailFrom = $_POST['email'];
     $message = $_POST['message'];

     $mailTo = "zstojicic92@gmail.com";
     $headers = "From: ".$mailFrom;
     $txt = "You have recevied an e-mail from ".$name.".\n\n".$message;

     mail($mailTo, $txt, $headers);
     header("Location: index.html?mailsend");
 }


?>