$(document).ready(function () {
    $('#cpf').mask('000.000.000-00');
    $('#telefone').mask('(00) 00000-0000');
    $('#cep').mask('00000-000');
    $('#cpf_cnpj').on('input', function () {
        var value = $(this).val();
        if (value.length <= 14) {
            $(this).mask('000.000.000-00');
        } else {
            $(this).mask('00.000.000/0000-00');
        }
    });
}); 