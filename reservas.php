<?php
            


/*
            if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['texto']) && !empty($_POST['NPessoas'])){
                
                $pessoas = mysql_real_escape_string($_POST['selected_text']); // get the selected text
                $assunto = $_POST['nome'] . " - reservas";
                $corpo = "De: " . $_POST['nome'] . "<" . $_POST['email'] . ">\n\n Reserva em nome de " . $_POST['nome'] . " para mesa de " . $pessoas . " pessoas. \n Observações: ". $_POST['texto'];
                send_email("matilde.branco96@gmail.com",$assunto, $corpo);
            }

            function send_email($para, $assunto, $corpo){
                if (mail($para, $assunto, $corpo)) {
                    echo("<script> alert('Mensagem pronta para envio!'); history.back() </script>");
                } else {
                    echo("<script> alert('Falha no envio!!'); history.back() </script>");
                }
            }

*/
            if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['texto']) ){
                
               // $pessoas = mysql_real_escape_string($_POST['selected_text']); // get the selected text
                $assunto = $_POST['nome'] . " - reservas";
                $corpo = "De: " . $_POST['nome'] . "<" . $_POST['email'] . ">\n\n Reserva em nome de " . $_POST['nome'] . " para mesa de  pessoas. \n Observações: ". $_POST['texto'];
                send_email("matilde.branco96@gmail.com",$assunto, $corpo);
            }

            function send_email($para, $assunto, $corpo){
                if (mail($para, $assunto, $corpo)) {
                    echo("<script> alert('Mensagem pronta para envio!'); history.back() </script>");
                } else {
                    echo("<script> alert('Falha no envio!!'); history.back() </script>");
                }
            }


        ?>
