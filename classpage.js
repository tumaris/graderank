
  //----------------------------- SHOW AND HIDE REVIEW BOX -----------------------------
		$('#review').click(function(){
			$('#target').toggle('slow');
		});


  //---------------------------  JSON STUFF ---------------------------------------------
  //Create some global variables to be use

  var classavg = 0;
  var count = 0;
  var arr = []; //store all grade

  //Pulling data from internal json
  var jsondisplay = document.getElementById("jsondisplay");
  var request = new XMLHttpRequest();
  request.open('GET', 'file.php', true);
  request.onload = function()
  {
    var data = JSON.parse(request.responseText);
    for (var i = 0; i < data.length; i++)
    {
      if (data[i].class == "CS 171"){
        classavg += parseInt(data[i].grade);
        count++;
        arr.push(parseInt(data[i].grade));
      }
    }

    //Store class grade to pie chart
    var a = 0;
    var b = 0;
    var c = 0;
    var d = 0;
    var f = 0;
    for (var j = 0; j < arr.length; j++){
      if (arr[j] > 3.6) a++;
      if (arr[j] > 2.6 && arr[j] < 3.6) b++;
      if (arr[j] > 1.6 && arr[j] < 2.6 ) c++;
      if (arr[j] > 0 && arr[j] < 1.6) d++;
      if (arr[j] <= 0) f++;
    }
    displayPieChart(a,b,c,d,f);


    //Calculating class average and display it
    classavg = Math.round(classavg / count * 100) / 100;
    var passingrate = Math.round((a + b + c) / count * 100);
    var lettergrade;

    //Calculating class letter grade
    if (classavg > 3.6) lettergrade = "A";
    if (classavg > 2.6 && classavg < 3.6) lettergrade = "B";
    if (classavg > 1.6 && classavg < 2.6) lettergrade = "C";
    if (classavg > 0 && classavg < 1.6) lettergrade = "D";
    if (classavg <= 0) lettergrade = "F";

    //Assign class label
    var classLabel;
    if (classavg > 3.60){
      classLabel = "Easy";
      jsondisplay.style.color = " #117864";
    }
    else if (classavg > 2.60){
      classLabel = "Medium";
      jsondisplay.style.color = "#B7950B";
    }
    else if (classavg > 0){
      classLabel = "Hard";
      jsondisplay.style.color = "#922B21";
    }

    //display Text
    var averageText = "<h4>" + "Average: " + "<b>" + classavg + "/4.00 </b><br>Most students receive <b>" + lettergrade + "</b><br>Passing rate: <b>" + passingrate +
    " %</b> <br> Sample Size: <b>" + count + " users</b></h4>";
    jsondisplay.insertAdjacentHTML('beforeend', classLabel);
    jsondisplay.insertAdjacentHTML('beforeend', averageText);



  }

  request.send();


  //--------------------------- DISPLAYING PIE CHART -----------------------------



//Piechart thingy
function displayPieChart(a,b,c,d,f)
{
  Chart.defaults.global.defaultFontFamily = "Roboto Condensed";
  Chart.defaults.global.defaultFontSize = 14;
  var doughnut = $('#canvas1');
  var doughnutoptions = {
    maintainAspectRatio: false,
    responsive: false,
    animateScale: true,
    cutoutPercentage: 70
  }

  var doughnutdata={
    labels: [
            Math.round(a / count*100) + "% of users get A",
            Math.round(b / count*100) + "% of users get B",
            Math.round(c / count*100) + "% of users get C",
            Math.round(d / count*100) + "% of users get D",
            Math.round(f / count*100) + "% of users get F"
    ],
    datasets: [
        {
          data: [a,b,c,d,f],
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
        }],
  };

  var mydoughtnut = new Chart(doughnut, {
    type: "doughnut",
    data: doughnutdata,
    options: doughnutoptions
  });
}
