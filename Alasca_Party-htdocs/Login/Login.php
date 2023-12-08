<?php 
    include_once("../config/db_conn.php");


    if (isset($_POST['email'], $_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        
        $result = mysqli_query($conn, $sql);

        

    if ($result->num_rows == 0) {
        echo "Failed: Falha ao acessar sua conta " . mysqli_error($conn);
        } else {   
            header("Location: ../Página_Principal/index.html?msg=Sucesso!");
        }

    
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Login.css">
    <title>Tela de Login</title>
</head>
<body>
    <div class="container col-11 col-md-9" id="form-container">
        <div class="row align-items-center gx-5">
            <div class="col-md-6 order-md-2">
                <h2><i class="bi bi-balloon"></i>Faça seu login</h2>
                <form action="Login.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                        <label for="email" class="form-label">Digite seu email </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha">
                        <label for="password" class="form-label">Digite sua senha</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Entrar">
                </form>
            </div>
            <div class="col-md-6 order-md-1">
                <div class="col-12">
                    <img src="../IMG/Bolo.png" alt="Computador login" class="img-fluid">
                </div>
                <div class="col-12" id="link-container">
                    <a href="../Cadastro/Cadastro.php"><i class="bi bi-exclamation-circle-fill"></i>Ainda não tenho cadastro</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>