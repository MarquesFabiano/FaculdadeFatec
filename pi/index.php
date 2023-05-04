<!DOCTYPE html>
<html lang="pt-br">

<head>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Cadastro</title>
  </head>
</head>

<body>
  <section class="login">
    <h1>Login</h1>
    <form action="login.php" method="post">
      <label for="email">E-mail:</label>
      <input type="email" name="email" required><br>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" required><br>
      <div id="mensagem"></div>
      <input type="submit" value="Entrar">
    </form>
  </section>
  <section class="cadastro">
    <h1>Cadastro</h1>
    <form action="cadastrar.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" required><br>
      <label for="data_nascimento">Data de nascimento:</label>
      <input type="date" name="data_nascimento" required><br>
      <label for="cpf">CPF:</label>
      <input type="text" name="cpf" required><br>
      <label for="email">E-mail:</label>
      <input type="email" name="email" required><br>
      <label for="senha">Senha:</label>
      <input type="password" name="senha" required><br>
      <input type="submit" value="Cadastrar">
    </form>
  </section>
</body>
</html>