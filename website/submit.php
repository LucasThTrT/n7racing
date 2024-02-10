<?php    

        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $email_from = 'lucasthietart@hotmail.com';
        
        $email_subject = 'Nouveau Formulaire Rempli !!';
        
        $email_body = "Nom: $name.\n".
                        "Email: $visitor_email.\n".
                        "Sujet: $subject.\n".
                        "Message: $message .\n";
        
        $to = 'thietartl@gmail.com';
        
        $headers = "From: $email_from \r\n";
        
        $headers .= "Reply-To: $visitor_email \r\n";
        
        mail($to,$email_subject,$email_body,$headers);
        
        echo "<p>Votre Formulaire a bien été transmis</p>"; 
        
?>