<?php
    require('conn.php');

    $login_usu = $_POST['login_usu'];
    $senha_usu = $_POST['senha_usu'];

    if(empty($login_usu) || empty($senha_usu)){
        echo "Os valores náo podem ser vazios";
    }else{
        $criar_conta = $pdo->prepare("INSERT INTO usuarios(login_usu, senha_usu)VALUES(:login_usu, :senha_usu)");
        $criar_conta->execute(array(
            ':login_usu'=> $login_usu,
            ':senha_usu'=> $senha_usu
        ));

        echo "<script>
        alert ('Conta criada com sucesso!');
        </script>";
    }
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CRIAR CONTA</title>
</head>
<body>
    <form action="criar_conta.php" method="post" id="formulario">
        <div class="form-group offset-md-3">
            <div class="col-md-6">
                <label for="">LOGIN: </label>
                <input type="text" name="login_usu" id="login_usu" class="form-control" value=<?php echo $login_usu[0]['login_usu']?>>
            </div>
        </div>
        <div class="form-group offset-md-3">
            <div class="col-md-6">
                <label for="">SENHA: </label>
                <!-- <input type="text" name="senha_usu" id="" class="form-control" value=<?php echo $rowTable[0]['senha_usu']?>> -->
            </div>
        </div>
    </form>    
</body>
</html>