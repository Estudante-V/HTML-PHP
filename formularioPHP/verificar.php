<?php
if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $enail = $_POST['email'];
    $msg ='mensagem enviada com sucesso';
    echo $msg;
    unset($msg);
    
}