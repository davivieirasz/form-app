<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Formulário de Cadastro</title>
</head>

<body>
  <div class="main-wrapper">

    <img class="side-img" src="assets/img/homer simpson.jpg" alt="Logo" />
    <div class="container">
      <form method="POST" action="cadastro.php">
        <?php include 'includes/mensagem.php'; ?>
        <h1>Formulário de Cadastro</h1>
        <label for="nome">Nome:</label> <br />
        <input
          type="text"
          id="nome"
          name="nome"
          placeholder="Digite seu nome" />
        <br />
        <label for="sobrenome">Sobrenome:</label> <br />
        <input
          type="text"
          id="sobrenome"
          name="sobrenome"
          placeholder="Digite seu sobrenome" />
        <br />
        <label for="email">E-mail:</label> <br />
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Digite seu e-mail" />
        <br />
        <label for="mensagem">Mensagem:</label> <br />
        <textarea
          id="mensagem"
          name="mensagem"
          placeholder="Digite sua mensagem"
          rows="4"
        ></textarea>
        <br />
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>
  <footer>
    <p>&copy; 2025 - Davi Vieira</p>
  </footer>
</body>

</html>