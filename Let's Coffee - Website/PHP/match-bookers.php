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

$sqlquery = "SELECT * FROM bookers";

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
  if ( $arrayTest[$i]['Central_Europe']==$arrayTest[$j]['Central_Europe'] && $arrayTest[$i]['Central_Europe'] == 1 )
    {

      $counter=$counter+1;
    }
 if ( $arrayTest[$i]['UK']==$arrayTest[$j]['UK'] && $arrayTest[$i]['UK'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['USA']==$arrayTest[$j]['USA'] && $arrayTest[$i]['USA'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['RO']==$arrayTest[$j]['RO'] && $arrayTest[$i]['RO'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Nordic_Countries']==$arrayTest[$j]['Nordic_Countries'] && $arrayTest[$i]['Nordic_Countries'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Asia']==$arrayTest[$j]['Asia'] && $arrayTest[$i]['Asia'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Action']==$arrayTest[$j]['Action'] && $arrayTest[$i]['Action'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Drama']==$arrayTest[$j]['Drama'] && $arrayTest[$i]['Drama'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Love']==$arrayTest[$j]['Love'] && $arrayTest[$i]['Love'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Comedy']==$arrayTest[$j]['Comedy'] && $arrayTest[$i]['Comedy'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['SF']==$arrayTest[$j]['SF'] && $arrayTest[$i]['SF'] == 1 )
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
