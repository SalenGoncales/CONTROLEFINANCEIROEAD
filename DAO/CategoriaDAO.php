<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';

class CategoriaDAO extends Conexao
{
    public function CadastrarCategoria($nome)
    {
        if (trim($nome) == '') {
            return 0;
        }
        //1 passo: criar uma variável que receberá o obj de conexao
        $conexao = parent::retornarConexao();

        //2 passo: criar uma variável que receberá o texto do comando SQL que deverá ser executado no BD
        $comando_sql =   'insert into tb_categoria 
                        (nome_categoria, id_usuario)
                        values (?,?);';

        //3 passo: criar um obj que será configurado e levado no BD para ser executado
        $sql = new PDOStatement();

        //4 passo: colocar dentro do obj $sql a conexao preparada para executar o comando_sql
        $sql = $conexao->prepare($comando_sql);

        //5 passo: verificar se o comando_sql eu tenho ? para ser configurado. se tiver, configuar os bindValues
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        try {
            //6 passo: executar no BD
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }
    public function AlterarCategoria($nome, $idCategoria)
    {
        if (trim($nome) == '' || $idCategoria == '') {
            return 0;
        }

        $conexao = parent::retornarConexao();
        $comando_sql = 'update tb_categoria
                        set nome_categoria = ?
                        where id_categoria = ?
                        and id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $idCategoria);
        $sql->bindValue(3, UtilDAO::CodigoLogado());

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }
    public function ExcluirCategoria($idCategoria)
    {
        if (trim($idCategoria) == ''){
            return 0;
        }
            $conexao = parent::retornarConexao();

            $comando_sql = 'DELETE FROM
                        tb_categoria
                        WHERE id_categoria = ?
                        AND id_usuario = ?';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $idCategoria);
            $sql->bindValue(2, UtilDAO::CodigoLogado());

            try {
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                return -4;
            }
        }

    public function ConsultarCategoria()
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_categoria,
                        nome_categoria
                        FROM tb_categoria
                        WHERE id_usuario=? ORDER BY nome_categoria ASC';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
    public function DetalharCategoria($idCategoria)
    {
        $conexao = parent::retornarConexao();
        $comando_sql = 'select id_categoria,
                              nome_categoria
                           from tb_categoria
                           where id_categoria = ?
                           and id_usuario = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);
        $sql->bindValue(1, $idCategoria);
        $sql->bindValue(2, UtilDAO::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
}
