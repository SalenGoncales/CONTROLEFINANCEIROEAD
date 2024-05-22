<?php

require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();
require_once '../DAO/EmpresaDAO.php';

if(isset($_POST['btnGravar'])){
    $nome_empresa= $_POST['nome_empresa'];
    $telefone= $_POST['telefone'];
    $endereco= $_POST['endereco'];
    
    $objdao = new EmpresaDAO();

    $ret = $objdao->CadastrarEmpresa($nome_empresa, $telefone, $endereco);
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
                        <h2>Nova Empresa</h2>
                        <h5>Aqui você poderá cadastrar todas as suas empresas</h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form method="post" action="nova_empresa.php">
                <div class="form-group">
                    <label>Nome da empresa*</label>
                    <input class="form-control" placeholder="Digite o nome da empresa..." id="nome_empresa" name="nome_empresa" />
        
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input class="form-control" placeholder="Digite o telefone da empresa (opcional)" id="telefone" name="telefone" />
                    
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input class="form-control" placeholder="Digite o endereço da empresa (opcional)" id="endereco" name="endereco"/>

                </div>
                <button type="submit" onclick="return ValidarEmpresa()" class="btn btn-success" name="btnGravar">Gravar</button>
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>