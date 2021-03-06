<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Gestão Financeira</title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-cliente').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "proc_pesq_cliente.php",
					"type": "POST"
				}
			});
		} );
		</script>
	</head>
	<body>
		<h1>Listar clientes</h1>
		<table id="listar-cliente" class="display" style="width:100%">
			<thead>
				<tr>
				<th>Cpf</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>E-mail</th>
                <th>Contato</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Complemento</th>
				</tr>
			</thead>
		</table>		
	</body>
</html>
