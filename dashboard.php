<head>
	<meta charset="utf-8"> 
 	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
	<title> Dashboard</title>

	<!-- Latest compiled and minified CSS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 	<!-- Optional theme -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 	<!-- Latest compiled and minified jQuery --> 
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
	 integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  	crossorigin="anonymous"></script> 
  	
 	<!-- Latest compiled and minified JavaScript -->
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Link the HTML to Font Awesome Icon (Bootstrap CDN) --> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

	<!--Link to chart.JS CDN --> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>

	<!-- Link the HTML with CSS --> 
	<link rel="stylesheet" href="dashboardstyle.css" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300" rel="stylesheet">
</head>

<body>  
	<!--<div id="Header"> GRADE RANK </div>--> 
	<div id="A">
		<div id="A1">
			<a href="dashboard.php"><button id="Abtn"> DASHBOARD </button></a>
		</div>
		<div id="A2">
			<a href="searchpage.php"><button id="Abtn"> SEARCH CLASS</button></a>
		</div>
		<div id="A3">
			<a href="sorting.php"><button id="Abtn"> SORT </button></a>
		</div>
		<div id="A4">
			<a href="inputgrade.php"><button id="Abtn"> INPUT GRADE </button></a>
		</div>
		<div id="A5">
			<a href="setting.php"><button id="Abtn"> SETTINGS </button></a>
		</div>
		<div id="A6">
			<a href='mainpage.html'><button id="Abtn" name="logout"> LOGOUT </button></a>
		</div>
	</div>

	<div id="B1">
		<a href="cs171.php"><button id="B1A"> CS 171 </button>
		<div id="canvas-wrap">
			<canvas id="canvas2" width="400" height="250"></canvas></a> 
			<p> Average Grade: <b> 3.3/4.0 </b> <br> 
			Most People in this Class Receive <b> A </b> <br>
			Difficulty: <b> Easy </b> </p> 
		</div>
	</div>


	<div id="B2">
		<canvas id="canvas" width="600" height="400"></canvas>
	</div>


	<!-- Script for the Pie Chart -->
	<script>
		//Initialize some variables
		var dough = $("#canvas2"); 
		var dooptions = {
			maintainAspectRatio: false, 
    	 	responsive: false, 
    	 	animateScale: true   
		}

		var dodata = {
		    labels: [
		        "A",
		        "B",
		        "C", 
		        "D", 
		        "F"
		    ],
		    datasets: [
		        {
		            data: [60,20,15,3,2],
		           backgroundColor: [
				    "#117864",
				    "#48C9B0", 
				    "#A3E4D7",
				    "#D1F2EB", 
		            "#E5E8E8"
		        ],   
		           hoverBackgroundColor: [
		            "#0E6655",
		            "#1ABC9C",
		            "#76D7C4", 
		            "#A3E4D7",  
		            "#E5E7E9" 
		        ]
		        }]
		};

		var myDoughnut = new Chart(dough, {
			type: "doughnut", 
			data: dodata, 
			options: dooptions
		}); 
	</script>

	<!-- Script for the Bar Chart --> 
	<script>
		Chart.defaults.global.defaultFontFamily = "Roboto Condensed"; 
		Chart.defaults.global.defaultFontSize = 14; 
		var ctx = $("#canvas"); 
		var options = {
    	maintainAspectRatio: false, 
    	responsive: false, 
    	scales: {
    		xAxes: [{
    			ticks:{
    				fontFamily: "Roboto Condensed", 
    			}
    		}], 
    		yAxes: [{
    			ticks:{
    				fontFamily: "Roboto Condensed", 
    			}
    		}]
    	}
	};
		var data = {
    labels: ["Math", "CompSci", "English", "Statistics", "Biology", "Philosophy", 
    "Finance"],
    datasets: [
        {
            label: "AVERAGE FINAL GRADE ACROSS MAJORS (2016-17)",
            backgroundColor: "rgba(75,192,192,0.4)",   
            borderColor: "rgba(75,192,192,1)",
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 10,
            data: [3.3, 2.5, 3.4, 3.3, 1.9, 3.2, 3.6, 0],
        }
    ]
};
		var myBarChart = new Chart(ctx, {
		    type: 'bar',
		    data: data,
		    options: options
		});

	</script>

</body>


