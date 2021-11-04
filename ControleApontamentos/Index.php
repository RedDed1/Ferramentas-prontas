<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Tasker WEB</title>
</head>
<body>
	<?php
		require_once ("conexao.php");
		$date;
		date_default_timezone_set('America/Sao_Paulo');
  		$date = date('H:i');

  		$fazendoServico = 1;
  	?>

	<div class="container m-1">
		<h1 class="pb-4">Tasker</h1>

		<div class="container" <?php if($fazendoServico == 0) {echo "";}  else { echo "hidden";}?>>
			<p>Não há serviços cadastrados no momento;</p>
			<form>
				<p>Novo apontamento:</p>
				<p>Horario é adicionado automaticamente;</p>
				<p><textarea rows="10" cols="50"></textarea></p>
				<input type="submit" name="btEnviar" value="Adicionar">
			</form>
		</div>

		<form>
			<div class="container" <?php if($fazendoServico == 1) {echo "";}  else { echo "hidden";}?>>
				<p>Horário de inicio: <input type="text" disabled value="<?php echo $date; ?>"></p>
				<p>O horario de termino é gerado automaticamente</p>
				<p>Status: Em execução</p>
				<p>Descrição do apontamento:</p>
				<p><textarea rows="10" cols="50" disabled></textarea></p>
				<input type="submit" name="btEnviar" value="Adicionar">
			</div>
		</form>

		<h3 class="pt-4">Apontamentos</h3>
		<div class="container bg-black pt-3" style="color: white" hidden>
			<p><b>Nenhum apontamento encontrado.</b></p>
		</div>

		<div>
			<div class="container bg-black pt-3" style="color: white">
				<p><b>00:00</b> / <b>00:00</b></p>
				<p>- Formatação de micro;</p>
			</div>


			<form>
				<div class="container">
					<input type="submit" name="btLimpar" value="Limpar lista">
				</div>
			</form>
		</div>

	</div>
</body>
</html>