<?php  
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $assunto = $_POST['subject'];
    $mensagem = $_POST['message'];
    $headers = "From: " . $nome;
    $corpoemail = 'E-mail enviado atraves do site

                    nome: '.$nome.'
                    E-mail: '.$email.'
                    Assunto: '.$assunto.'
                    Mensagem: '.$mensagem;
    ini_set("smtp.gmail.com", 587);
    $envio = mail("p2p.ufpe@gmail.com", "Contato", $corpoemail, $headers);
    if ($envio) {
        echo "<script>alert('Mensagem enviada com sucesso, aguarde resposta');</script>";
        header('Location: index.html');
    }
    else{
        echo "<script>alert('Ocorreu um erro ao enviar mensagem, tente novamente mais tarde');</script>";
        header('Location: index.html');
    }



?>
