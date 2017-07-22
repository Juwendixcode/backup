$(document).ready(function(){
	var barGraph ;
	var pieGraph;
	loadPieGraph(true);
    loadBarGraph(true);
	function loadPieGraph(condition) {
		$.ajax({
		url: "http://localhost/KB/mangjek_kb/API/get_total_drivercustomer",
		method: 'GET',
    	crossDomain: true,
    	dataType: 'jsonp',
		success: function(data) {
			console.log("pie condition:"+condition);
			var label = [];
			var score = [];
			var scoreDriver=[];
			for(var i in data){
				label.push(i);
				score.push(data[i]);
		

			}

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

				]
			};
			initPieGraph(chartdata,condition);

			
		},
		error: function(data) {
			console.log("gagal");
		}

	});

	}
	function loadBarGraph(condition){
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
			var scoreContacting = [];
			for(var i in data){
				label.push(data[i].bulan);
				scoreReject.push(data[i].reject);
				scoreCancel.push(data[i].cancel);
				scoreSuccess.push(data[i].finish);
				scoreContacting.push(data[i].contacting);


			}


			var chartdata = {
				labels: label,
				datasets : [
					{
						label: "Contacting",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: scoreContacting
					},
					{
						label: "Reject",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "#F44336",
						borderColor: "#F44336",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: scoreReject
					},
					{
						label: "Cancel",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "#FFD600",
						borderColor: "#FFD600",
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
					},


				],

			};
			initBarGraph(chartdata,condition);

			
		
		},
		error: function(data) {
			console.log("gagal");
		}

	});

	}
	function initBarGraph(data,optionsCon){
		var ctx = $("#mycanvas1");
		if (optionsCon) {
			barGraph = new Chart(ctx, {
					type: 'bar',
					data: data
					// options:optionsAnimation
					
			});
		}else{
			var optionsAnimation = {animation : optionsCon}
			barGraph = new Chart(ctx, {
					type: 'bar',
					data: data,
					options:optionsAnimation
					
			});

		}


	}
	function initPieGraph(data,optionsCon){
		var ctx = $("#mycanvas");
		if (optionsCon) {

			pieGraph = new Chart(ctx, {
				type: 'doughnut',
				data: data,
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

		}else{


			pieGraph = new Chart(ctx, {
				type: 'doughnut',
				data: data,
				options: {
					 legend: {
					    display: true
					  },
					  pieceLabel: {
					    mode: 'value',
					    precision: 2

					  },
					  animation:optionsCon
				}
			});

		}
			
	}
	function updateGraph(){
		loadPieGraph(false);
    	loadBarGraph(false);
   	    console.log("success Update");
   		barGraph.update();
   		pieGraph.update();
	}
	setInterval(function(){
	    updateGraph();
	    },10000
	);
	
		
});