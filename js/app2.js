// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

$(document).ready(function(){
	$.ajax({
		url: "http://localhost/final_project/activitiesReport.php", 
		method: "GET",
		success: function(data) {
			// eslint-disable-next-line no-console
			console.log(data);
			
			var type = [];
			var count = [];

			for(var i in data) {
				type.push(data[i].AType);
				count.push(data[i].count);
			}
			function getRandomColor() {
				var letters = '0123456789ABCDEF'.split('');
				var color = '#';
				for (var i = 0; i < 6; i++ ) {
					color += letters[Math.floor(Math.random() * 16)];
				}
				return color;
			}
			// eslint-disable-next-line no-console
			console.log(data);
			
			var chartdata = {
				labels: type,
				datasets : [
					{
						label: 'Activities',
						backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
						hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
						hoverBorderColor: "rgba(234, 236, 244, 1)",
						data: count
					}
				]
			};
			
			var options = 
				{
				maintainAspectRatio: false,
					tooltips: {
						backgroundColor: "rgb(255,255,255)",
						bodyFontColor: "#858796",
						borderColor: '#dddfeb',
						borderWidth: 1,
						xPadding: 15,
						yPadding: 15,
						displayColors: false,
						caretPadding: 10,
					},
					legend: {
						display: true,
						position: 'bottom'
						},
					cutoutPercentage: 80,
				};
			
			var ctx = document.getElementById('myPieChart');
			var pieChart = new Chart(ctx, {
				type: 'doughnut',
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