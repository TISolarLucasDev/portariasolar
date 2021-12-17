$(".menu-toggle").click(function() {
    const body = document.querySelector('body');
    body.classList.toggle('hide-sidebar');
});

$(".menu-toggle").ready(function() {
    const body = document.querySelector('body');
    body.classList.toggle('hide-sidebar');
});


$("#home").ready(function() {
    $("home").load("/buscarGaragem.php");
    $.post("buscarGaragem.php", function(result) {
        $("#tablesContainer").html(result);

    }).done(function() {
        console.log("Sucesso");
    }).fail(function(jqxhr, textStatus, error) {
        alert('Erro ao Consultar a Garagem');
        console.log("error " + textStatus + '-' + error);
    });
});


$("#home").ready(function() {
    $("home").load("/cardCountCars.php");
    $.post("cardCountCars.php", function(result) {
        $("#cardContainer").html(result);

    }).done(function() {
        console.log("Sucesso");
    }).fail(function(jqxhr, textStatus, error) {
        alert('Erro ao Consultar a Garagem');
        console.log("error " + textStatus + '-' + error);
    });
});


function exibeModalSaida(veiculo, motorista, placa, hora, key) {
    let modalSaida = $('#modalSaida');
    let modalHtml = $('#modalSaidaHtml');
    let vKey = $('#keysaida');
    let html;

    modalHtml.empty();

    html = '<div>Veiculo : ' + veiculo + ' </div>';
    html += '<div>Motorista :  ' + motorista + ' </div>';
    html += '<div>Placa :  ' + placa + ' </div>';
    html += '<div>Hora de Entrada:' + hora + '</div>';

    modalHtml.append(html);

    vKey.val(key);

    modalSaida.modal({
        show: true
    });
}


function exibeModalCadastro(id = null, placa = '', nome = '', modelo = '', cor = '', setor = '', estacionamento = '', fornecedor = '') {
    let refKey = $('#keyEditar');
    let refPlaca = $('#placaEditar');
    let refNome = $('#nomeEditar');
    let refModelo = $('#modeloEditar');
    let refCor = $('#corEditar');
    let refSetor = $('#setorEditar');
    let refCheckGaragem = $('#checkGaragemEditar');
    let refCheckFornecedor = $('#checkFornecedorEditar');

    refKey.empty();
    refKey.val(id);

    refPlaca.empty();
    refPlaca.val(placa);

    refNome.empty();
    refNome.val(nome);

    refModelo.empty();
    refModelo.val(modelo);

    refCor.empty();
    refCor.val(cor);

    refSetor.empty();
    refSetor.val(setor);

    refCheckGaragem.empty();
    refCheckGaragem.val(estacionamento);

    refCheckFornecedor.empty();
    refCheckFornecedor.val(fornecedor);

    $('#modalCadastro').modal({
        show: true
    });
}

function filtroPlaca() {
    let index = $("#filtroPlacaEstacionamento").parent().index();
    let nth = "#tabelaEstacionamento td:nth-child(" + (index + 1).toString() + ")";
    let valor = $("#filtroPlacaEstacionamento").val().toUpperCase();

    $("#tabelaEstacionamento tbody tr").show();

    $(nth).each(function() {
        if ($(this).text().toUpperCase().indexOf(valor) < 0) {
            $(this).parent().hide();
        }
    });
}