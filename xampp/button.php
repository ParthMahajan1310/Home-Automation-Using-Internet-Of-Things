
<html>
<head>
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <link href = "css/bootstrap.min.css" rel ="stylesheet">
  <link href = "css/styles.css rel" = "stylesheet">
</head>
<body>
<div id="head"><em>Appliance Status </em></div>
<style type="text/css">
#head{
  font-size: 100px;
  text-align: center;
  color: white;
  margin: 30px;
    background-image: url('red1.jpg');
    border: 1px solid black;
    opacity: 0.67;
    background-size: cover;
    
}
body{
  background-image: url('img3.jpg');    
  background-size: fill;
  background-size: cover;
  
}
</style>

</body>
</html>
<?php
$c=0;
$file1 = "buttonStatus1.txt";
$handle1 = fopen($file1,'w+');

$file2 = "buttonStatus2.txt";
$handle2 = fopen($file2,'w+');

$file3 = "buttonStatus3.txt";
$handle3 = fopen($file3,'w+');

$file4 = "buttonStatus4.txt";
$handle4 = fopen($file4,'w+');

$file5 = "buttonStatus5.txt";
$handle5 = fopen($file5,'w+');

$a1='OFF';
$a2='OFF';
$a3='OFF';
$a4='OFF';
$a5='OFF';

 $radio1 = $_POST['status1'];
 if($radio1=='ON')
 {
	$c=$c+24;
  $onstring = "ON";
  $a1='ON';
  fwrite($handle1,$onstring);
  fclose($handle1);
  
 }
 else if($radio1=="OFF")
 {
  $offstring = "OFF";
  fwrite($handle1, $offstring);
  fclose($handle1);
  
 }

$radio2 = $_POST['status2'];
 if($radio2=='ON')
 {
	$c=$c+27;
  $onstring = "ON";
  $a2='ON';
  fwrite($handle2,$onstring);
  fclose($handle2);
  
 }
 else if($radio2=="OFF")
 {
  $offstring = "OFF";
  fwrite($handle2, $offstring);
  fclose($handle2);
 }

$radio3 =$_POST['status3'];
 if($radio3=='ON')
 {
  $c=$c+22;
  $onstring = "ON";
  $a3='ON';
  fwrite($handle3,$onstring);
  fclose($handle3);
  
 }
 else if($radio3=="OFF")
 {
  $offstring = "OFF";
  fwrite($handle3, $offstring);
  fclose($handle3);
 }

 $radio4 =$_POST['status4'];
 if($radio4=='ON')
 {
  $c=$c+20;
  $onstring = "ON";
  $a4='ON';
  fwrite($handle4,$onstring);
  fclose($handle4);
  
 }
 else if($radio4=="OFF")
 {
  $offstring = "OFF";
  fwrite($handle4, $offstring);
  fclose($handle4);
 }

 $radio5 =$_POST['status5'];
 if($radio5=='ON')
 {
  $c=$c+12;
  $onstring = "ON";
  $a5='ON';
  fwrite($handle5,$onstring);
  fclose($handle5);
  
 }
 else if($radio5=="OFF")
 {
  $offstring = "OFF";
  fwrite($handle5, $offstring);
  fclose($handle5);
 }


?>
<html>
<head>
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <link href = "css/bootstrap.min.css" rel ="stylesheet">
  <link href = "css/styles.css rel" = "stylesheet">
</head>
<style type="text/css">
  span{
     background-image: url('cir1.jpg');
     background-size: cover;
     background-position: center;
     color: white;
     padding: 5%;
     text-align: center;
     font-size: 90px;
     display: inline-block;
     
  }
  h3{
    font-size: 70px;
    background: #99ccff;
    opacity: 0.6;
    padding: 2%;
    margin-right: 15%;
    display: inline-block;
  }
  #h{
    
     background: #99ccff;
    background-size: cover;
    padding-left: 50px;
    margin-left: 5%;
    border-radius: 25%;
    font-size: 50px;
    text-align: center;
    margin-right: 20%;
    color: black;
    opacity: 0.6;
  }
</style>
<div id='h'>
Red CFL is <?php echo $a1?><br><br>
White CFL is <?php echo $a2?><br><br>
Green CFL is <?php echo $a3?><br><br>
Blue CFL is <?php echo $a4?><br><br>
Music is <?php echo $a4?><br><br>
</div>
<h3 >Net Power Consumption</h3>
<span><?php echo $c?> W/hr</span>
</html>

