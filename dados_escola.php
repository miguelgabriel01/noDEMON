<?php
  session_start();



    $id = $_GET['xpto'];
    include "config/conexao.php";
    include "model/Escolas.php";
    include "model/Comments.php";

    $comment = new Comments();
    $id = $_GET["xpto"];
    print_r($_SESSION["logado"]["nome"]);
  //  $comentario = new Comments();
     $escola = new Escolas();


      // $comentario = $conn->prepare("SELECT * FROM comments WHERE id_escolas = :id;");
      // $comentario->bindValue(':id', $id);
      // $comentario->execute();

      // $c = $comentario->fetchAll();
      // var_dump($id);
      // var_dump($c);
      // exit();

      ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>DadosEscola</title>
  <link rel="stylesheet" type="text/css" href="css/dados_escola.css">
</head>

<body>
  <header>
    <a href="">SNRC</a>
    <nav>

      <li><a href="index.php">Inicio</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="cadastro_usuario.php">Cadastro</a></li>
      <li><a href="sobre.php">Sobre</a></li>
      </li>
      <li><a href="sair.php">Sair</a></li>
      </li>
    </nav>
  </header>
  <section class="hero">
    <table class='table'>
      <?php foreach($escola->get($id) as $data) : ?>
      <th>Informações Escolares</th>
      <tr name="id" value="<?= $data["id"] ?>">
        <td>Escola: <?= $data["nome"] ?> </td>
      <tr>
        <td>Endereço: <?= $data["endereco"] ?> </td>
      </tr>
      <tr>
        <td>Cidade: <?= $data["cidade"] ?> </td>
      <tr>
        <td>Cep: <?= $data["cep"] ?> </td>
      <tr>
        <td>Telefone: <?= $data["telefone"] ?> </td>
      <tr>
        <td>Mapa: <iframe src="<?= $data["mapa"] ?>" width="" height="" frameborder="0" style="border:0;"
            allowfullscreen=""> </iframe></td>

        <?php endforeach ?>

    </table>
  </section>
  <section class="duvidas">
    <div class="principal">
      <h2>Dúvidas</h2>
      <form method="POST" action="../controller/cadastrar_comentario.php">
        <div class="meio">
          <input type="hidden" name="id" required="" value="<?= $_SESSION["logado"]["id"] ?>">
          <input type="hidden" name="nome" required="" value="<?= $_SESSION["logado"]["nome"] ?>">
          <input type="hidden" name="id_escola" required="" value="<?= $id ?>">
        </div>
        <div class="meio">


          <?php
        if(!isset($_SESSION['logado'])) :?>


          <h1>Você precisa está logado para comentar.</h1>


          <?php endif ?>





        </div>
        <textarea placeholder="duvidas.." name="comment" required=""></textarea>
        <input type="submit" id="enviarEmail" name="" value="enviar">
      </form>
    </div>
  </section>
  <section class="galeria">
    <?php foreach($comment->Link($id) as $dados) : ?>
      <ul>
        <li>
          <h1><?= $dados["nome"] ?></h1>
          <p>
            <?= $dados["comment"] ?>
          </p>
        </li>

      </ul>
    <?php endforeach ?>
  </section>
</body>

</html>
