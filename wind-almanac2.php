<?php include('livedata.php');?>
<link href="console-dark.css?version=<?php echo filemtime('console-dark.css') ?>" rel="stylesheet prefetch">
<theword>Wind Speed </theword>
<div class="almanacouterboxrain">
<br><br>
<div class="almanacchartx">
<monthchart>Current Day Wind Speed Chart</monthchart>
<iframe  class="charttempmodule" src="weather34charts/todaywindspeedmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="200px"></iframe>  
</div>
<div class="almanacx"><div class="almanac-content">
<?php  //month max
echo "<valuetextheading1>".date('F')." Max <deepblue>".$weather["windmmaxtime"]."</deepblue></valuetextheading1><br>";   
echo "<div class=almanacareas>".$weather["windmmax"]."<smalltempunit2>".$weather["wind_units"];
?><smalltempunit2></div></div>

<div class="almanac2x"><div class="almanac-content">
<?php  //max year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["windymaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=almanacareas>".$weather["windymax"]."<smalltempunit2>".$weather["wind_units"];
?></smalltempunit2></div></div>

<div class="almanac3x"><div class="almanac-content">
<?php  //month min
echo "<valuetextheading1>Yesterday Max <deepblue>".$weather["windydmaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=almanacareas>".$weather["windydmax"]."<smalltempunit2>".$weather["wind_units"];
?><smalltempunit2></div></div>

<div class="almanac4x"><div class="almanac-content">
<?php  //min Year
echo "<valuetextheading1>Record Max <deepblue>".$weather["windamaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=almanacareas>".$weather["windamax"]."<smalltempunit2>".$weather["wind_units"];
?><smalltempunit2></div></div></div>