<?php

/* FUNÇÃO CRIADA PARA SERVIR DE HELPER E MOSTRAR UMA MENSAGEM SEMANTICA NO TRY-CATCHH */

function MostrarErrorException( $th ) {

    echo 'Erro no arquivo : ' . '<strong>' . $th->getFile() . '</strong>' . '<br>' . '<br>' .
    ' Causa do Erro : ' . '<strong>' . $th->getMessage() . '</strong>' . '<br>' . '<br>' .
    ' Erro ocorrido na linha :  ' . '<strong>' . $th->getLine() . '</strong>' . '<br>' . '<br>';

}
