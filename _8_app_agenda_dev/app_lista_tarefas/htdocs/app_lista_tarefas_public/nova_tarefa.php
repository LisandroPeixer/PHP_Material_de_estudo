<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Agenda</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					Agenda
				</a>
			</div>
		</nav>

		<? if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Evento inserido com sucesso!</h5>
			</div>
		<? } ?>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Pendentes</a></li>
						<li class="list-group-item active"><a href="nova_tarefa.php">Novo evento</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todos eventos</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Novo evento</h4>
								<hr />

								<form method="post" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										<label>Agendamento:</label>
										<input type="text" class="form-control" name="data" placeholder="data"><!--novo-->
										<input type="text" class="form-control" name="abertura" placeholder="abertura"><!--novo-->
										<input type="text" class="form-control" name="intervalo" placeholder="intervalo"><!--novo-->
										<input type="text" class="form-control" name="fechamento" placeholder="fechamento"><!--novo-->
										<input type="text" class="form-control" name="nome" placeholder="nome"><!--novo-->
										<input type="text" class="form-control" name="email" placeholder="email"><!--novo-->	
									</div>

									<button class="btn btn-success">Cadastrar</button>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>