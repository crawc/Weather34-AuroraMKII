  
 <?php include('livedata.php');?>
 <div class="modulecaptionchart">Barometric Pressure&nbsp;<blue1>
 <?php 
 if ($weather["temp_units"]=='C' && $position8=='barometer-modmmHG.php') {echo 'mmHG';}
 else  echo $weather["barometer_units"]; 
 if ($weather["temp_units"]=='C' && $position8=='barometer-modmmHG.php') {$conv=0.750062;}
 else  $conv=1;
 ?></blue1></div> 
 <iframe  class="charttempmodule" src="weather34charts/monthbarometermodulechart2.php" frameborder="0" scrolling="no" width="320px" height="250px"></iframe>  
 