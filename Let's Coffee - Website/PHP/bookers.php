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
        $ce = 0;

          if(!empty($_POST['onoff'])) {

                  foreach($_POST['authors'] as $value){
                       if($value == "ce") {

                         $ce=1;
                       }
                  }
              }

         $uk = 0;

              if(!empty($_POST['authors'])) {

                    foreach($_POST['authors'] as $value){
                       if($value == "uk") {

                         $uk=1;
                       }
                  }
              }
         $usa = 0;

            if(!empty($_POST['authors'])) {

                     foreach($_POST['authors'] as $value){
                        if($value == "usa") {

                          $usa=1;
                      }
                  }
              }
         $romania = 0;

            if(!empty($_POST['authors'])) {

                    foreach($_POST['authors'] as $value){
                       if($value == "romania") {

                        $romania=1;
                      }
                  }
              }
          $nordic_countries = 0;

            if(!empty($_POST['authors'])) {

                    foreach($_POST['authors'] as $value){
                       if($value == "nordic_countries") {

                        $nordic_countries=1;
                      }
                  }
              }

          $asia = 0;

              if(!empty($_POST['authors'])) {

                     foreach($_POST['game_genre'] as $value){
                           if($value == "asia") {

                             $asia=1;
                           }
                      }
                  }
          $action = 0;

            if(!empty($_POST['book_genre'])) {

                  foreach($_POST['book_genre'] as $value){
                       if($value == "action") {

                           $action=1;
                         }
                     }
                  }
          $drama = 0;

             if(!empty($_POST['book_genre'])) {

                   foreach($_POST['book_genre'] as $value){
                       if($value == "drama") {

                           $drama=1;
                       }
                   }
               }

          $love = 0;

             if(!empty($_POST['book_genre'])) {

                    foreach($_POST['book_genre'] as $value){
                       if($value == "love") {

                           $love=1;
                       }
                   }
               }
          $comedy = 0;

              if(!empty($_POST['book_genre'])) {

                  foreach($_POST['book_genre'] as $value){
                    if($value == "comedy") {

                          $comedy=1;
                         }
                      }
                  }
            $mystery = 0;

                if(!empty($_POST['book_genre'])) {

                      foreach($_POST['book_genre'] as $value){
                          if($value == "mystery") {

                              $mystery=1;
                           }
                       }
                   }

          $sf = 0;

              if(!empty($_POST['book_genre'])) {

                  foreach($_POST['book_genre'] as $value){
                    if($value == "sf") {

                        $sf=1;
                         }
                     }
                  }
            $fun = 0;

              if(!empty($_POST['qualities_stranger3'])) {

                  foreach($_POST['qualities_stranger3'] as $value){
                    if($value == "fun") {

                        $fun=1;
                    }
                  }
               }
            $understanding = 0;

              if(!empty($_POST['qualities_stranger3'])) {

                  foreach($_POST['qualities_stranger3'] as $value){
                    if($value == "understanding") {

                        $understanding=1;
                    }
                 }
             }
            $sociable = 0;

              if(!empty($_POST['qualities_stranger3'])) {

                  foreach($_POST['qualities_stranger3'] as $value){
                    if($value == "sociable") {

                        $sociable=1;
                    }
                 }
             }
            $boundaries = 0;

              if(!empty($_POST['qualities_stranger3'])) {

                  foreach($_POST['qualities_stranger3'] as $value){
                    if($value == "boundaries") {

                        $boundaries=1;
                    }
                 }
             }
          $sqlquery = "INSERT INTO bookers (Name, Email, Central_Europe, UK, USA, RO, Nordic_Countries, Asia, Action, Drama, Love, Comedy, Mystery, SF, Be_Fun, Be_Understanding, Be_Sociable, Boundaries)
                           VALUES ('". $name ."','". $email ."','". $ce ."','". $uk ."','". $usa ."','". $romania ."','". $nordic_countries ."','". $asia ."', '". $action ."','". $drama ."','". $love ."','". $comedy ."','". $mystery ."','". $sf ."','". $fun ."','". $understanding ."','". $sociable ."','". $boundaries ."')";
          $conn->query($sqlquery);
          echo "Data inserted successfully";
            }
          }

$conn->close();

?>
