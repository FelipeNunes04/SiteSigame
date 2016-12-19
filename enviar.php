<?php   

      $name = $_POST['name'];
      $email = $_POST['email']; 
      $subject = $_POST['subject'];
      $message = $_POST['message']; 
      $captcha = $_POST['g-recaptcha-response'];; 

      if($captcha == ""){ 
            echo "<script>alert('Erro, preencha os dados novamente e selecione o captcha por favor.');</script>";
            echo "<script>window.location.href='index.php#contact'</script>";
      } 

      $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf3Iw8UAAAAAAS_2BDdEYq6S4IVDC4uJ91MkouT&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']));

      // Compo E-mail
      $arquivo = "
      <style type='text/css'>
      body {
      margin:0px;
      font-family:Verdane;
      font-size:12px;
      color: #666666;
      }
      a{
      color: #666666;
      text-decoration: none;
      }
      a:hover {
      color: #FF0000;
      text-decoration: none;
      }
      </style>
      <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
                <tr>
                 <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>$email</b></td>
                </tr>
                <tr>
                  <td width='320'>Assunto:<b>$subject</b></td>
                </tr>
                <tr>
                  <td width='320'>Mensagem:$message</td>
                </tr>
            </td>
          </tr>  
        </table>
      </html>
      ";

      //enviar

      // emails para quem será enviado o formulário
      $destino = "felipennunes@hotmail.com";
      $assunto = "Contato pelo Site do Siga-me";

      // É necessário indicar que o formato do e-mail é html
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $name <$email>';

      $enviaremail = mail($destino, $assunto, $arquivo, $headers);
      if($enviaremail){
      echo "<script>alert('Olá $name, Seu orçamento foi solicitado com sucesso, entraremos em contato o mais breve possível.');</script>";
      echo "<script>window.location.href='index.php'</script>"; 
      } else {
      echo "<script>alert('Olá $name, ocorreu um erro ao enviar o seu pedido de orçamento, por favor, tente novamente mais tarde.');</script>";
      echo "<script>window.location.href='index.php'</script>";
      }
      
       
      
 ?> 