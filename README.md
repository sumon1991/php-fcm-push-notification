# php-fcm-push-notification

## How to run

**For ubuntu or mac users:** php sender.php
- in your terminal


**For windows users:** php sender.php
- in your command prompt (open run type 'cmd' then enter)


## Result
{"multicast_id":5857395352827311832,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1669062759243811%ccbdb16fccbdb16f"}]}

## To get the cloud message id
- go to the link (https://console.firebase.google.com/)
- create a new project
- Besides Project Overview click on Gear Icon
        - then Project Settings
        - Hit on cloud Messaging
        - Enable Cloud Messaging API (Legacy)
        - (You will get the server key)
 - Copy the key and paste in the sender.php line no '7'
 

## Authors

- [@Sumon Sen](https://www.linkedin.com/in/sumonsenind/)
