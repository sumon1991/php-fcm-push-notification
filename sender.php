<?php
function sendFCM() {
  // FCM API Url
  $url = 'https://fcm.googleapis.com/fcm/send';

  // Put your Server Key here
  $apiKey = "ENTER YOUR CLOUD MMSG ID";

  // Compile headers in one variable
  $headers = array (
    'Authorization:key=' . $apiKey,
    'Content-Type:application/json'
  );

  // Add notification content to a variable for easy reference
  $notifData = [
    'title' => "Test Title",
    'body' => "Test notification body",
    // 'image' => "ENTER URL HERE", //Optional
    'click_action' => "activities.NotifHandlerActivity" //Action/Activity - Optional
  ];

  $dataPayload = ['to'=> 'My Name', 
  'points'=>80, 
  'other_data' => 'This is extra payload'
  ];

  // Create the api body
  $apiBody = [
    'notification' => $notifData,
    'data' => $dataPayload, //Optional
    'time_to_live' => 600, // optional - In Seconds
    // 'to' => '/topics/mytargettopic'
    //'registration_ids' = ID ARRAY
    'to' => 'ENTER YOUR DEVICE ID'
  ];

  // Initialize curl with the prepared headers and body
  $ch = curl_init();
  curl_setopt ($ch, CURLOPT_URL, $url);
  curl_setopt ($ch, CURLOPT_POST, true);
  curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt ($ch, CURLOPT_POSTFIELDS, json_encode($apiBody));

  // Execute call and save result
  $result = curl_exec($ch);
  print($result);
  // Close curl after call
  curl_close($ch);

  return $result;
}
sendFCM();

// php sender.php in any terminal or cmd
?>