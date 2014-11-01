setInterval(function(){
	$.post( "conecta.php",{id: '1'}, function( data ) {
  		$( "#expandir" ).html( data );
	});
},1000)