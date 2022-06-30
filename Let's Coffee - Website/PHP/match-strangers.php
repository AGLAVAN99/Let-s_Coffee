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

$sqlquery = "SELECT * FROM strangers";

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
  if ( $arrayTest[$i]['Travelling']==$arrayTest[$j]['Travelling'] && $arrayTest[$i]['Travelling'] == 1 )
    {

      $counter=$counter+1;
    }
 if ( $arrayTest[$i]['Arts']==$arrayTest[$j]['Arts'] && $arrayTest[$i]['Arts'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Music']==$arrayTest[$j]['Music'] && $arrayTest[$i]['Music'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Reading']==$arrayTest[$j]['Reading'] && $arrayTest[$i]['Reading'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Writing']==$arrayTest[$j]['Writing'] && $arrayTest[$i]['Writing'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Introvert']==$arrayTest[$j]['Introvert'] && $arrayTest[$i]['Introvert'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Extrovert']==$arrayTest[$j]['Extrovert'] && $arrayTest[$i]['Extrovert'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Fun']==$arrayTest[$j]['Fun'] && $arrayTest[$i]['Fun'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Understanding']==$arrayTest[$j]['Understanding'] && $arrayTest[$i]['Understanding'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Shy']==$arrayTest[$j]['Shy'] && $arrayTest[$i]['Shy'] == 1)
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['Sociable']==$arrayTest[$j]['Sociable'] && $arrayTest[$i]['Sociable'] == 1 )
    {

        $counter=$counter+1;
    }
  if ( $arrayTest[$i]['New_People']==$arrayTest[$j]['New_People'] && $arrayTest[$i]['New_People'] == 1 )
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
