<?php
$output = NULL;

if(isset($_POST['submit'])){
	//connect to the database
	$mysqli = NEW Mysqli("localhost","root","","superanker");


	$source = $mysqli->real_escape_string($_POST['Source']);
	$year = $mysqli->real_escape_string($_POST['Year']);
	$program = $mysqli->real_escape_string($_POST['Program']);


	//query the database
	//$resultSet = $mysqli->query("SELECT * FROM rank WHERE sourceName LIKE '$source%' AND progName LIKE '$program%' AND yr LIKE '$year%'");

	$resultSet = $mysqli->query("SELECT r.rankNo, r.sourceName, r.yr, u.uniName ,u.state, u.uniType, h.progName, h.duration, h.fee FROM rank r, university u, has h  WHERE r.uID LIKE u.uID AND r.uID LIKE h.uID AND h.ProgName LIKE r.progName  AND r.sourceName LIKE '$source%' AND r.yr LIKE '$year%' AND r.progName LIKE'$program%' ORDER BY r.rankNo");




	if($resultSet!= 0){
		while($rows= $resultSet->fetch_assoc()){
			$sourceName  =$rows['sourceName'];
			$progName = $rows['progName'];
			//$uID = $rows['uID'];
			$year = $rows['yr'];
			$rankNo = $rows['rankNo'];
			$uniName = $rows['uniName'];
			$state = $rows['state'];
			$fee = $rows['fee'];

		

			$output .="Rank No.: $rankNo <br /> university name: $uniName <br /> Location: $state <br /> Tution Fees: $fee <br /> source name: $sourceName <br />Program Name: $progName <br /> year: $year<br /><br />";

			//$output .="Rank No.: $rankNo <br /> source name: $sourceName <br />Program Name: $progName <br /> year: $year<br /><br />";

		}
	}
	else{
		$output =  "No results";
	}
}
?>



<form  method="POST">
 Source: <input type="text" name="Source"><br>
 Year: <input type="text" name="Year"><br>
 Program: <input type="text" name="Program"><br>
<input type="SUBMIT" name="submit" value="Search">
</form>



<?php echo $output; ?>