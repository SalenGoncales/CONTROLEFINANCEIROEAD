<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/UsuarioDAO.php';

$objdao = new UsuarioDAO();

if (isset($_POST['btnGravar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $ret = $objdao->GravarMeusDados($nome, $email);
}

$dados = $objdao->CarregarMeusDados();
//echo "<pre>" (serve para exibir os conteúdos da variável array)
//print_r($dados);
//echo "</pre>";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once "_head.php";
?>

<body>
    <div id="wrapper">
        <?php
        include_once "_topo.php";
        include_once "_menu.php";
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                      include_once '_msg.php';
                        ?>
                        <h2>Meus dados</h2>
                        <h5>Nesta página, você poderá alterar seus dados </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form method="post" action="meus_dados.php">
                    <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" placeholder="Digite seu nome..." id= "nome" name="nome" value= "<?= $dados[0]['nome_usuario']?>" />
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" placeholder="Digite seu e-mail..." id= "email" name="email" value= "<?= $dados[0]['email_usuario']?>" />
                    </div>
                    <button type="submit" onclick="return ValidarMeusDados()"  class="btn btn-success" name="btnGravar">Gravar</button>
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
</body>

</html>