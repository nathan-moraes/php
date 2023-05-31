<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registo de alunos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <?php include ('config.php');  ?>

</head>
<body>
    <form action="registroaluno.php" method="post" name="aluno">
        <table>
            <tr>
                <td>Cadastro de Alunos</td>
            </tr>
            <tr>
                <td>Matrícula:</td>
                <td><input type="number" name="matricula" ></td>
            </tr>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar" name="botaoAluno"></td>
            </tr>	
        </table>
    </form>

    
    <form action="registroaluno.php" method="post" name="cursa">
        <table>
            <tr>
                <td>Aluno</td>
            </tr>
            <tr>
                <td>Matricula Aluno</td>
                <td><input type="number" name="cursa_aluno" ></td>
            </tr>
            <tr>
                <td>Código Disciplina</td>
                <td><input type="number" name="cursa_disciplina" ></td>
            </tr>
            <tr>
                <td>Data Matrícula</td>
                <td><input type="date" name="cursa_data" ></td>
            </tr>
            <tr>
                <td>Nota 1</td>
                <td><input type="number" name="cursa_nota_um" ></td>
            </tr>
            <tr>
                <td>Nota 2</td>
                <td><input type="number" name="cursa_nota_dois" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="Gravar" name="botaoCursa"></td>
            </tr>	
        </table>
    </form>

    <?php
        if (@$_POST['botaoAluno'] == "Enviar") 
        {

            $matricula = $_POST['matricula'];
            $nomeA = $_POST['nome'];
            
            $insere = "INSERT into aluno (matricula, nomeA) VALUES ('$matricula', '$nomeA')";
            mysqli_query($mysqli, $insere) or die ("Não foi possivel inserir os dados");
        }

        if (@$_POST['botaoCursa'] == "Gravar") 
        {
        
            $fk_Aluno_matricula = $_POST['cursa_aluno'];
            $fk_Disciplina_codigo = $_POST['cursa_disciplina'];
            $data_matricula = $_POST['cursa_data'];
            $nota_1 = $_POST['cursa_nota_um'];
            $nota_2 = $_POST['cursa_nota_dois'];
            
            $insere = "INSERT into cursa (matricula_aluno, codigo_disciplina, data_matricula, nota1, nota2) VALUES ('$fk_Aluno_matricula', '$fk_Disciplina_codigo', '$data_matricula', '$nota_1', '$nota_2')";
            mysqli_query($mysqli, $insere) or die ("Não foi possivel inserir os dados");
        }
    
    ?>
</body>
</html>