<!DOCTYPE html>
<html>
  <head>
    <title>Play it</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #d4d4d4;">
<center>
        <div class="page-header">
            <h1>Play it on every device with curl!</h1>
        </div>
<pre>
alias yeah="curl -u technik:nerfgun http://tsb.nerdswords.de/api.php?playsound=bam-lee-bam.mp3"
</pre>
</center>
        <div id="results">
<?php
$sounddir = './audio';
$files  = scandir($sounddir);
//print_r($files);
echo "<h4>Soundlist</h4>";
$soundsbegin=2;
$soundspertable=10;
for($i=0;$i < sizeof($files);$i++)
{
	$j=$i+$soundsbegin;
	if ($i % $soundspertable == 0)
	{
//			echo '"<div class="btn-group-vertical">';
	}
//			echo '<button type="button" class="btn btn-primary">';
			echo '<a href="api.php?playsound=';
			echo  $files[$j];
			echo '">';
			echo  $files[$j];
			echo '</a>';
			echo '<br>';
//			echo '</button>';
	if ($i % $soundspertable == $soundspertable - 1)
	{
//		echo "</div>";
	}
}
?>
        </div>
  </body>
</html>
