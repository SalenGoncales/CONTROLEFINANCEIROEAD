<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/ContaDAO.php';

if (isset($_POST['btnGravar'])) {
    $banco= $_POST['banco'];
    $agencia= $_POST['agencia'];
    $conta= $_POST['conta'];
    $saldo= $_POST['saldo'];

    $objdao = new ContaDAO();

    $ret = $objdao->CadastrarConta($banco, $agencia, $conta, $saldo);

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
                        <?php
                        include_once '_msg.php';
                        ?>

                        <h2>Nova Conta</h2>
                        <h5>Aqui você poderá cadastrar todas as suas contas</h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form method="post" action="nova_conta.php">
                <div class="form-group">
                    <label>Nome do banco*</label>
                    <input class="form-control" placeholder="Digite o nome do banco..." id= "banco" name="banco" />
        
                </div>
                <div class="form-group">
                    <label>Agência*</label>
                    <input class="form-control" placeholder="Digite a agência" id="agencia" name="agencia"/>
                    
                </div>
                <div class="form-group">
                    <label>Número da conta*</label>
                    <input class="form-control" placeholder="Digite o número da conta" id= "conta" name="conta" />
                    
                </div>
                <div class="form-group">
                    <label>Saldo*</label>
                    <input class="form-control" placeholder="Digite o saldo da conta" id= "saldo" name="saldo"/>
                    <br>
                    <button type="submit" onclick="return ValidarMinhaConta()"   class="btn btn-success" name="btnGravar" >Gravar</button>
                </div>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>