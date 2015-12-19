/**
 * Created by Valmar Júnior on 07/12/2015.
 */

//################################### Mascaras #################################################
//################################### Mascaras #################################################
//################################### Mascaras #################################################

$(document).ready(function () {

    $(".cep").inputmask("99999-999");  //static mask

});


//################################## CEP Auto ################################################
//################################## CEP Auto ################################################
//################################## CEP Auto ################################################

//Quando o campo cep perde o foco função é executada
$(".cep").on("blur", (function () {
    var cep = $(this).val();

    if (cep != "") {


        var validacep = /^[0-9]{5}-?[0-9]{3}$/;

        if (validacep.test(cep)) {

            $("#c_rua").val("...");
            $("#c_bairro").val("...");
            $("#c_cidade").val("...");
            $("#c_uf").val("...");

            $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#c_rua").val(dados.logradouro);
                    $("#c_bairro").val(dados.bairro);
                    $("#c_cidade").val(dados.localidade);
                    $("#c_uf").val(dados.uf);
                } else {
                    BootstrapDialog.show({
                        type: BootstrapDialog.TYPE_WARNING,
                        title: 'Alerta',
                        message: 'CEP não encontrado!'
                    });
                    limpa_formulario_cep();
                }
            });
        } else {
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_WARNING,
                title: 'Alerta',
                message: 'Formato de CEP inválido.'
            });
            limpa_formulario_cep();
            ''
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulario_cep();
    }
}));

function limpa_formulario_cep() {
    $("#c_rua").val("");
    $("#c_bairro").val("");
    $("#c_cidade").val("");
    $("#c_uf").val("");
    $("#c_cep").val("");

}


//################################## Submit ################################################
//################################## Submit ################################################
//################################## Submit ################################################


$('#inscricaoForm').on('status.field.bv', function (e, data) {
    formIsValid = true;
    $('.form-group', $(this)).each(function () {
        formIsValid = formIsValid && $(this).hasClass('has-success');
    });

    if (formIsValid) {
        $('.submit-button', $(this)).attr('disabled', false);
    } else {
        $('.submit-button', $(this)).attr('disabled', true);
    }
});

$('#inscricaoForm').submit(function (e) {


    e.preventDefault();

    var c_name = $('#c_name').val();
    var c_cep = $('#c_cep').inputmask('remove').val();
    var c_rua = $('#c_rua').val();
    var c_bairro = $('#c_bairro').val();
    var c_complemento = $('#c_complemento').val();
    var c_uf = $('#c_uf').val();
    var c_cidade = $('#c_cidade').val();
    var c_email = $('#c_email').val();
    var response = $('#inscricaoForm .ajax-response');

    var formData = {
        'nome': c_name,
        'cep': c_cep,
        'rua': c_rua,
        'bairro': c_bairro,
        'complemento': c_complemento,
        'uf': c_uf,
        'cidade': c_cidade,
        'email': c_email
    };

    if (( c_name == '' || c_cep == '' || c_rua == '' || c_bairro == ''
        || c_uf == '' || c_cidade == '' || c_email == '')) {
        BootstrapDialog.show({
            type: BootstrapDialog.TYPE_WARNING,
            title: 'Alerta',
            message: 'Existem Campos Vazios.'
        });

    } else if ((!isValidEmailAddress(c_email) )) {
        BootstrapDialog.show({
            type: BootstrapDialog.TYPE_WARNING,
            title: 'Alerta',
            message: 'Email inválido.'
        });

        $("#c_email").val("");

    } else {
        $.ajax({
            type: 'POST',
            url: 'php/salvar.php',
            data: formData,
            dataType: 'json',
            encode: true,
            success: function (res) {
                var ret = $.parseJSON(JSON.stringify(res));
                response.html(ret.message).fadeIn(500);
            }
        });

        BootstrapDialog.show({
            type: BootstrapDialog.TYPE_SUCCESS,
            title: 'Cadastro',
            message: 'Cadastro Realizado com Sucesso! Obrigado!'
        });

        document.getElementById("c_name").disabled = true;
        document.getElementById("c_cep").disabled = true;
        document.getElementById("c_email").disabled = true;
        document.getElementById("c_complemento").disabled = true;
        document.getElementById("submitButton").disabled = true;

    }


});


/* ---------------------------------------------- /*
 * E-mail validation
 /* ---------------------------------------------- */

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};




