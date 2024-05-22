select nome_usuario, data_cadastro
from tb_usuario
where nome_usuario like 'a%';

select nome_usuario, data_cadastro
from tb_usuario
where data_cadastro between '2021-01-15' and '2022-01-20';

select banco_conta, agencia_conta, saldo_conta
from tb_conta
where id_usuario = 1;

select sum(valor_movimento) as total
from tb_movimento
where tipo_movimento= 1
and id_usuario =3;

