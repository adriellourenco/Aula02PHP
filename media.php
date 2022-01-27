<?php

    // Sintaxe de Declaração de Variáveis 
    // nome da variável = (tipo de dado) valorInicial!
    $grade1 = (double) null;
    $grade2 = (double) null;
    $grade3 = (double) null;
    $grade4 = (double) null;
    $media = (double) null;

    // Validação para verificar se o botão foi clicado!
    if(isset($_POST['btnCalcular'])){

        //Recebendo dados utilizando o POST do formulário!
        $grade1 = $_POST['txtGrade1'];
        $grade2 = $_POST['txtGrade2'];
        $grade3 = $_POST['txtGrade3'];
        $grade4 = $_POST['txtGrade4'];

        /*
        E - (and, &&)
        OU - (or, ||)
        NÃO - (!)
        */

        /*
        Funções para validação de tipos de dados:
        is_type(var) - Verifica se a variável é do tipo type!

        is_numeric() - Verifica se é um número
        is_integer() - Verifica se é um número inteiro
        is_float() - Verifica se é um número real
        is_bool() - Verifica se é um valor boolean
        is_string() - Verifica se é uma string
        */

        //Validação para tratamento de caixas vazias 
        if($grade1 == "" || $grade2 == "" || $grade3== "" || $grade4 == ""){
        //Quando você insere uma tag html dentro de aspas no PHP, se a tag tiver atributos com valores, estes devem ser esciritos com aspas diferentes das usadas no código PHP
        //OBSERVE AS ASPAS ABAIXO!
            echo('<p class="msgErro">É obrigatório prencher todos os valores com números para realizar o cálculo da média!</p>');
        }else if (!is_numeric($grade1) || !is_numeric($grade2) || !is_numeric($grade3) || !is_numeric($grade4)) {
            echo('<p class="msgErro">Digite apenas números!</p>');
        }else{
            $media = ($grade1+$grade2+$grade3+$grade4) / 4;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Média</title>
       <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
    </head>
	<body>
        
        <div id="conteudo">
            <header id="titulo">
                Calculo de Médias
            </header>

            <div id="form">
            <!-- action="" - diz para onde os dados serão direcionados! -->
                <form name="frmMedia" method="post" action="media.php">
                    <div>
                        <label>Nota 1:</label>
                        <input type="text" name="txtGrade1" value="<?php echo($grade1) ?>"  > 
                    </div>
                    
                    <div>
                        <label>Nota 2:</label>
                        <input type="text" name="txtGrade2" value="<?php echo($grade2) ?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 3:</label>
                        <input type="text" name="txtGrade3" value="<?php echo($grade3) ?>" > 
                    </div>
                    
                    <div>
                        <label>Nota 4:</label>
                        <input type="text" name="txtGrade4" value="<?php echo($grade4) ?>" >
                    </div>
                    <div>
                        <input type="submit" name="btnCalcular" value ="Calcular" >
                        <div id="botaoReset">
                            <a href="media.php">
                                Novo Cálculo
                            </a>    
                        </div>
                    </div>
                </form>

            </div>
            <footer id="resultado">
                A média é: <?php echo($media) ?>
            </footer>
        </div>
        
		
	</body>

</html>