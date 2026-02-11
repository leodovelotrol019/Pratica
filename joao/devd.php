<?php
$dia = "$_POST";


switch ($dia) {
    case "sabado":
    case "Sabado":
    case "domingo":
    case "Domingo":
    echo "É final de semana";    
    break;
            

    case 'segunda':
    case 'terça':
    case 'quarta':
    case 'quinta':
    case 'sexta':
    echo "hj é dia de semana";       
    break;
        
    default:
    echo "insira o dia";
        break;
}

?>