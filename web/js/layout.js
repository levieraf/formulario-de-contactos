var ContadorItems = 0;
$(document).ready(function(){

  $("#add_product").bind("click",function(e){
    e.preventDefault();
    ContadorItems++;
    $("#contador_productos").html(ContadorItems);

    $(".items").append($(".estructura_campos_productos").html());

    $("#cant_items").val(ContadorItems);
  });

  $(".delete_product").live("click",function(e){
    e.preventDefault();
    ContadorItems--;
    $("#contador_productos").html(ContadorItems);
    $(this).parent("div").parent("div.item").fadeOut("slow");
    $("#cant_items").val(ContadorItems);
  });  

  $("button[type='submit']").click(function(){
    limiteMinimoItemsCargados 	= 2;
    cantidadItemsCargados 		= $(".item").length;
    if(cantidadItemsCargados<limiteMinimoItemsCargados){
    	$("#alerta").show("2000").html(""+
    		"<div class=\"alert alert-error\">"+
  			"	<button class=\"close\" data-dismiss=\"alert\">×</button>"+
  			"	<strong>Notificación!</strong> Debe especificar cargar un producto (minimo 1)"+
			"</div>"+
    		"");
    	return false;
    }
  });



});
