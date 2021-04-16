<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container box">
    <h1>Favourite color</h1>
     <canvas id="chart1" width="400" height="200"></canvas>
      
     <h1>Favourite type of movie</h1>
     <canvas id="chart2" width="400" height="200"></canvas>
     
     <h1>Product price</h1>
     <canvas id="сhart3" width="400" height="200"></canvas>
</div>
     <script type="text/javascript">
     	var ctx1 = document.getElementById("chart1");
    var chart1 = new Chart(ctx1, {
        type: 'bar',
        data:{
            labels: ["green", "black", "red", "yellow", "blue"],
            datasets: [
                {
                    label:'colors',
                    data: [12,60,60,50,25],
                    backgroundColor :['rgba(60, 179, 113,1)',
                    'rgba(0,0,0,1)',
                    'rgba(255,0,0,1)',
                    'rgba(255, 165, 0,1)',
                    'rgba(0,0,255,1)',
                    ],
                }
            ]
        },
        options: {
            scales:{
                yAxes:[{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });


    var ctx2 = document.getElementById("chart2");
    var chart2 = new Chart(ctx2, {
        type: 'pie',
        data:{
            labels: ["Comedy", "Action", "fantastic"],
            datasets: [
                {
                    label:'Pie Chart Example',
                    data: [75,5,20],
                    backgroundColor :['rgba(250,100,102,1)',
                    'rgba(222,162,200,1)',
                    'rgba(150,206,102,1)',
                    ],
                }
            ]
        },
        options: {
            scales:{
                yAxes:[{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx3 = document.getElementById("сhart3");
    var сhart3 = new Chart(ctx3, {
        "type":"line",
        "data":{
            "labels":["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            "datasets":[{"label":"My First Dataset", "data":[30,25,40,62,48,90,110],
            "fill":false, "borderColor":"rgb(100,100,100)", "lineTension":0.1}]},
            "options":{}});
     </script>
</body>
</html>