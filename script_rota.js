setInterval(function(){
	$.post( "conecta_rota.php",{id: '1'}, function( data ) {
  		$( "#rotacao" ).html( data );
	});
},1000)
setInterval(function(){
	$.post( "conecta_rota2.php",{id: '1'}, function( data ) {
  		$( "#rotacao2" ).html( data );
	});
},1000)
setInterval(function(){
	$.post( "conecta_rota3.php",{id: '1'}, function( data ) {
  		$( "#rotacao3" ).html( data );
	});
},1000)
setInterval(function(){
	$.post( "conecta_rota4.php",{id: '1'}, function( data ) {
  		$( "#rotacao4" ).html( data );
	});
},1000)
