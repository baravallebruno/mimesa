$("#profile").on("submit", function(e)){
	
	e.preventDefault();

	$.post("../admin/index.php", $("#profile").serialize(), function(data){
		$("#usuario").html(data.respuesta);
		$
	})
}