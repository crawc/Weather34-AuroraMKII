<?php include('livedata.php');?>
<link href="console-dark.css?version=<?php echo filemtime('../console/console-dark.css') ?>" rel="stylesheet prefetch">
<theword>UVINDEX | Solar Radiation</theword>
<div class="almanacouterboxuv">
<div class="almanacchartxuv" >
<iframe  class="charttempmodule" src="weather34charts/todayuvmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="200px"></iframe>  
</div>

<div class="almanacchartxsol">
<iframe  class="charttempmodule" src="weather34charts/todaysolarmodulechart2.php" frameborder="0" scrolling="no" width="320px" height="200px"></iframe>  
</div>



<div class="almanacxuv"><div class="almanac-content">
<?php  //month max
echo "<valuetextheading1>".date('F')." Max <deepblue>".$weather["uvmmaxtime"]."</deepblue></valuetextheading1><br>";   
echo "<div class=almanacareas>".$weather["uvmmax"]	."<smalltempunit2>UVI";
?><smalltempunit2></div></div>

<div class="almanac2xuv"><div class="almanac-content">
<?php  //max year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["uvymaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=almanacareas>".$weather["uvymax"]."<smalltempunit2>UVI";
 ?></smalltempunit2></div></div>

<div class="almanac3xuv"><div class="almanac-content">
<?php  //month min
echo "<valuetextheading1>Yesterday Max <deepblue>".$weather["uvydmaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=almanacareas>".$weather["uvydmax"]."<smalltempunit2>UVI";
?><smalltempunit2></div></div>

<div class="almanac4xuv"><div class="almanac-content">
<?php  //min Year
echo "<valuetextheading1>Record Max <deepblue> </deepblue></valuetextheading1><br>";
echo "<div class=almanacareas>N/A<smalltempunit2>UVI";
?><smalltempunit2></div></div>


<br><br>
<div class="almanacxsol"><div class="almanac-content">
<?php  //month max
echo "<valuetextheading1>".date('F')." Max <deepblue>".$weather["solarmmaxtime"]."</deepblue></valuetextheading1><br>";   
echo "<div class=almanacareas>".$weather["solarmmax"]	."<smalltempunit2>Wm/2";
?><smalltempunit2></div></div>

<div class="almanac2xsol"><div class="almanac-content">
<?php  //max year
echo "<valuetextheading1>".date('Y')." Max <deepblue>".$weather["solarymaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=almanacareas>".$weather["solarymax"]."<smalltempunit2>Wm/2";
 ?></smalltempunit2></div></div></div>

<div class="almanac3xsol"><div class="almanac-content">
<?php  //yesterday
echo "<valuetextheading1>Yesterday Max <deepblue>".$weather["solarydmaxtime"]."</deepblue></valuetextheading1><br>";
echo "<div class=almanacareas>".$weather["solarydmax"]."<smalltempunit2>Wm/2";
?><smalltempunit2></div></div>

<div class="almanac4xsol"><div class="almanac-content"> 
<?php  //All time
echo "<valuetextheading1>Record Max <deepblue> </deepblue></valuetextheading1><br>";
echo "<div class=almanacareas>N/A<smalltempunit2>Wm/2";
?><smalltempunit2></div></div>
</div>



