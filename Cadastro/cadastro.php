<?php 
    include_once("../config/db_conn.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"
    defer></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="Cadastro.css">
  <title>Tela de cadastro</title>
</head>

<body>
  <section>
    <div class="container col-11 col-md-9" id="form-container">
      <div class="row gx-5">
        <div class="col-md-6">
          <h2><i class="bi bi-balloon"></i> Cadastre-se</h2>
          <form action="" method="post">


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="nome" placeholder="Digite seu nome" required>
              <label for="nome" class="form-label">Digite seu nome</label>
            </div>


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="lastname" name="sobrenome" placeholder="Digite seu sobrenome" required>
              <label for="sobrenome" class="form-label">Digite seu sobrenome</label>
            </div>


            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" required>
              <label for="email" class="form-label">Digite seu email</label>
            </div>


            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha" required>
              <label for="senha" class="form-label">Digite sua senha</label>
            </div>


            <div class="mb-3">
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="agree-term">
                <label class="form-check-label" for="agree-term">
                  Concordo com os <a href="#">termos de serviço</a>
                </label>
              </div>


              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="newsletter">
                <label class="form-check-label" for="newsletter">
                  Aceito receber mais notícias informações
                </label>
              </div>


              <div class="mb-3">
                <div class="col-12">
                  <a href="../Login/Login.php"><i class="bi bi-check-circle-fill"></i> Eu já tenho uma
                    conta</a>
                </div>
              </div>

            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
  
      if (isset($_POST["nome"], $_POST['sobrenome'], $_POST['email'], $_POST['senha'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO `cadastro`(`id`, `nome`, `sobrenome`, `email`, `senha`)
                VALUES (NULL, '$nome', '$sobrenome', '$email', '$senha')";

        $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: cadastro.php?msg=Novo registro criado com sucesso!");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
    }
  
  ?>

</body>

</html>