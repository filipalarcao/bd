<?php
            if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['texto']) && !empty($_POST['NPessoas'])){
                $assunto = $_POST['nome'] . " - reservas";
                $corpo = "De: " . $_POST['nome'] . "<" . $_POST['email'] . ">\n\n reserva para " $pessoas "pessoas". $_POST['texto'];
                send_email("matilde.branco96@gmail.com",$assunto, $corpo);
                send_email("filsun6@gmail.com",$assunto, $corpo);
            }

            function send_email($para, $assunto, $corpo){
                if (mail($para, $assunto, $corpo)) {
                    echo("<script> alert('Mensagem pronta para envio!');
history.back() </script>");
                } else {
                    echo("<script> alert('Falha no envio!!'); history.back() </script>");
                }
            }

            if(isset($_POST['search']))
{

    $pValue = $_POST['NPessoas']; // make value

    $pessoas = mysql_real_escape_string($_POST['selected_text']); // get the selected text
    echo $pessoas;
}
        ?>
