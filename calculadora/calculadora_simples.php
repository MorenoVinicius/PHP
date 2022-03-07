<?php

    
    //  _once - faz o import e valida se esse arquivo já não importado na memória
    /*include
    include_once

    require
    require_once
    */
    
    //Import do arquivo de funções que realiza os calculos matemáticos
    require_once('modulo/calculos.php');
    require_once('modulo/config.php');

	//Declarando variaveis e definindo tipos de dados
	$valor1 = (float) 0;
	$valor2 = (float) 0;
	$opcao = (string) null;
	$resultado = (float) 0;
    $radioSubtrair = (string) null; //Resolvendo o checked do radio na opção 02
  

	//Validação para testar se o botão calcular foi clicado
	if(isset($_POST['btncalc']))
	{
		//Recebendo dados do Formulário através do metodo POST
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST['txtn2'];

        //Validação para verificar se as opções de oparação (rdocalc) foram selecionadas no formulário
        if(isset($_POST['rdocalc']))
        {
            $opcao = $_POST['rdocalc'];

            
                //Validação de Caixa Vazia
                if($valor1 == "" || $valor2 == "")
                {     //Para concatenar no PHP usamos o (.) ponto
                    echo ("<span class='msgErro'>" . ERRO_CAIXA_VAZIA . "</span>");
                } else
                {
                    //Validação para entrada de dados não numericos
                    if(is_numeric($valor1) && is_numeric($valor2))
                    {
                        // chama a funçao para realizar o calcluo matemático
                        $resultado = operacoesMatematicas($valor1, $valor2, $opcao);
                        
                    }//Validação para caractares não numericos
                    else
                    {
                        echo("<span class='msgErro'>".ERRO_CARACTER_INVALIDO."</span>");
                    }
            }//Validação de Caixa Vazia	
        }//validação do rdocalc
        else
        {
            echo("<span class='msgErro'>". ERRO_OPERACAO_MATEMATICA ."</span>");
        }
	}//Validação se o botão foi clicado



?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
						Valor 1:<input type="text" name="txtn1" value="" placeholder="<?=$valor1?>" > <br>
						Valor 2:<input type="text" name="txtn2" value="<?=$valor2?>" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar"
                                   <?php 
                                        //Opção 01 para colocar o checked no radio 
                                        if($opcao == 'somar')
                                            echo('checked');
                                   
                                   ?>
                                   >Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" 
                            <?=$opcao=='subtrair'?'checked':'' ?> >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar"
                                   <?=$opcao=='multiplicar'?'checked':'' ?>>Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" 
                                   <?=$opcao=='dividir'?'checked':'' ?> >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
							<?php echo ($resultado); ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

