<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee";

$conn = new mysqli($servername,
    $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

if (empty($name)||empty($email)) {
echo "Data is empty";  }
else {
        $travelling = 0;

          if(!empty($_POST['hobbies'])) {

                  foreach($_POST['hobbies'] as $value){
                       if($value == "travelling") {

                         $travelling=1;
                       }
                  }
              }

         $arts = 0;

              if(!empty($_POST['hobbies'])) {

                    foreach($_POST['hobbies'] as $value){
                       if($value == "arts") {

                         $arts=1;
                       }
                  }
              }
         $music = 0;

            if(!empty($_POST['hobbies'])) {

                     foreach($_POST['hobbies'] as $value){
                        if($value == "music") {

                          $music=1;
                      }
                  }
              }
         $reading = 0;

            if(!empty($_POST['hobbies'])) {

                    foreach($_POST['hobbies'] as $value){
                       if($value == "reading") {

                        $reading=1;
                      }
                  }
              }
          $writing = 0;

            if(!empty($_POST['hobbies'])) {

                    foreach($_POST['hobbies'] as $value){
                       if($value == "writing") {

                        $writing=1;
                      }
                  }
              }

          $introvert = 0;

              if(!empty($_POST['personality'])) {

                     foreach($_POST['personality'] as $value){
                           if($value == "introvert") {

                             $introvert=1;
                           }
                      }
                  }
          $extrovert = 0;

            if(!empty($_POST['personality'])) {

                  foreach($_POST['personality'] as $value){
                       if($value == "extrovert") {

                           $extrovert=1;
                         }
                     }
                  }
          $fun = 0;

             if(!empty($_POST['qualities'])) {

                   foreach($_POST['qualities'] as $value){
                       if($value == "fun") {

                           $fun=1;
                       }
                   }
               }

          $understanding = 0;

             if(!empty($_POST['qualities'])) {

                    foreach($_POST['qualities'] as $value){
                       if($value == "understanding") {

                           $understanding=1;
                       }
                   }
               }
          $shy = 0;

              if(!empty($_POST['qualities'])) {

                  foreach($_POST['qualities'] as $value){
                    if($value == "shy") {

                          $shy=1;
                         }
                      }
                  }
            $sociable = 0;

                if(!empty($_POST['qualities'])) {

                      foreach($_POST['qualities'] as $value){
                          if($value == "sociable") {

                              $sociable=1;
                           }
                       }
                   }

          $new_people = 0;

              if(!empty($_POST['qualities'])) {

                  foreach($_POST['qualities'] as $value){
                    if($value == "new_people") {

                        $new_people=1;
                         }
                     }
                  }
            $be_fun = 0;

              if(!empty($_POST['qualities_stranger1'])) {

                  foreach($_POST['qualities_stranger1'] as $value){
                    if($value == "be_fun") {

                        $be_fun=1;
                       }
                     }
                 }
           $be_understanding = 0;

              if(!empty($_POST['qualities_stranger1'])) {

                  foreach($_POST['qualities_stranger1'] as $value){
                    if($value == "be_understanding") {

                        $be_understanding=1;
                      }
                   }
               }
            $be_sociable = 0;

              if(!empty($_POST['qualities_stranger1'])) {

                  foreach($_POST['qualities_stranger1'] as $value){
                    if($value == "be_sociable") {

                        $be_sociable=1;
                    }
                  }
               }
            $boundaries = 0;

              if(!empty($_POST['qualities_stranger1'])) {

                  foreach($_POST['qualities_stranger1'] as $value){
                    if($value == "boundaries") {

                        $boundaries=1;
                    }
                 }
             }

          $sqlquery = "INSERT INTO strangers (Name, Email, Travelling, Arts, Music, Reading, Writing, Introvert, Extrovert, Fun, Understanding, Shy, Sociable, New_People, Be_Fun, Be_Understanding, Be_Sociable, Boundaries)
                           VALUES ('". $name ."','". $email ."','". $travelling ."','". $arts ."','". $music ."','". $reading ."','". $writing ."','". $introvert ."', '". $extrovert ."','". $fun ."','". $understanding ."','". $shy ."','". $sociable ."','". $new_people ."','". $be_fun ."','". $be_understanding ."','". $be_sociable ."','". $boundaries ."')";
          $conn->query($sqlquery);
          echo "Data inserted successfully";
            }
          }

$conn->close();

?>
