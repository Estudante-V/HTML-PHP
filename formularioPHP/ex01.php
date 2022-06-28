<?php
   /* function imprimirNome($nome){
        echo "Olá meu nome é $nome <hr>";
    }
    imprimirNome('Vinicius Alves Borba');
    imprimirNome('Cleber Figueiro');
    imprimirNome('Maria')


*/
function cacular($nome,$nota1,$nota2,$nota3){
    $media = ($nota1+$nota2+$nota3)/3;
    if($media>=6):
        echo "$nome foi aprovado, sua média é $media";
    else:
        echo "$nome foi reprovado, sua média é $media";
    endif;
    }
    cacular('Vinicius', 10,10,10);
?>