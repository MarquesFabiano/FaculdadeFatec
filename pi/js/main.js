function calcularDicas() {
	var horasSono = document.getElementById("horas-sono").value;
	var tempoAdormecer = document.getElementById("tempo-adormecer").value;
	var problemasSono = document.getElementById("problemas-sono").value;
	var atividadesAntesDormir = document.getElementById("atividades-antes-dormir").value;
	var alimentacao = document.getElementById("alimentacao").value;
	var atividadesFisicas = document.getElementById("atividades-fisicas").value;
	var dicas = "";

	if (horasSono < 7) {
		dicas += "Tente dormir pelo menos 7 horas por noite para melhorar a qualidade do sono. ";
	}

	if (tempoAdormecer > 30) {
		dicas += "Se estiver tendo dificuldades para dormir, tente reduzir o tempo que leva para adormecer, evitando atividades estimulantes antes de dormir e mantendo um horário regular de sono. ";
	}

	if (problemasSono != "") {
		dicas += "Se estiver tendo problemas de sono como " + problemasSono + ", consulte um médico especialista em sono para avaliar o seu caso e receber tratamento adequado. ";
	}

	if (atividadesAntesDormir.toLowerCase().includes("tv") || atividadesAntesDormir.toLowerCase().includes("celular")) {
		dicas += "Evite atividades estimulantes como assistir TV ou usar o celular antes de dormir, pois elas podem afetar a qualidade do sono. ";
	}

	if (alimentacao.toLowerCase().includes("leve")) {
		dicas += "Faça uma alimentação leve antes de dormir para facilitar o processo de digestão e melhorar a qualidade do sono. ";
	}

	if (atividadesFisicas != "") {
		dicas += "Praticar atividades físicas regularmente, como " + atividadesFisicas + ", pode ajudar a melhorar a qualidade do sono. ";
	}

	document.getElementById("dicas").innerHTML = dicas;
}
