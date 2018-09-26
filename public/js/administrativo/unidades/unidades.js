$(document).ready( function () {
    $('#datatable').DataTable();
} );

$(function(){
var $oBotaoExcluir = $('#btn-excluir');
	$oBotaoExcluir.click(function(){
		var $oTable = $('#lista-unidades'),
			$oForm = $('#form-unidades'),
			$checked = $oTable.find(':checkbox:checked');

		if ($checked.length)
			bootbox.confirm("Deseja realmente excluir os itens selecionados ?", function(result) {
				if (result)
					$oForm.submit();
			});
		else
			bootbox.alert("Selecione algum item para exclusão");
	});
});