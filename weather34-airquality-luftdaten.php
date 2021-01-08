<?php  include('livedata.php');
date_default_timezone_set($TZ);
    #########################################################
    #	CREATED FOR Weather34                               										  
    # https://weather34.com/homeweatherstation/index.html 
    # 	Revised: October 2020   				  	            
    # 	                                          
    #   https://www.weather34.com 	                                                                  
    ########################################################
    //luftdaten air quality	SCRIPT 
    $url = 'jsondata/luftdaten.txt'; // luftdaten JSON file
    $data = file_get_contents($url); // put the contents of the file into a variable
    $weather34luftdaten = json_decode($data,true); // decode the JSON feed
    foreach ($weather34luftdaten as $weather34luftdatenaqi) {}
    $aqiweather["aqi10"]     = $weather34luftdatenaqi['sensordatavalues'][0]['value'];
    $aqiweather["aqi25"]=$weather34luftdatenaqi['sensordatavalues'][1]['value'];   
    $aqiweather["aqi-type"]=$weather34luftdatenaqi['sensordatavalues'][0]['value_type'];
    $aqiweather["aqi-type-1"]= $weather34luftdatenaqi['sensordatavalues'][1]['value_type'];
if ($aqiweather["aqi-type"]=="P1"){$aqiweather["aqi-type"]="PM 10";}
if ($aqiweather["aqi-type"]=="P2"){$aqiweather["aqi-type"]="PM 2.5";}
if ($aqiweather["aqi-type-1"]=="P2"){$aqiweather["aqi-type-1"]="PM 2.5";}
if ($aqiweather["aqi-type-1"]=="P1"){$aqiweather["aqi-type-1"]="PM 10";}
$aqiweather["aqindex"]= number_format(pm25_to_aqi($aqiweather["aqi25"]), 1);
//$aqiweather["aqi10"]= number_format(pm25_to_aqi($aqiweather["aqi10"]), 1);
?>

<div class="sunblock">
<div class="indoordesc5">Air Quality</div>
<div class="button button-dial-small">      
<div class="button-dial-top-small"></div>
<div class="button-dial-label-small">          
<?php 
if ($aqiweather["aqindex"]>=300){ echo "<purple>".number_format($aqiweather["aqindex"],1)."</purple>";}   
else if ($aqiweather["aqindex"]>=200){ echo "<deepred>".number_format($aqiweather["aqindex"],1)."</deepred>";}  
else if ($aqiweather["aqindex"]>=150){ echo "<red>".number_format($aqiweather["aqindex"],1)."</red>";}  
else if ($aqiweather["aqindex"]>=100){ echo "<orange>".number_format($aqiweather["aqindex"],1)."</orange>";}  
else if ($aqiweather["aqindex"]>=50){ echo "<yellow>".number_format($aqiweather["aqindex"],1)."</yellow>";}   
else if ($aqiweather["aqindex"]>=0){ echo "<green>".number_format($aqiweather["aqindex"],1)."</green>";}  
?>  

<?php //AQI
echo "<indoorpm2 style='margin-left:-3px'>AQI</indoorpm2>";?>
</div>

<div class="indoortempa-mod2aqi" > 
<valuetextheadingindoor>
<?php // weather34 simple css indoor temp scale 
if ($aqiweather["aqindex"]>=300 ){echo "0 50 100 150 200 250 <purple>".number_format($aqiweather["aqindex"],1)."</purple>+ ";}
else if ($aqiweather["aqindex"]>=250 ){echo "0 50 100 150 200 <deepred>".number_format($aqiweather["aqindex"],1)."</deepred> 300+ ";}
else if ($aqiweather["aqindex"]>=200 ){echo "0 50 100 150 <red>".number_format($aqiweather["aqindex"],1)."</red> 250 300+ ";}
else if ($aqiweather["aqindex"]>=150 ){echo "0 50 100 <red>".number_format($aqiweather["aqindex"],1)."</red> 150 200 250 300+ ";}
else if ($aqiweather["aqindex"]>=100){echo "0 50 <orange>".number_format($aqiweather["aqindex"],1)."</orange> 150 200 250 300+ ";}
else if ($aqiweather["aqindex"]>=50 ){echo "0 <yellow>".number_format($aqiweather["aqindex"],1)."</yellow> 100 150 200 250 300+ ";}
else if ($aqiweather["aqindex"]>=0 ){echo "<green>".number_format($aqiweather["aqindex"],1)."</green> 50 100 150 200 250 300+ ";}

?>
</valuetextheadingindoor>
<div class=sunratebar>
<div class="weather34sunratebar" 
style="width:
<?php echo $aqiweather["aqindex"]*0.30;?>px;
background:
<?php 
if ($aqiweather["aqindex"] >=300 ){echo '#8680bc';}
elseif ($aqiweather["aqindex"] >=200 ){echo '#d35f50';}
elseif ($aqiweather["aqindex"] >=150 ){echo '#d35f50';}
elseif ($aqiweather["aqindex"] >=100 ){echo '#d87040';} 
elseif ($aqiweather["aqindex"]>50){echo '#e6a241';}
elseif ($aqiweather["aqindex"]>0 ){echo '#9bbc2f';}
?>;"> 
</div></div></div>
<div class="indoortempa-mod3aqi" >  

<?php 
//air description
echo '';
if ($aqiweather["aqindex"] >=300){echo "Hazordous &nbsp;".$aqalert;}
else if ($aqiweather["aqindex"] >=250){echo "Very Unhealthy &nbsp;".$aqalertsmall;}
else if ($aqiweather["aqindex"] >=200){echo "Very Unhealthy &nbsp;".$aqalertsmall;}
else if ($aqiweather["aqindex"] >=150){echo "Unhealthy &nbsp;".$aqalertsmall;}
else if ($aqiweather["aqindex"] >=100){echo "Unhealthy For Some";}
else if ($aqiweather["aqindex"] >=50){echo "Moderate Risk";}
else if ($aqiweather["aqindex"] >0){echo "Good No Risk";}

?></div>
<div class=aqiid-brand><a href='weather34-aqi-info-luftdaten.php' data-lity data-title="Luftdaten Air Quality"><?php echo  $aqilinks?>&nbsp; Luftdaten</a></div></div>
</div>