<?php include('livedata.php');
$numberformat=1;
if ($weather["wind_units"]=='kts'){$numberformat=0;}
?>
<div class="modulecaption2" >Wind <?php if($meteobridgeapi[6]>=11.11){echo "Gust";}?> Speed</div>

<div class="maxwindgauge">
<?php  //max Today
echo $max1." Max Speed ";
if($meteobridgeapi[32]>=16.66){echo "<red>" .number_format($weather["wind_gust_speed_max"],$numberformat)."</red>&nbsp;<smalltempunit2> ".$weather["wind_units"];}
else if($meteobridgeapi[32]>=12.5){echo "<orange>" .number_format($weather["wind_gust_speed_max"],$numberformat)."</orange>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($meteobridgeapi[32]>=2.77){echo "<yellow>" .number_format($weather["wind_gust_speed_max"],$numberformat)."</yellow>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($meteobridgeapi[32]>=1.3){echo "<green>" .number_format($weather["wind_gust_speed_max"],$numberformat)."</green>&nbsp;<smalltempunit2>".$weather["wind_units"];}
else if($meteobridgeapi[32]>=0){echo "<blue>" .number_format($weather["wind_gust_speed_max"],$numberformat)."</blue>&nbsp;<smalltempunit2>".$weather["wind_units"];}
echo "</smalltempunit2>";echo "<span style='position:relative;top:1px'> ".$maxclock." </span>"; echo $weather["winddmaxtime"];
?> </div>

<div class="maxbftgauge">
<?php  //Wind Run
echo $weather34_windrun_icon." Wind Run ";
if ($distanceunit=='km'){echo '&nbsp;<deepblue>'.number_format($weather["windrun341"]*1.60934, 1).'';echo '</deepblue><smalltempunit2>&nbsp;km</smalltempunit2>';}
if ($distanceunit=='mi'){echo '&nbsp;<deepblue>'.number_format($weather["windrun341"], 1).'';echo '</deepblue><smalltempunit2>&nbsp;mi</smalltempunit2>';}?>
</div>

<div class="button button-dial">                
<div class="button-dial-top"></div>
<realfeel>
<?php  //max last 10 mins
if ( $weather['wind_speed_bft']>=12){echo "Hurricane";echo $heatindexalert8;}
else if ($weather['wind_speed_bft']>=11){echo "Violent Storm";echo $heatindexalert8;}
else if ($weather['wind_speed_bft']>=10){echo "Storm";echo $heatindexalert8;}
else if ($weather['wind_speed_bft']>=9){echo "Strong Gale";echo $heatindexalert8;}
else if ($weather['wind_speed_bft']>=8){echo "Gale Force";echo $heatindexalert8;}
else if ($weather['wind_speed_bft']>=7){echo "Near Gale ";echo $heatindexalert8;}
else if ($weather['wind_speed_bft']>=6){echo "Strong Breeze";}
else if ($weather['wind_speed_bft']>=5){echo "Fresh Breeze";}
else if ($weather['wind_speed_bft']>=4){echo "Moderate Breeze";}
else if ($weather['wind_speed_bft']>=3){echo "Gentle Breeze";}
else if ($weather['wind_speed_bft']>=1){echo "Light Breeze";}
else if ($weather['wind_speed_bft']>=0){echo "Calm ";}   
?>
</realfeel>
<div class="button-dial-label">          
<?php            
if($meteobridgeapi[6]>=16.66){ echo "<icon-26-30>".number_format($weather["wind_gust_speed"],$numberformat)."</icon-26-30>";}      
else if($meteobridgeapi[6]>=12.5){ echo "<icon-21-25>".number_format($weather["wind_gust_speed"],$numberformat)."</icon-21-25>";}  
else if($meteobridgeapi[6]>=2.77){ echo "<icon-11-15>".number_format($weather["wind_gust_speed"],$numberformat)."</icon-11-15>";}
else if($meteobridgeapi[6]>=1.3){ echo "<icon-6-10>".number_format($weather["wind_gust_speed"],$numberformat)."</icon-6-10>";}
else if($meteobridgeapi[6]>=0){ echo "<icon-0-5>".number_format($weather["wind_gust_speed"],$numberformat)."</icon-0-5>";}           
 ?>
</div></div></div>

<?php //units
echo "<windunitindicator>";echo $weather["wind_units"];echo "</windunitindicator>";?>
<?php //actual word
echo "<windindicator>Actual</windindicator>";?>
</div></div></div></div></div>

<div class="windgauge">
<div class="second24hourguage">
  <?php echo "<solarheading style='margin-left:-32px'>Gusting</solarheading>";?>
<div class="button button-dialrain">               
 <div class="button-dial-toprain"></div>
<div class="button-dial-label"> 
<?php echo "<uvreadings style='opacity:0.8;background:";
if ($weather['wind_speed_bft']>=7 ){echo 'var(--red)';}
elseif ($weather['wind_speed_bft']>=5 ){echo 'var(--orange)';}
elseif ($weather['wind_speed_bft']>=3 ){echo 'var(--yellow)';}
elseif ($weather['wind_speed_bft']>=2 ){echo 'var(--green)';}
elseif ($weather['wind_speed_bft']>=0 ){echo 'var(--blue)';}
echo "'>";
echo "<uvopacity>".number_format($weather["wind_gust_speed"]*1.25,$numberformat)." <uvunits>".$weather["wind_units"]."</uvunits></uvopacity></uvreadings";
?>  
</div></div></div>
<div class="weather34i-rairate-bar2">
<div id="raincontainer2">
<div id="weather34rainbeaker2">
  <?php //relative 24 hour 50mm/2in scale
  if($weather["wind_units"]=='km/h'){
  echo "<volumew>80kmh <br>70 <br>60 <br>50 <br>40 <br>30 <br>20<br>10 </volumew>";}

  if($weather["wind_units"]=='mph'){
  echo "<volumew>50mph <br>43 <br>37 <br>31 <br>24 <br>18 <br>12<br>6</volumew>";}

  if($weather["wind_units"]=='kts'){
    echo "<volumew>43kts <br>37 <br>32 <br>27 <br>21 <br>15 <br>10<br>5</volumew>";}

  if($weather["wind_units"]=='m/s'){
      echo "<volumew>22ms <br>19 <br>37 <br>16 <br>10 <br>8 <br>5<br>2</volumew>";}
  ?>
<div id="weather34rainwater2" style="height:<?php 
if ($meteobridgeapi[6]>=5.5){echo $meteobridgeapi[6]*2.85+1;}
else echo $meteobridgeapi[6]*2.7;?>pt;opacity:0.7;background:
<?php //solar color
if ($weather['wind_speed_bft']>=7 ){echo 'var(--red)';}
elseif ($weather['wind_speed_bft']>=5 ){echo 'var(--orange)';}
elseif ($weather['wind_speed_bft']>=3 ){echo 'var(--yellow)';}
elseif ($weather['wind_speed_bft']>=2 ){echo 'var(--green)';}
elseif ($weather['wind_speed_bft']>=0 ){echo 'var(--blue)';}?>">  

</div></div></div></div></div></div>

<div class="heatcirclerain1">
<div class="rainrateextra2" > 
<valuetextheading5>
<?php //  weather34 simple css wind speed scale 
$weather['wind_gust_speed']=number_format($weather['wind_gust_speed'],$numberformat);
if ($weather["wind_units"]=="km/h"){
if ($meteobridgeapi[6]>=16.66){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;55&nbsp;<icon-31-35>".$weather['wind_gust_speed']."+</icon-31-35>&nbsp";}
else if ($meteobridgeapi[6]>=13.88){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;<icon-26-30>".$weather['wind_gust_speed']."</icon-26-30>&nbsp;60+&nbsp";}
else if ($meteobridgeapi[6]>=12.5){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;<icon-21-25>".$weather['wind_gust_speed']."</icon-21-25>&nbsp;50&nbsp;60+&nbsp";}
else if ($meteobridgeapi[6]>=11.11){echo "0&nbsp;10&nbsp;20&nbsp;30&nbsp;<icon-11-15>".$weather['wind_gust_speed']."</icon-11-15>&nbsp;50&nbsp;60+&nbsp";}
else if ($meteobridgeapi[6]>=8.33){echo "0&nbsp;10&nbsp;20&nbsp;<icon-11-15>".$weather['wind_gust_speed']."</icon-11-15>&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
else if ($meteobridgeapi[6]>=5.5){echo "0&nbsp;10&nbsp;<icon-11-15>".$weather['wind_gust_speed']."</icon-11-15>&nbsp;30&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
else if ($meteobridgeapi[6]>=2.77){echo "0&nbsp;<icon-11-15>".$weather['wind_gust_speed']."</icon-11-15>&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;60+&nbsp";}
else if ($meteobridgeapi[6]>=1.3){echo " 0&nbsp;<icon-6-10>".$weather['wind_gust_speed']."</icon-6-10>&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;60+";}
else if ($meteobridgeapi[6]>=0){echo "<icon-0-5>".$weather['wind_gust_speed']."</icon-0-5>&nbsp;5&nbsp;10&nbsp;20&nbsp;30&nbsp;40&nbsp;50&nbsp;60+";}}
//mph
if ($weather["wind_units"]=="mph"){
if ($meteobridgeapi[6]>=16.66){echo "0&nbsp;12&nbsp;18&nbsp;24&nbsp;27&nbsp;31&nbsp;37&nbsp;<icon-31-35>".$weather['wind_gust_speed']."+</icon-31-35>&nbsp";}
else if ($meteobridgeapi[6]>=13.88){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;37&nbsp;<icon-21-25>".$weather['wind_gust_speed']."</icon-26-30>&nbsp;37&nbsp40+";}
else if ($meteobridgeapi[6]>=12.5){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;<icon-21-25>".$weather['wind_gust_speed']."</icon-21-25>&nbsp;31&nbsp;37+&nbsp";}
else if ($meteobridgeapi[6]>=11.11){echo "0&nbsp;6&nbsp;12&nbsp;18&nbsp;<icon-11-25>".$weather['wind_gust_speed']."</icon-11-25>&nbsp;27&nbsp;31&nbsp37+";}
else if ($meteobridgeapi[6]>=8.33){echo "0&nbsp;4&nbsp;6&nbsp;<icon-11-15>".$weather['wind_gust_speed']."</icon-11-15>&nbsp;24&nbsp;27&nbsp;31&nbsp37+";}
else if ($meteobridgeapi[6]>=5.5){echo "0&nbsp;4&nbsp;<icon-11-15>".$weather['wind_gust_speed']."</icon-11-15>&nbsp;18&nbsp;24&nbsp;27&nbsp;31&nbsp37+";}
else if ($meteobridgeapi[6]>=2.77){echo "0&nbsp;<icon-11-15>".$weather['wind_gust_speed']."</icon-11-15>&nbsp;15&nbsp;18&nbsp;24&nbsp;37&nbsp;31&nbsp37+";}
else if ($meteobridgeapi[6]>=1.3){echo "0&nbsp;<icon-6-10>".$weather['wind_gust_speed']."</icon-6-10>&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;37+&nbsp";}
else if ($meteobridgeapi[6]>=0){echo "<icon-0-5>".$weather['wind_gust_speed']."</icon-0-5>&nbsp;4&nbsp;6&nbsp;12&nbsp;18&nbsp;24&nbsp;31&nbsp;37+&nbsp";}
}
//kts          
if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=26.99){echo "0&nbsp;5&nbsp;12&nbsp;16&nbsp;20&nbsp;26&nbsp;32&nbsp;&nbsp;<red>".number_format($weather["wind_gust_speed"],0)."</red>&nbsp&nbsp&nbsp";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=24.29){echo "0&nbsp;5&nbsp;12&nbsp;16&nbsp;20&nbsp;26&nbsp;<red>".number_format($weather["wind_gust_speed"],0)."</red>&nbsp;50+&nbsp;&nbsp";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=21.59){echo "0&nbsp;5&nbsp;12&nbsp;16&nbsp;20&nbsp;<orange>".number_format($weather["wind_gust_speed"],0)."</orange>&nbsp;32&nbsp;50+&nbsp;&nbsp";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=16.19){echo "0&nbsp;5&nbsp;12&nbsp;16&nbsp;<orange>".number_format($weather["wind_gust_speed"],0)."</orange>&nbsp;26&nbsp;32&nbsp;50+&nbsp;&nbsp";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=10.79){echo "0&nbsp;5&nbsp;12&nbsp;<yellow>".number_format($weather["wind_gust_speed"],0)."</yellow>&nbsp;20&nbsp;26&nbsp;32&nbsp;50+&nbsp;&nbsp";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=5.39){echo "0&nbsp;5&nbsp;<yellow>".number_format($weather["wind_gust_speed"],0)."</yellow>&nbsp;16&nbsp;20&nbsp;26&nbsp;32&nbsp;50+&nbsp;&nbsp";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=2.69){echo "0&nbsp;<green>".number_format($weather["wind_gust_speed"],0)."</green>&nbsp;12&nbsp;16&nbsp;20&nbsp;26&nbsp;32&nbsp;50+&nbsp;&nbsp";}
else if ($weather["wind_units"]=="kts" && $weather['wind_gust_speed']>=0){echo "<blue>".number_format($weather["wind_gust_speed"],0)."</blue>&nbsp;5&nbsp;12&nbsp;16&nbsp;20&nbsp;26&nbsp;32&nbsp;50+&nbsp;&nbsp";}
//ms
if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=16.66){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;<red>".$weather['wind_gust_speed']."</red>&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=13.88){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;<red>14</red>&nbsp;&nbsp;".$weather['wind_gust_speed']."+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=12.49){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;<orange>".$weather['wind_gust_speed']."</orange>&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=8){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;6&nbsp;&nbsp;<yellow>".$weather['wind_gust_speed']."</yellow>&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=6){echo  "0&nbsp;&nbsp;2&nbsp;&nbsp;<yellow>".$weather['wind_gust_speed']."</yellow>&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=2.77){echo  "0&nbsp;&nbsp;<yellow>".$weather['wind_gust_speed']."</yellow>&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=1.38){echo  "<green>".$weather['wind_gust_speed']."</green>&nbsp;&nbsp;2&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}
else if ($weather["wind_units"]=="m/s" && $weather['wind_gust_speed']>=0){echo  "<blue>".$weather['wind_gust_speed']."</blue>&nbsp;&nbsp;2&nbsp;&nbsp;6&nbsp;&nbsp;8&nbsp;&nbsp;11&nbsp;&nbsp;14&nbsp;&nbsp;16+&nbsp;&nbsp;&nbsp;";}







echo "<smalltempunit2>&nbsp;".$weather["wind_units"];?></smalltempunit2>
</valuetextheading5>
<div class=sunratebar>
<div class="weather34sunratebar" 
style="width:<?php echo ($meteobridgeapi[6])*5;?>px;
background:<?php 
if ($meteobridgeapi[6]>=16.66 ){echo '#cc504c';}
elseif ($meteobridgeapi[6]>=12.5 ){echo '#d87040';}
elseif ($meteobridgeapi[6]>=2.77 ){echo '#e6a241';}
elseif ($meteobridgeapi[6]>=1.3 ){echo '#9bbc2f';}
elseif ($meteobridgeapi[6]>=0) {echo '#00adbd';}?>
;">
</div></div></div>

<div class=extrainfo><a href='wind-almanac2.php' data-lity data-title="Almanac Data"><?php echo  $aqilinks?>&nbsp;Extra Info</a></div></div>


<div class="weather-tempicon-identity" ><?php 
//icon
if($meteobridgeapi[6]>=16.66){ echo "<icon-26-30>".$weather34_wind_icon."</icon-26-30>";}      
else if($meteobridgeapi[6]>=12.5){ echo "<icon-21-25>".$weather34_wind_icon."</icon-21-25>";}          
else if($meteobridgeapi[6]>=2.77){ echo "<icon-11-15>".$weather34_wind_icon."</icon-11-15>";}     
else if($meteobridgeapi[6]>=1.3){ echo "<icon-6-10>".$weather34_wind_icon."</icon-6-10>";}
else if($meteobridgeapi[6]>=0){ echo "<icon-0-5>".$weather34_wind_icon."</icon-0-5>";}
?></div>