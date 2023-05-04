
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main.js"></script>
	<link rel="stylesheet" href="css/main.css">
    <title>Qualidade do sono</title>
</head>
<body>
    <h1>Qualidade do Sono</h1>
	<p>Preencha as informações abaixo para receber dicas personalizadas sobre como melhorar a qualidade do seu sono:</p>
	<form>
		<label for="horas-sono">Quantas horas de sono você costuma ter por noite?</label>
		<input type="number" id="horas-sono" name="horas-sono"><br>

		<label for="tempo-adormecer">Quanto tempo você demora para adormecer?</label>
		<input type="number" id="tempo-adormecer" name="tempo-adormecer"><br>

		<label for="problemas-sono">Você tem algum problema de sono (ronco, apneia, insônia, etc)?</label>
		<input type="text" id="problemas-sono" name="problemas-sono"><br>

		<label for="atividades-antes-dormir">Quais atividades você costuma fazer antes de dormir (assistir TV, usar o celular, ler, etc)?</label>
		<input type="text" id="atividades-antes-dormir" name="atividades-antes-dormir"><br>

		<label for="alimentacao">Como é a sua alimentação antes de dormir (leve, pesada, lanche, etc)?</label>
		<input type="text" id="alimentacao" name="alimentacao"><br>

		<label for="atividades-fisicas">Você pratica alguma atividade física regularmente? Qual?</label>
		<input type="text" id="atividades-fisicas" name="atividades-fisicas"><br>

		<button type="button" onclick="calcularDicas()">Como estou dormindo?</button>
	</form>
    <div>
        <p id="dicas"></p>
    </div>
	<div>
	<a href="logout.php">Logout</a>
	</div>
</body>
</html>
