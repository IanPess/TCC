<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
    include('../includes/conexao.php');

    //Dados Pessoa
    $Nome_Usuário = $_POST['nome_usuario'];
    $Email_Usuário = $_POST['email'];
    $Telefone_Usuário = $_POST['telefone'];

    $sql = "insert into Usuário (Nome_Usuário, Email_Usuário, Telefone_Usuário)";
    $sql .= "values('".$Nome_Usuário."', '".$Email_Usuário."', '".$Telefone_Usuário."')";
        echo $sql;

        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados da Cidade Cadastrados com Sucesso</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>" . mysqli_error($con);
        }

?>
</body>
</html>
