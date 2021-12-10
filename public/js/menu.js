
$(".menu-toggle").click(function() {
    const body = document.querySelector('body');
    body.classList.toggle('hide-sidebar');
});

$(".menu-toggle").ready(function() {
    const body = document.querySelector('body');
    body.classList.toggle('hide-sidebar');
});

$("#home").ready(function() {
    console.log('Page loaded');
    $("home").load("/buscarGaragem.php");
    $.post("buscarGaragem.php", function(result) {  
        $("#home").html(result);
    
    }).done(function() {
		console.log( "Sucesso" );
	}).fail(function( jqxhr, textStatus, error ) {
		alert('Erro ao Consultar a Garagem');
		console.log( "error "+textStatus+'-'+error );
	});	

    
    // $.get("buscarGaragem.php");
});