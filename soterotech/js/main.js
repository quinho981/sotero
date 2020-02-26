$(document).ready(() => {
	// Carregar google charts
	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
})

// Criar e popular google charts
function drawChart() {
	var data = google.visualization.arrayToDataTable( contentChart() );

	var options = {
		title: '',
	  	pieHole: 0.4,
	};

	var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
	chart.draw(data, options);
}

function contentChart(){
	var id = document.querySelectorAll('.id')
	var nome = document.querySelectorAll('.nome')
	var sobrenome = document.querySelectorAll('.sobrenome')
	var participacao = document.querySelectorAll('.participacao')

	var chartContent = [];
	chartContent.push(['Nome' , 'Participação'])
	for (i = 0; i < id.length ; i++) {
		/*chartContent += `['${nome[i].innerText} ${sobrenome[i].innerText}', ${participacao[i].innerText}],`;*/
		var result = chartContent.push([`${nome[i].innerText} ${sobrenome[i].innerText}`, parseInt(participacao[i].innerText)])
	}
	return chartContent
}
