<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $para = "erivancled@hotmail.com";
        $assunto = "Teste";
        $mesagem = "Mesagem teste";
        $header = "From: erivan@zembrax.com". "\r\n".
                'X-Mailer: PHP/' .  phpversion();
        
        //envia o email
        mail($para, $assunto, $mensagem, $header);
        
        
        ?>
    </body>
</html>
