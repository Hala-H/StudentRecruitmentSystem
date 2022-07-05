// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

$(document).ready(function(){
	$.ajax({
		url: "http://localhost/final_project/noOfStudentsReport.php", 
		method: "GET",
		success: function(data) {
			// eslint-disable-next-line no-console
			console.log(data);
			
			var schools = [];
			var names = [];
			var students = [];

			for(var i in data) {
				schools.push(data[i].SID);
				names.push(data[i].SName);
				students.push(data[i].SStudentsTotal);
			}
//			function getRandomColor() {
//				var letters = '0123456789ABCDEF'.split('');
//				var color = '#';
//				for (var i = 0; i < 6; i++ ) {
//					color += letters[Math.floor(Math.random() * 16)];
//				}
//				return color;
//			}
			// eslint-disable-next-line no-console
			console.log(data);
			var chartdata = {
				labels: schools,
				datasets : [
					{
						label: 'Total Seniors per School',
						backgroundColor: "#4e73df",
						hoverBackgroundColor: "#2e59d9",
						borderColor: "#4e73df",
						data: students
					}
				]
			};
			
			var options = 
				{
					responsive: true,
					maintainAspectRatio: false,
					layout: {
						padding: {
							left: 10,
							right: 25,
							top: 25,
							bottom: 0
							}
						},
					scales: {
						xAxes: [{
							scaleLabel: {
								display: true,
								labelString: 'School ID'
								},
							time: {
								unit: 'Count',
								},
							gridLines: {
								display: false,
								drawBorder: false
								},
							ticks: {
								maxTicksLimit: 6,
								autoSkip: false
								},
							maxBarThickness: 25,
							}],
						yAxes: [{
							scaleLabel: {
								display: true,
								labelString: 'Total Number'
								},
							ticks: {
								beginAtZero: true,
								maxTicksLimit: 10,
								padding: 10
								},
							gridLines: {
								color: "rgb(234, 236, 244)",
								zeroLineColor: "rgb(234, 236, 244)",
								drawBorder: false,
								borderDash: [2],
								zeroLineBorderDash: [2]
								}
							}],
						},
					legend: {
						display: true
						},
					datalabels: {
						offsetY: 15
					},
					tooltips: {
						titleMarginBottom: 10,
						titleFontColor: '#6e707e',
						titleFontSize: 14,
						backgroundColor: "rgb(255,255,255)",
						bodyFontColor: "#858796",
						borderColor: '#dddfeb',
						borderWidth: 1,
						xPadding: 15,
						yPadding: 15,
						displayColors: false,
						caretPadding: 10,
						callbacks: {
							label: function(tooltipItem, chart) {
								var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
								return datasetLabel;
								}
							}
						},
					}
			var ctx = document.getElementById('myBarChart');
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				options: options,
			}); 
			// eslint-disable-next-line no-console
			console.log(data);
		},
		error: function(data) {
			// eslint-disable-next-line no-console
			console.log(data);
		}
	});
});