<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/MovimentoDAO.php';

$datainicial = '';
$datafinal = '';
$tipo_movimento = '';

if (isset($_POST['btnPesquisar'])) {
    $tipo_movimento = $_POST['tipo_movimento'];
    $datainicial = $_POST['data_inicial'];
    $datafinal = $_POST['data_final'];

    $dao = new MovimentoDAO();
    $movs = $dao->FiltrarMovimento($tipo_movimento, $datainicial, $datafinal);
}else if(isset($_POST['btnExcluir'])){
    $idMovimento = $_POST['idMovimento'];
    $idConta = $_POST['idConta'];
    $tipo_movimento = $_POST['tipo_movimento'];
    $valor_movimento = $_POST['valor_movimento'];
    $dao = new MovimentoDAO();
    $ret = $dao->ExcluirMovimento($idMovimento, $idConta, $valor_movimento, $tipo_movimento);
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
                        <?php include_once '_msg.php' ?>
                        
                        <h2>Consultar Movimento</h2>
                        <h5>Consulte todos os movimentos em um determinado período</h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form method="post" action="consultar_movimento.php">
                    <div class="col-md-12">
                        <?php
                        include_once '_msg.php';
                        ?>
                        <div class="form-group">
                            <label>Tipo de movimento</label>
                            <select class="form-control" name="tipo_movimento">
                                <option value="0" <?= $tipo_movimento == '0' ? 'selected' : '' ?>>TODOS</option>
                                <option value="1" <?= $tipo_movimento == '1' ? 'selected' : '' ?>>Entrada</option>
                                <option value="2" <?= $tipo_movimento == '2' ? 'selected' : '' ?>>Saída</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data inicial*</label>
                            <input type="date" class="form-control" placeholder="Digite a data do movimento" id="data_inicial" name="data_inicial" value="<?= $datainicial ?>" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data final*</label>
                            <input type="date" class="form-control" placeholder="Digite a data do movimento" id="data_final" name="data_final" value="<?= $datafinal ?>" />
                        </div>
                    </div>
                    <center>
                        <button class="btn btn-info" onclick="return ValidarConsultaPeriodo()" name="btnPesquisar">Pesquisar</button>
                    </center>
                </form>
                <hr>
                <?php if (isset($movs)) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Resultado encontrado
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Data</th>
                                                    <th>Tipo</th>
                                                    <th>Categoria</th>
                                                    <th>Empresa</th>
                                                    <th>Conta</th>
                                                    <th>Valor</th>
                                                    <th>Observação</th>
                                                    <th>Ação</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $total = 0;
                                                for ($i = 0; $i < count($movs); $i++) {
                                                    if ($movs[$i]['tipo_movimento'] == 1) {
                                                        $total = $total + $movs[$i]['valor_movimento'];
                                                    } else {
                                                        $total = $total - $movs[$i]['valor_movimento'];
                                                    }
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $movs[$i]['data_movimento'] ?></td>
                                                        <td><?= $movs[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?></td>
                                                        <td><?= $movs[$i]['nome_categoria'] ?></td>
                                                        <td><?= $movs[$i]['nome_empresa'] ?></td>
                                                        <td><?= $movs[$i]['banco_conta'] ?> / Ag. <?= $movs[$i]['agencia_conta'] ?> - Núm. <?= $movs[$i]['numero_conta'] ?></td>
                                                        <td>R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?></td>
                                                        <td><?= $movs[$i]['obs_movimento'] ?></td>
                                                        <td>
                                                            <a href="a" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modalExcluir<?= $i ?>">Excluir</a>
                                                            <form method="post" action="consultar_movimento.php">

                                                            <input type="hidden" name="idMovimento" value="<?= $movs[$i]['id_movimento'] ?>">
                                                            <input type="hidden" name="idConta" value="<?= $movs[$i]['id_conta'] ?>">
                                                            <input type="hidden" name="tipo_movimento" value="<?= $movs[$i]['tipo_movimento'] ?>">
                                                            <input type="hidden" name="valor_movimento" value="<?= $movs[$i]['valor_movimento'] ?>">

                                                                <div class="modal fade" id="modalExcluir<?= $i ?>" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                <h4 class="modal-title" id="myModalLabel">Confirmação de Exclusão</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <center><b>Deseja excluir o movimento: </b><br><br></center>
                                                                                <b>Data do movimento:</b> <?= $movs[$i]['data_movimento'] ?><br>
                                                                                <b>Tipo do movimento: </b> <?= $movs[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?><br>
                                                                                <b>Categoria:</b> <?= $movs[$i]['nome_categoria'] ?><br>
                                                                                <b>Empresa:</b> <?= $movs[$i]['nome_empresa'] ?><br>
                                                                                <b>Conta:</b> <?= $movs[$i]['banco_conta'] ?> / Ag. <?= $movs[$i]['agencia_conta'] ?> - Núm. <?= $movs[$i]['numero_conta'] ?><br>
                                                                                <b>Valor:</b> R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?><br>

                                                                            
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                                <button type="submit" class="btn btn-primary" name="btnExcluir">Sim</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </td>


                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                        <center>
                                            <label style="color: <?= $total < 0 ? 'red' : 'green' ?>">TOTAL: R$ <?= number_format($total, 2, ',', '.'); ?></label>
                                        </center>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



</body>

</html>