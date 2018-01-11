<?php
$output = NULL;
error_reporting(0);

if(isset($_POST['submit'])){
  //connect to the database
  $mysqli = NEW Mysqli("localhost","root","","superanker");


  $uni_Name = $mysqli->real_escape_string($_POST['uName']);

  echo "Searching for university:";
  echo $uni_Name;



  //query the database
  //$resultSet = $mysqli->query("SELECT * FROM rank WHERE sourceName LIKE '$source%' AND progName LIKE '$program%' AND yr LIKE '$year%'");

  $resultSet = $mysqli->query("SELECT  u.uID, u.uniName ,u.state, u.uniType, h.progName, h.fee, h.duration, r.rankNo, r.sourceName, r.yr FROM rank r, university u, has h, program p WHERE r.uID LIKE u.uID AND h.uID LIKE u.uID AND h.progName LIKE p.progName AND u.uniName LIKE '$uni_Name%' ");

  //$resultSet = $mysqli->query("SELECT  u.uID, u.uniName ,u.state, u.uniType FROM  university u WHERE u.uniName LIKE '$uni_Name%' ");


  if($resultSet!= 0){
    while($rows= $resultSet->fetch_assoc()){
     
      $uID = $rows['uID'];
      $universityName = $rows['uniName'];
      $state = $rows['state'];
      $uniType = $rows['uniType'];
      $progName = $rows['progName'];
      $fee = $rows['fee'];
      $duration = $rows['duration'];
      $rankNo = $rows['rankNo'];
      $sourceName = $rows['sourceName'];
      $yr= $rows['yr'];

    
    

      $output .="University name: $universityName <br /> University ID: $uID <br /> University type: $uniType <br /> University state: $state<br /> Program Name : $progName<br/>
      Fee : $fee</br>
      Duration : $duration</br>
      rankNo : $rankNo</br>
      Rank SourceName : $sourceName</br>
      Rank year : $yr<br /></br>";

      //$output .="Rank No.: $rankNo <br /> source name: $sourceName <br />Program Name: $progName <br /> year: $year<br /><br />";

    }
  }
  else{
    $output =  "No results";
  }
}
?>



<form  method="POST">
 University: <input type="text" name="uName"><br>

<input type="SUBMIT" name="submit" value="Search">
</form>



<?php echo $output; ?>