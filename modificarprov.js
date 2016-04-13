$(document).ready(function(){
	$(".eliminar").click(function(){
                $(this).parent('td').parent('tr').remove();
                $.post('./ejecutaprov.php',{
                Caso:'Eliminar',
                Id:$(this).attr('data-id'),
                },function(e){
                  alert(e);
                 });
                
		
		});

       $(".modificar").click(function(){
                var proveedor=$(this).parent('td').parent('tr').find('.proveedor').val();
                var telefono=$(this).parent('td').parent('tr').find('.telefono').val();
		var correo=$(this).parent('td').parent('tr').find('.correo').val();
                var empresa=$(this).parent('td').parent('tr').find('.empresa').val();
                var telempresa=$(this).parent('td').parent('tr').find('.telempresa').val();
                var material=$(this).parent('td').parent('tr').find('.material').val();
		$.post('./ejecutaprov.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
                        Proveedor:proveedor,
                        Telefono:telefono,
                        Correo:correo,
                        Empresa:empresa,
                        Telempresa:telempresa,
                        Material:material
		},function(e){
			alert(e);
		});
	});
});