<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<?php require 'al-partials/al_navbar.php';?>

</head>
<body>

	<div class="container">
    <h1>Events</h1>
    <hr>
    
    <!-- Display upcoming events -->
    <div class="card">
      <div class="card-header bg-success text-white ">
        Upcoming Events
      </div>
      <div class="card-body">
        <?php

        require 'al-partials/db_conn.php';

        $sql = "SELECT * FROM event";
        $events = mysqli_query($conn, $sql);

        date_default_timezone_set('Asia/Kolkata');
        // Fetch events from the database ordered by date
        // Example PHP code:
        // $events = []; // Assuming you have fetched events from the database
        $currentDate = date('Y-m-d');
        // echo $currentDate;
        foreach ($events as $event) {
          if ($event['event_date'] >= $currentDate) {

//          $event['title']="Notice title one";
//         $event['date']="20-03-2024";
//          $event['content']="I've modified the loop to check if the event date is greater than or equal to the current date for upcoming events, and less than the current date for passed events.
// Events are displayed accordingly in the respective sections.";
//         $event['dept']="Computer Department";

            echo '<div class="card mb-3">';
            echo '<div class="card-body">';

            echo '<h3 class="card-title" style="border-bottom:1px solid red">' . $event['title'] . '</h3>';
            echo '<h6 class="card-title">' . $event['event_date'] . '</h6>'; // Assuming 'date' is a field in your database table
            echo '<p class="card-text">' . $event['description'] . '</p>'; // Assuming 'content' is a field in your database table

             echo '<p class="card-footer">' . $event['department'] . '</p>'; 
            echo '</div>';
            echo '</div>';
          }
        }

        ?>
      </div>
    </div>
    
    <!-- Display passed events -->
    <div class="card mt-5">
      <div class="card-header bg-secondary text-white">
        Passed Events
      </div>
      <div class="card-body">

        <?php
//         $event['date']="2024-03-07";
//          $event['content']="I've modified the loop to check if the event date is greater than or equal to the current date for upcoming events, and less than the current date for passed events.
// Events are displayed accordingly in the respective sections.";
//           $event['dept']="Computer Department";
// Define the threshold date (15 days ago)
// $thresholdDate = date('Y-m-d', strtotime('-15 days'));
	
	// echo $thresholdDate ;
foreach ($events as $event) {

	// echo $eventItem;
	$thresholdDate = date('Y-m-d', strtotime('-15 days', strtotime($currentDate)));
    // Compare the event date with the threshold date
    if ($event['event_date'] < $currentDate && $event['event_date'] >= $thresholdDate) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
 
        echo '<h3 class="card-title" style="border-bottom:1px solid red">' . $event['title'] . '</h3>';
        echo '<h6 class="card-title">' . $event['event_date'] . '</h6>'; // Assuming 'date' is a field in your database table
        echo '<p class="card-text">' . $event['description'] . '</p>'; // Assuming 'content' is a field in your database table
        echo '<p class="card-footer">' . $event['department'] . '</p>'; 
            echo '</div>';
        echo '</div>';
        echo '</div>';
   }
 }

   mysqli_close($conn);
       
        ?>
      </div>
    </div>
  </div>

	
<!-- $sql = "SELECT * FROM notice";
$result = mysqli_query($conn, $sql);

// Define the current date
$currentDate = date('Y-m-d');

// Define the threshold date (15 days ago)
$thresholdDate = date('Y-m-d', strtotime('+15 days'));

while ($event = mysqli_fetch_assoc($result)) {
    // Compare the event date with the current date and the threshold date
    if ($event['date'] >= $currentDate && $event['date'] < $thresholdDate) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h3 class="card-title" style="color:red">' . $event['title'] . '</h3>';
        echo '<h5 class="card-title">' . $event['date'] . '</h5>'; // Assuming 'date' is a field in your database table
        echo '<p class="card-text">' . $event['content'] . '</p>'; // Assuming 'content' is a field in your database table
        echo '</div>';
        echo '</div>';
    }
}

 -->

  
  


</body>
</html>


