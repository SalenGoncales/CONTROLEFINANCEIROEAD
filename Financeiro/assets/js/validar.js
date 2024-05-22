function ValidarCategoria(){
    if($("#nome").val().trim()==''){
        alert('Preencher o campo NOME DA CATEGORIA');
        $("#nome").focus ();
        return false;
    }
}



function ValidarMeusDados(){
    if($("#nome").val().trim()==''){
        alert('Preencher o campo NOME');
        $("#nome").focus ();
        return false;
    }
    if($("#email").val().trim()==''){
        alert('Preencher o campo E-MAIL');
        $("#email").focus ();
        return false;
    }
}

function ValidarMinhaConta(){
    if($("#banco").val().trim()==''){
        alert('Preencher o campo BANCO');
        $("#banco").focus ();
        return false;
    }
    if($("#agencia").val().trim()==''){
        alert('Preencher o campo AGÊNCIA');
        $("#agencia").focus ();
        return false;
    }
    if($("#conta").val().trim()==''){
        alert('Preencher o campo CONTA');
        $("#conta").focus ();
        return false;
    }
    if($("#saldo").val().trim()==''){
        alert('Preencher o campo SALDO');
        $("#saldo").focus ();
        return false;
    }
}



function ValidarEmpresa(){
    if($("#nome_empresa").val().trim()==''){
        alert('Preencher o campo NOME DA EMPRESA');
        $("#nome_empresa").focus ();
        return false;
    }
    if($("#telefone").val().trim()==''){
        alert('Preencher o campo TELEFONE');
        $("#telefone").focus ();
        return false;
    }
    if($("#endereco").val().trim()==''){
        alert('Preencher o campo ENDEREÇO');
        $("#endereco").focus ();
        return false;
    }
}



function ValidarMovimento(){
    if($("#tipo_movimento").val()== ''){
        alert('Preencher o TIPO DE MOVIMENTO');
        $("#tipo_movimento").focus ();
        return false;
    }
    if($("#data").val().trim()==''){
        alert('Preencher a DATA');
        $("#data").focus ();
        return false;
    }
    if($("#valor").val().trim()==''){
        alert('Preencher o VALOR');
        $("#valor").focus ();
        return false;
    }
    if($("#categoria").val().trim()==''){
        alert('Preencher a CATEGORIA');
        $("#categoria").focus ();
        return false;
    }
    if($("#empresa").val().trim()==''){
        alert('Preencher o campo EMPRESA');
        $("#empresa").focus ();
        return false;
    }
    if($("#conta").val().trim()==''){
        alert('Preencher o campo CONTA');
        $("#conta").focus ();
        return false;
    }
}

function ValidarConsultaPeriodo(){
    if($("#data_inicial").val().trim()==''){
        alert('Preencher o campo DATA INICIAL');
        $("#data_inicial").focus();
        return false;
    }
    if($("#data_final").val().trim()==''){
        alert('Preencher o campo DATA FINAL');
        $("#data_final").focus();
        return false;
}

}