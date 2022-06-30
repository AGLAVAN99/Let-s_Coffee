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
        $online = 0;

          if(!empty($_POST['onoff'])) {

                  foreach($_POST['onoff'] as $value){
                       if($value == "online") {

                         $online=1;
                       }
                  }
              }

         $offline = 0;

              if(!empty($_POST['onoff'])) {

                    foreach($_POST['onoff'] as $value){
                       if($value == "offline") {

                         $offline=1;
                       }
                  }
              }
         $shooter = 0;

            if(!empty($_POST['game_genre'])) {

                     foreach($_POST['game_genre'] as $value){
                        if($value == "shooter") {

                          $shooter=1;
                      }
                  }
              }
         $multiplayer = 0;

            if(!empty($_POST['game_genre'])) {

                    foreach($_POST['game_genre'] as $value){
                       if($value == "multiplayer") {

                        $multiplayer=1;
                      }
                  }
              }
          $fantasy = 0;

            if(!empty($_POST['game_genre'])) {

                    foreach($_POST['game_genre'] as $value){
                       if($value == "fantasy") {

                        $fantasy=1;
                      }
                  }
              }

          $rtm = 0;

              if(!empty($_POST['game_genre'])) {

                     foreach($_POST['game_genre'] as $value){
                           if($value == "rtm") {

                             $rtm=1;
                           }
                      }
                  }
          $mmorp = 0;

            if(!empty($_POST['game_genre'])) {

                  foreach($_POST['game_genre'] as $value){
                       if($value == "mmorp") {

                           $mmorp=1;
                         }
                     }
                  }
          $survival = 0;

             if(!empty($_POST['game_genre'])) {

                   foreach($_POST['game_genre'] as $value){
                       if($value == "survival") {

                           $survival=1;
                       }
                   }
               }

          $horror = 0;

             if(!empty($_POST['game_genre'])) {

                    foreach($_POST['game_genre'] as $value){
                       if($value == "horror") {

                           $horror=1;
                       }
                   }
               }
          $cards = 0;

              if(!empty($_POST['board_game'])) {

                  foreach($_POST['board_game'] as $value){
                    if($value == "cards") {

                          $cards=1;
                         }
                      }
                  }
            $activity = 0;

                if(!empty($_POST['board_game'])) {

                      foreach($_POST['board_game'] as $value){
                          if($value == "activity") {

                              $activity=1;
                           }
                       }
                   }

          $dixit = 0;

              if(!empty($_POST['board_game'])) {

                  foreach($_POST['board_game'] as $value){
                    if($value == "dixit") {

                        $dixit=1;
                         }
                     }
                  }
            $chess = 0;

              if(!empty($_POST['board_game'])) {

                  foreach($_POST['board_game'] as $value){
                    if($value == "chess") {

                        $chess=1;
                       }
                     }
                 }
           $monopoly = 0;

              if(!empty($_POST['board_game'])) {

                  foreach($_POST['board_game'] as $value){
                    if($value == "monopoly") {

                        $monopoly=1;
                      }
                   }
               }
            $fun = 0;

              if(!empty($_POST['qualities_stranger2'])) {

                  foreach($_POST['qualities_stranger2'] as $value){
                    if($value == "fun") {

                        $fun=1;
                    }
                  }
               }
            $understanding = 0;

              if(!empty($_POST['qualities_stranger2'])) {

                  foreach($_POST['qualities_stranger2'] as $value){
                    if($value == "understanding") {

                        $understanding=1;
                    }
                 }
             }
            $sociable = 0;

              if(!empty($_POST['qualities_stranger2'])) {

                  foreach($_POST['qualities_stranger2'] as $value){
                    if($value == "sociable") {

                        $sociable=1;
                    }
                 }
             }
            $boundaries = 0;

              if(!empty($_POST['qualities_stranger2'])) {

                  foreach($_POST['qualities_stranger2'] as $value){
                    if($value == "boundaries") {

                        $boundaries=1;
                    }
                 }
             }
          $sqlquery = "INSERT INTO gamers (Name, Email, Online, Offline, Shooter, Multiplayer, Fantasy, Real_Time_Strategy, MMORP, Survival, Horror, Cards, Activity, Dixit, Chess, Monopoly, Be_Fun, Be_Understanding, Be_Sociable, Boundaries)
                           VALUES ('". $name ."','". $email ."','". $online ."','". $offline ."','". $shooter ."','". $multiplayer ."','". $fantasy ."','". $rtm ."', '". $mmorp ."','". $survival ."','". $horror ."','". $cards ."','". $activity ."','". $dixit ."','". $chess ."','". $monopoly ."','". $fun ."','". $understanding ."','". $sociable ."','". $boundaries ."')";
          $conn->query($sqlquery);
          echo "Data inserted successfully";
            }
          }

$conn->close();

?>
