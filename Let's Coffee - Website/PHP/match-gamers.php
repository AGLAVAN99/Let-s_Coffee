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

$sqlquery = "SELECT * FROM gamers";

$result=$conn->query($sqlquery);
$arrayTest[] = null;
foreach ( $result as $key=>$row) {

  $arrayTest[$key] = $row;

}
$countermax=0;
$imax = 0;
$jmax[] = null;
$jmax1 = 0;
$countermax1[] = null;
for ($i=0; $i<sizeof($arrayTest)-1; $i++)
{
  for ($j=$i+1; $j<sizeof($arrayTest); $j++)
{
  $counter=0;
  if ( $arrayTest[$i]['Online']==$arrayTest[$j]['Online'] && $arrayTest[$i]['Online'] == 1 )
    {

      $counter=$counter+1;
    }
 if ( $arrayTest[$i]['Offline']==$arrayTest[$j]['Offline'] && $arrayTest[$i]['Offline'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Shooter']==$arrayTest[$j]['Shooter'] && $arrayTest[$i]['Shooter'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Multiplayer']==$arrayTest[$j]['Multiplayer'] && $arrayTest[$i]['Multiplayer'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Fantasy']==$arrayTest[$j]['Fantasy'] && $arrayTest[$i]['Fantasy'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Real_Time_Strategy']==$arrayTest[$j]['Real_Time_Strategy'] && $arrayTest[$i]['Real_Time_Strategy'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['MMORP']==$arrayTest[$j]['MMORP'] && $arrayTest[$i]['MMORP'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Survival']==$arrayTest[$j]['Survival'] && $arrayTest[$i]['Survival'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Horror']==$arrayTest[$j]['Horror'] && $arrayTest[$i]['Horror'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Cards']==$arrayTest[$j]['Cards'] && $arrayTest[$i]['Cards'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Activity']==$arrayTest[$j]['Activity'] && $arrayTest[$i]['Activity'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Dixit']==$arrayTest[$j]['Dixit'] && $arrayTest[$i]['Dixit'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Chess']==$arrayTest[$j]['Chess'] && $arrayTest[$i]['Chess'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Monopoly']==$arrayTest[$j]['Monopoly'] && $arrayTest[$i]['Monopoly'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Be_Fun']==$arrayTest[$j]['Be_Fun'] && $arrayTest[$i]['Be_Fun'] == 1 )
    {
        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Be_Understanding']==$arrayTest[$j]['Be_Understanding'] && $arrayTest[$i]['Be_Understanding'] == 1 )
    {
        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Be_Sociable']==$arrayTest[$j]['Be_Sociable'] && $arrayTest[$i]['Be_Sociable'] == 1  )
    {
        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Boundaries']==$arrayTest[$j]['Boundaries'] && $arrayTest[$i]['Boundaries'] == 1 )
    {
        $counter=$counter+1;
    }
  if($counter >= 3 && $counter >= $countermax )
    {
      $imax=$i;
      $jmax1=$j;
      $countermax=$counter;
    }
  }
  $jmax[$i]=$jmax1;
  $countermax1[$i]=$countermax;
}

for( $i=0; $i<sizeof($arrayTest)-1; $i++)
{
  var_dump($arrayTest[$i]['Name']);
  var_dump($arrayTest[$jmax[$i]]['Name']);
  var_dump($countermax1[$i]);
}
?>
