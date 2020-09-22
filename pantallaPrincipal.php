<?php
$numero = $_GET["numero"];
$exp = "1";

function obtenerFactorial($num){
    $factorial = 1;
    for ($it = 1; $it<=$num; $it++){
        $factorial = $factorial * $it;
    }
    return $factorial;
}
    echo   '<br>
            <table border = 1px>
           <tr style = "background-color: black;">
                <td style = "color:white;">Iteracion</td>
                <td style = "color:white;">Expresion</td>
                <td style = "color:white;">Valor</td>
            </tr>';
    
    for($it=1;$it<=$numero;$it++){
        $exp = $exp.'*'.$it;
        echo '
            <tr>
                <td>'.$it.'</td>
                <td>'.$exp.'</td>
                <td>'.obtenerFactorial($it).'</td>
            </tr>
        ';
        
    }
            
    echo    '</table>';

?>