<?php
include 'dbconnect.php';
#Json-API
header("Content-type: application/json");

#Error-Function
function error ($arg) {
  if($arg == true)
     {
     }
  else
     {
        echo json_encode("error");
     }
}

#Play sound -> Queue it into the database
if (isset($_GET['playsound'])) {
	$sound = $_GET['playsound'];   
	$sounddir = './audio';
	$files  = scandir($sounddir);
	$find = array_search($sound, $files);
	if ($find > 1)
	{	
	  $query = "INSERT INTO queue(sound,created) VALUES ('$sound',now())";
	  $eintragen = mysql_query($query);
	  error($eintragen);
	  echo "playedsound";
	}



  $toold = "delete from queue where time_to_sec(timediff(now(),created)) > 2000";
  $killthemnow = mysql_query($toold);
  error($killthemnow);
}


#Get Sounds from queue, delete them and check if to old to play
if (isset($_GET['getsounds'])) {
    $toold = "delete from queue where time_to_sec(timediff(now(),created)) > 2000";
    $killthemnow = mysql_query($toold);
    error($killthemnow);

    $query = "select * from queue";
    $result = mysql_query($query);
    error($result);

    $queue_array = array();
    #Json-API
    while ($row = mysql_fetch_assoc($result)) {
        $queue_array[] = $row;
    }
    print json_encode($queue_array);

    #Delete, because it was played :)
    $toold = "delete from queue";
    $killthemnow = mysql_query($toold);
    error($killthemnow);
}
?>
