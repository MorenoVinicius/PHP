<?php 
/*************************************************************************
*   Objetivo: Arquivo para reunir funções para calculos matemático
*   Data de Criação: 29/09/2021
*   Autor: Marcel
**************************************************************************/

//Função para realizar as quatro operações matemáticas
function operacoesMatematicas ($numero1, $numero2, $operacao)
{
    //Declarando variaveis locais na função e recebendo os dados de parametros da função
    $valor1 = (float) $numero1;
    $valor2 = (float) $numero2;
    $opcao = (string) $operacao;

    $resultado = (float) 0;

    //Realiza o teste lógico de uma variavel
    switch ($opcao) 
        {
            case 'somar': //Valida a saida da varaivel testada no switch
                $resultado = $valor1 + $valor2;
                break;
                
            case 'subtrair': //Valida a saida da varaivel testada no switch
                $resultado = $valor1 - $valor2;
                break;
                
            case 'multiplicar': //Valida a saida da varaivel testada no switch
                $resultado = $valor1 * $valor2;
                break;
                
            case 'dividir': //Valida a saida da varaivel testada no switch
                $resultado = $valor1 / $valor2;
                break;
        }//Switch

    return $resultado;    
}

?>