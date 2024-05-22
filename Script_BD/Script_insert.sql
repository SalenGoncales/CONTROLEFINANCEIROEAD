-- COMANDO PARA INSERIR (insert)
-- insert into nome_da_tabela (colunas) values (valores) 

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Ana Maria','ana@gmail.com','senha123','2021-02-21');

insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Carlos Junior', 'carlos@gmail.com', '44510', '2021-02-25');

insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Alexandre Alves', 'ale.alves@gmail.com', '456789', '2021-02-27');


insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Alimentação', 1);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Viagens', 2);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('Empresa Colchões', '433323-3435', 'Rua dos Pioneiros, 23, Vale Verde', 1);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Padaria Pão Bão', '4333255665', 'Rua dos Tucanos, 33, Centro', 2);


insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '0800', '345678', 4500.20, 1);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '3000', '134222', 1000.50, 2);


insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2021-10-01', 45, null, 1, 1, 1, 1);
insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2021-10-10', 100, 'Pagamento adiantando', 2, 2, 2, 2);






insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Camila dos Santos', 'camilas@gmail.com', '123456', '2022-02-13');

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Almoço', 4);

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Combustível', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('Viva Saudável', '4330213344', 'Rua das Flores', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Fitfit', '4333226754', 'Rua do Amendoim', 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '2121', '345623', 1400.20, 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '1212', '134232', 1300.50, 4);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2121-03-13', 60, null, 4, 4, 4, 4);
insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2121-04-20', 100, 'Pagamento adiantando', 4, 4, 4, 4);



insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Andressa Moraes', 'andressamoraes@gmail.com', '232344', '2022-04-23');

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Bazar', 5);

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Avon', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('Cosméticos da Dressa', '4333446789', 'Rua das Pitangueiras', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Revendedora Avon', '4333456543', 'Rua da Paz', 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1244', '342671', 6000.20, 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '1454', '127899', 3500.50, 5);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2121-03-15', 30000.00, vendas, 5, 5, 5, 5);
insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2121-04-25', 10000.00, 'Pagamento funcionários', 5, 5, 5, 5);



insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Priscila Pereira', 'priscilap@gmail.com', '208765', '2022-01-08');

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Mercado', 6);

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Farmácia', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('PetShop da Pri', '4333446546', 'Rua das Amoras', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Distribuidora de Ração da Pri', '4333453456', 'Rua das Industrias', 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1211', '342221', 10000.50, 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '1154', '111899', 30000.50, 6);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2121-02-12', 50000.00, 'vendas', 6, 6, 6, 6);
insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2121-03-22', 12000.00, 'Pagamento funcionários', 6, 6, 6, 6);



insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Paulo Henrique', 'paulinhohenrique@gmail.com', '346789', '2022-03-21');

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Investimentos', 7);

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Mercado', 7);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('Adv Paulo Henrique', '4333445566', 'Av JK 2300', 7);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Investimentos PH', '4334546755', 'Rua das Pedras', 7);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1020', '335566', 2000.20, 7);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '1267', '121034', 3000.50, 7);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2121-03-11', 3000.00, 'Recebimento clientes', 7, 7, 7, 7);
insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2121-04-22', 1000.00, 'Pagamento contas', 7, 7, 7, 7);



insert into tb_usuario 
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Victor Galego ', 'vitinhogalego@gmail.com', '112233', '2022-04-25');

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Academia', 8);

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Comida', 8);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('Produtos Naturais do Viti', '4333224567', 'Rua dos Pessegueiros', 8);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Linha Viti Naturals', '4333218970', 'Rua dos Papaguaios', 8);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1234', '120345', 1000.20, 8);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '1451', '127343', 2000.50, 8);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2121-02-10', 20000.00, 'vendas', 8, 8, 8, 8);
insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2121-02-20', 500.00, 'Pagamento contas', 8, 8, 8, 8);






