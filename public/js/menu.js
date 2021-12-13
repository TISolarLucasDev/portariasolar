
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
		console.log( "Sucesso" );
	}).fail(function( jqxhr, textStatus, error ) {
		alert('Erro ao Consultar a Garagem');
		console.log( "error "+textStatus+'-'+error );
	});	
});


$("#home").ready(function() {
    $("home").load("/cardCountCars.php");
    $.post("cardCountCars.php", function(result) {  
        $("#cardContainer").html(result);
    
    }).done(function() {
		console.log( "Sucesso" );
	}).fail(function( jqxhr, textStatus, error ) {
		alert('Erro ao Consultar a Garagem');
		console.log( "error "+textStatus+'-'+error );
	});	
});

// $(document).ready(function() {
//     $("#exampleModalCenter").modal();
// });

//$('#myModal').on('shown.bs.modal', function() {
//    $('#myInput').focus();
//})
