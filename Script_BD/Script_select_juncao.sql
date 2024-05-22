-- COMANDO PARA JUNTAR TABELAS 

    SELECT  tipo_movimento,
		    data_movimento, 
            valor_movimento, 
            nome_categoria, 
            nome_empresa, 
            banco_conta,
            numero_conta,
            obs_movimento
      FROM  tb_movimento
INNER JOIN  tb_categoria
	    ON  tb_movimento.id_categoria = tb_categoria.id_categoria
INNER JOIN  tb_empresa
	    ON  tb_movimento.id_empresa = tb_empresa.id_empresa
INNER JOIN  tb_conta
	    ON  tb_movimento.id_conta = tb_conta.id_conta