<?php include('../settings.php');
	
#############################################################
	#	                                                      
    #	CREATED FOR Aurora TEMPLATE 
    #   http://weather34.com/homeweatherstation/index.html  	 	                                                                                               
    # 	built on CanvasJs  	                                                                           	
    #   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           
	# 	free for non commercial use and credit must be left in tact .            
	# 	Weather34 Release November 2020                                               
	# 	                                                                                               
	#   https://www.weather34.com 	                                                                
	#############################################################
	
	header('Content-type: text/html; charset=utf-8');
	$weatherfile = 'Forecast Temperature';
    $conv     = true;   // set to true always	
    if ($rainunit == "in") {$unit='in';}
	if ($rainunit == "mm") {$unit='cm';}	
	$conv = 1;
	
	
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Forecast Chart Temp</title>
		<script src=../js/jquery.js></script>
	';	
	?>
    <br>
    <script type="text/javascript">

function WEATHER34CHARTCOLORS(weather34value) {
if (weather34value>0 && weather34value<=150) {thecolor='hsla(185, 100%, 37%, 1)';}     
else {thecolor='hsla(185, 100%, 37%, 1)';}
return thecolor;}




        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
		$.ajax({
			type: "GET",
			url: "snowforecast34.php",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});
	
	function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >1)
					//dataPoints1.push({label:rowData[0],y:parseFloat(rowData[1])});	
                    dataPoints1.push({label: rowData[0],y:parseFloat(rowData[1]*<?php echo $conv ;?>),color:WEATHER34CHARTCOLORS(parseFloat(rowData[1]))});
					
					
			}
		}
		requestTempCsv();}function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>1){
			
			for (var i = 0; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >0)
					dataPoints2.push({label: rowData[0],y:parseFloat(rowData[3]*1.60934)});
					//parseFloat(rowData[13])});
				
			}
			drawChart(dataPoints1 );
		}
	}

	
	function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer2", {
			backgroundColor: " hsla(228, 10%, 10%,0)",
		 animationEnabled: false,
		 margin: 0,
		 
		title: {
            text: " ",
			fontSize: 0,
			fontColor:' #555',
			fontFamily: "arial",
        },
		toolTip:{
			fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: "rgba(40, 45, 52,1)",	
			   fontColor: '#fff',	
			   fontSize: 11,
			   borderThickness: 3,	   
			   //toolTipContent: " x: {x} y: {y} <br/> name: {name}, label:{label} ",
			   shared: true, 
			   valueFormatString: "#",
			   contentFormatter: function ( e ) {
               return "Accumulation " +  e.entries[0].dataPoint.y.toFixed(0) +" <?php echo $unit?>";  }
 },
 axisX: {
			gridColor: "#333",	
			gridDashType: "dot",
		    labelFontSize: 8,
			labelFontColor:' #aaa',
			lineThickness: 1,
			gridThickness: 1,				
			labelFontFamily: "Helvetica",	
			labelFontWeight: "bold",			
			interval:1,
			labelAngle: 0,			
			crosshair: {
			thickness: 50,
			lineDashType: "solid" ,
			enabled: true,
			snapToDataPoint: true,			
			labelFontColor: "#aaa",
			labelFontSize:0,
			labelBackgroundColor: "#cf5129",			
			color:'hsla(185, 100%, 37%, .1)',
		}
			
			},
			
		axisY:{
		title: "",
		titleFontColor: "#aaa",
		titleFontSize: 0,
        titleWrap: false,
		margin: 0,
		lineThickness: 0.5,		
		gridThickness: 1,		
        tickColor: "rgba(40, 45, 52,0)",
		tickLength: 0,			
        includeZero: true,
		gridColor: "#333",	
		gridDashType: "dot",			
		interval:2,
		labelFontSize: 8,
		labelFontColor:' #aaa',			
		labelFontFamily: "Helvetica",	
		labelFontWeight: "bold",
		labelFormatter: function ( e ) {
        return e.value .toFixed(0) ;  
         },		
		crosshair: {
			enabled:false,
			labelMaxWidth: 50,  
			labelWrap: true,
			snapToDataPoint: true,
			color: "rgba(40, 45, 52,0)",
			labelFontColor: "#F8F8F8",
			labelFontSize:0,
			labelBackgroundColor: "#ec5519",
		}		 
		 
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
  
 },
		
		
		data: [
		{
			//Snow
			type: "column",
			indexLabelLineThickness: 0, 
			indexLabelLineThickness: 0,       
       		indexLabel: "{y}",
	   		indexLabelFontSize: 9,
	   		indexLabelFontColor: "#fff",	  
	   		indexLabelMaxWidth: 30,
	   		indexLabelFontWeight: "bold",
       		indexLabelWrap: true,
	   		indexLabelPlacement: "inside",     			
			markerSize:0,
			showInLegend:false,
			legendMarkerType: "circle",
			lineThickness: 0,
			markerType: "none",
			name:"Snowfall",
			dataPoints: dataPoints1,
			yValueFormatString: "##.## <?php echo $unit ;?>",
		},
		{
			
		}

		]
		});

		setTimeout(function(){
		chart.render();
	},500);
	}
});

      </script>
<style>		  
  .modulecaption {
    display: flex;
    position: relative;
    left: 40px;
    top: 0;
    color: #fff;    
	font-family: Arial;
	width:auto;
	max-width:140px;
	 background: hsl(225, 3%, 27%);
	top:112px;
	line-height:1.1;	
	z-index: 9999;
    font-size: 10px;
    padding: 0px 3px 0px 3px;    
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
	-o-border-radius: 3px;
	
}
.unitscaption
{display: flex;position:absolute;width:30px;
     background: hsl(225, 3%, 27%);
	margin-top:101px;
	float:right;
    line-height:1.1;    
	color: #fff;
    font-family: Arial;    
    font-size: 10px;
    padding: 0px 3px 0px 3px; 
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    flex-grow: 0;
    flex-shrink: 1;
    flex-basis: auto
}</style>

<body>
<div class="modulecaption" >Snow Accumulation Forecast</div>
<div class="unitscaption" ><?php echo $unit ;?></div>
<div id="chartContainer2" style="height:110px;margin-top:-25px;-webkit-border-radius:10px;border-radius:10px;border:6px solid hsla(212, 12%, 72%,.2);background:transparent"></div>

</body>
<script src='../weather34charts/canvasJs.js'></script>