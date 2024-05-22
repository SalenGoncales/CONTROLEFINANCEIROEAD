<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';

class EmpresaDAO extends Conexao
{
    public function CadastrarEmpresa($nome_empresa, $telefone, $endereco)
    {
        if (trim($nome_empresa) == '' || trim($telefone) == '' || trim($endereco) == '') {
            return 0;
        }
        $conexao = parent::retornarConexao();
        $comando_sql = 'INSERT INTO tb_empresa 
                        (nome_empresa, telefone_empresa, endereco_empresa, id_usuario) 
                        values (?,?,?,?);';
        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_empresa);
        $sql->bindValue(2, $telefone);
        $sql->bindValue(3, $endereco);
        $sql->bindValue(4, UtilDAO::CodigoLogado());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }
    public function ConsultarEmpresa()
    {
        $conexao = parent::retornarConexao();
        $comando_sql = 'SELECT id_empresa,
                        nome_empresa,
                        telefone_empresa,
                        endereco_empresa
                        FROM tb_empresa
                        WHERE id_usuario = ? ORDER BY nome_empresa ASC';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);
        $sql->bindValue(1, UtilDAO::CodigoLogado());
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
        return $sql->fetchAll();
    }
    public function DetalharEmpresa($idEmpresa)
    {
        $conexao = parent::retornarConexao();
        $comando_sql = 'SELECT id_empresa,
                        nome_empresa,
                        telefone_empresa,
                        endereco_empresa
                        FROM tb_empresa
                        WHERE id_empresa = ?
                        AND id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idEmpresa);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
    public function AlterarEmpresa($idEmpresa, $nome_empresa, $telefone_empresa, $endereco_empresa)
    {
        if (trim($nome_empresa) == '' || $idEmpresa == '') {
            return 0;
        }
        $conexao = parent::retornarConexao();
        $comando_sql = 'UPDATE tb_empresa
                    SET nome_empresa = ?,
                    telefone_empresa = ?,
                    endereco_empresa = ?
                    WHERE id_empresa = ?
                    AND id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_empresa);
        $sql->bindValue(2, $telefone_empresa);
        $sql->bindValue(3, $endereco_empresa);
        $sql->bindValue(4, $idEmpresa);
        $sql->bindValue(5, UtilDAO::CodigoLogado());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }
    public function ExcluirEmpresa($idEmpresa)
    {
        if ($idEmpresa == '') {
            return 0;
        }
        $conexao = parent::retornarConexao();
        $comando_sql = 'DELETE
                        FROM tb_empresa
                        WHERE id_empresa = ?
                        AND id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idEmpresa);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return -4;
        }
    }
}
