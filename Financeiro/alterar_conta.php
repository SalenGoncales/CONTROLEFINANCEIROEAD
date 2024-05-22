<?php

require_once '../DAO/ContaDAO.php';

$dao = new ContaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {
    $idConta = $_GET['cod'];
    $dados = $dao->DetalharConta($idConta);
} else if (isset($_POST['btnSalvar'])) {
    $idConta = $_POST['cod'];
    $nome_banco = $_POST['banco'];
    $agencia_conta = $_POST['agencia'];
    $numero_conta = $_POST['conta'];
    $saldo_conta = $_POST['saldo'];

    $ret = $dao->AlterarConta($idConta, $nome_banco, $agencia_conta, $numero_conta, $saldo_conta);
    
    header('location: consultar_conta.php?ret=' . $ret);
    exit;

} else if (isset($_POST['btnExcluir'])) {
    $idConta = $_POST['cod'];

    $ret = $dao->ExcluirConta($idConta);

    header('location: consultar_conta.php?ret=' . $ret);
    exit;

} else {
    header('location: consultar_conta.php');
    exit;
}

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
                        <?php include_once '_msg.php'; ?>
                        <h2>Alterar Conta</h2>
                        <h5>Aqui você poderá alterar suas contas</h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form method="post" action="alterar_conta.php">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_conta'] ?>">
                    <div class="form-group">
                        <label>Nome do banco*</label>
                        <input class="form-control" placeholder="Digite o nome do banco..." id="banco" name="banco" value="<?= $dados[0]['banco_conta'] ?>" />

                    </div>
                    <div class="form-group">
                        <label>Agência*</label>
                        <input class="form-control" placeholder="Digite a agência" id="agencia" name="agencia" value="<?= $dados[0]['agencia_conta'] ?>" />

                    </div>
                    <div class="form-group">
                        <label>Número da conta*</label>
                        <input class="form-control" placeholder="Digite o número da conta" id="conta" name="conta" value="<?= $dados[0]['numero_conta'] ?>" />

                    </div>
                    <div class="form-group">
                        <label>Saldo*</label>
                        <input class="form-control" placeholder="Digite o saldo da conta" id="saldo" name="saldo" value="<?= $dados[0]['saldo_conta'] ?>" />

                    </div>
                    <button type="submit" class="btn btn-success" onclick="return ValidarMinhaConta()" name="btnSalvar">Salvar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExcluir">Excluir</button>
                    <div class="modal fade" id="modalExcluir" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Confirmação de Exclusão</h4>
                                    </div>
                                    <div class="modal-body">
                                        <b> Deseja excluir a conta: </b><?= $dados[0]['banco_conta'] . '<br>' . '<b>Agência: </b>'. $dados[0]['agencia_conta'] . '<br>' . '<b>Número da Conta: </b>'. $dados[0]['numero_conta'] . '<br>' . '<b>Saldo Conta: </b>' . $dados[0]['saldo_conta'] ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" name="btnExcluir">Sim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>