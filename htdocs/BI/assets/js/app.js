$(document).ready(function(){
	$.ajax({
		url: "http://localhost/KB/mangjek_kb/API/get_total_drivercustomer",
		method: 'GET',
    	crossDomain: true,
    	dataType: 'jsonp',
		success: function(data) {
			
			var label = [];
			var score = [];
			var scoreDriver=[];
			for(var i in data){
				label.push(i);
				score.push(data[i]);
		

			}
			// for(var i in data){
			// 	player.push(i);
			// }
			// for(var i in data) {
			// 	player.push("Player " + data[i].playerid);
			// 	score.push(data[i].score);
			// }

			var chartdata = {
				labels: label,
				datasets : [
					{
						backgroundColor: ["#00a65a",'#f56979'],
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: '#E3F2E1',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}


					// {
					// 	label: 'Driver',
					// 	backgroundColor: 'rgba(200, 200, 200, 0.75)',
					// 	borderColor: 'rgba(200, 200, 200, 0.75)',
					// 	hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
					// 	hoverBorderColor: 'rgba(200, 200, 200, 1)',
					// 	data: scoreDriver
					// }

				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'doughnut',
				data: chartdata,
				options: {
					 legend: {
					    display: true
					  },
					  pieceLabel: {
					    mode: 'value',
					    precision: 2

					  }
				}
			});
		},
		error: function(data) {
			console.log("gagal");
		}

	});

		$.ajax({
		url: "http://localhost/KB/mangjek_kb/API/get_total_transaksi_perstatus",
		method: 'GET',
    	crossDomain: true,
    	dataType: 'jsonp',
		success: function(data) {
			
			var label = [];
			var scoreReject = [];
			var scoreCancel = [];
			var scoreSuccess = [];
			for(var i in data){
				console.log(data[i].success);
				label.push(data[i].bulan);
				scoreReject.push(data[i].reject);
				scoreCancel.push(data[i].cancel);
				scoreSuccess.push(data[i].finish);
		

			}
			// for(var i in data){
			// 	player.push(i);
			// }
			// for(var i in data) {
			// 	player.push("Player " + data[i].playerid);
			// 	score.push(data[i].score);
			// }

			var chartdata = {
				labels: label,
				datasets : [
					{
						label: "Reject",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: scoreReject
					},
					{
						label: "Cancel",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "#f56979",
						borderColor: "#f56979",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: scoreCancel
					},
					{
						label: "Succes",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "#00a65a",
						borderColor: "#00a65a",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: scoreSuccess
					}

				],

			};

			var ctx = $("#mycanvas1");
			var opt = {
			    events: false,
			    tooltips: {
			        enabled: false
			    },
			    hover: {
			        animationDuration: 0
			    },
			    animation: {
			        duration: 5,
			        onComplete: function () {
			            var chartInstance = this.chart,
			                ctx = chartInstance.ctx;
			            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
			            ctx.textAlign = 'center';
			            ctx.textBaseline = 'bottom';

			            this.data.datasets.forEach(function (dataset, i) {
			                var meta = chartInstance.controller.getDatasetMeta(i);
			                meta.data.forEach(function (bar, index) {
			                    var data = dataset.data[index];                            
			                    ctx.fillText(data, bar._model.x, bar._model.y - 5);
			                });
			            });
			        }
			    }
			};
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
				
			});
		},
		error: function(data) {
			console.log("gagal");
		}

	});
});