<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Using single SQL</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

html{    background-color: Blue;
 background:url(http://hdwallpaperbackgrounds.net/wp-content/uploads/2016/07/Blur-Images-1.jpg) no-repeat;
  background-size: cover;
  height:250%;
}
h3{
	text-align:center;  font-family: "Arial Black", Gadget, sans-serif; font-size: 25px;
}
table, td,th
{
 padding:10px; border: 1px solid black;
 
 border-collapse:collapse;
 column-span: "2";
 font-family:Georgia, "Times New Roman", Times, serif;
 border:solid #ddd 2px;

 text-align: center;
 border-bottom: 1px solid #ddd;

}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}

/*dropdown bar*/


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

/*dropdown end*/


</style>
</head>
<body>
<h3>SUPERRANKER</h3>
<table align="center" border="1" width="100%">
<tr>
<th width="100">Rank</th>
<th width="100">University Name</th>
<th width="100">Location</th>
<th width="100">Duration</th>
<th width="100">WikiLink</th>
<th width="100">Tution Fess</th>
<th width="100">Source Name</th>
<th width="100">Program Name</th>
<th width="100">Year</th>
</tr>


<ul>
  <li class="dropdown">
  	<a href="javascript:void(0)" class="dropbtn">PROGRAMS</a>
  	<div class="dropdown-content">
      <a href="https://en.wikipedia.org/wiki/Master_of_Business_Administration">MBA</a>
      <a href="https://en.wikipedia.org/wiki/Master_of_Science_in_Information_Systems">MS-IS</a>
      <a href="https://en.wikipedia.org/wiki/Master_of_Science_in_Business_Analytics">MS-BA</a>
    </div>
  </li>

  <li class="dropdown">
  	<a href="javascript:void(0)" class="dropbtn">UNIVERSITIES</a>
  	<div class="dropdown-content">
      <a href="http://www.harvard.edu/">HARVARD</a>
      <a href="https://www.stanford.edu/">STANFORD</a>
      <a href="http://web.mit.edu/">MIT</a>
      <a href="http://www.umd.edu/">UMD</a>

    </div>
  </li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">SOURCES</a>
    <div class="dropdown-content">
      <a href="http://www.usnews.com/">USNEWS</a>
      <a href=https://www.timeshighereducation.com/>Times Higher Education</a>
      <a href="http://www.mastersindatascience.org/">Masters in DataScience</a>
      <a href="https://tfetimes.com/">TFE Times</a>
      <a href="http://www.economist.com/">Economist</a>
      <a href="http://www.best-masters.us/">Best-Masters</a>
      

    </div>
  </li>
  <li><a href="#home">ABOUT</a></li>

  

  
</ul>

 <?php
 $output = NULL;
 error_reporting(0);
// Create Connection
// $sourceid = "";
// $query = "";
//  $conn = new mysqli('localhost','root','');

//  //check connection

//  if ($conn->connect_error){
//  	die("connection failed:". $conn->connect_error);
//  	echo"no connection";
//  }

//  echo "DB Connected successfully.";

//  //this will select the Database asmple_db
//  mysqli_select_db($conn,"university");



//  echo "\n DB is seleceted as University successfully.";

/* Select queries return a resultset */
/*if ($result = $mysql->query("SELECT * FROM sourceName = '$sourceid' ")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    /* free result set */
    //$result->close();

//}

if(isset($_POST['submit'])){
	//connect to the database
	$mysqli = NEW Mysqli("localhost","root","","superanker");


	$source = $mysqli->real_escape_string($_POST['Source']);
	$year = $mysqli->real_escape_string($_POST['Year']);
	$program = $mysqli->real_escape_string($_POST['Program']);
	$feeMin = $mysqli->real_escape_string($_POST['FeeMin']);
	$feeMax = $mysqli->real_escape_string($_POST['FeeMax']);
    


	//query the database
	//$resultSet = $mysqli->query("SELECT * FROM rank WHERE sourceName LIKE '$source%' AND progName LIKE '$program%' AND yr LIKE '$year%'");
    
	    $resultSet = $mysqli->query("SELECT r.rankNo, r.sourceName, r.yr, u.uniName ,u.state, u.uniType, h.progName, h.duration, h.fee, u.wikiLink FROM rank r, university u, has h  WHERE r.uID LIKE u.uID AND r.uID LIKE h.uID AND h.progName LIKE r.progName  AND r.sourceName LIKE '$source%' AND r.yr LIKE '$year%' AND r.progName LIKE'$program%' AND h.fee BETWEEN '$feeMin%' AND '$feeMax%' ORDER BY r.rankNo");
    

  




	if($resultSet!= 0){
		while($rows= $resultSet->fetch_assoc()){

			?>
			<table align="center" border="1" width="100%">
    		<tr>

    		<td width="100"><?php echo $rows['rankNo']; ?></td>
    		<td width="100"><?php echo $rows['uniName']; ?></td>
    		<td width="100"><?php echo $rows['state']; ?></td>
    		
    		<td width="100"><?php echo $rows['duration'];?></td>
    		<td width="100"><a href="<?php echo $rows['wikiLink'];?>"><?php echo $rows['uniName']; ?> Link </a></td>

    		
    		<td width="100"><?php echo $rows['fee'];?></td>
    		<td width="100"><?php echo $rows['sourceName']; ?></td>
    		<td width="100"><?php echo $rows['progName']; ?></td>
    		<td width="100"><?php echo $rows['yr'];?></td>
    		</tr>
    		<?php
			$sourceName  =$rows['sourceName'];
			$progName = $rows['progName'];
			//$uID = $rows['uID'];
			$year = $rows['yr'];
			$rankNo = $rows['rankNo'];
			$uniName = $rows['uniName'];
			$state = $rows['state'];
			$fee = $rows['fee'];

		
			//correct sql query
			//$output .="Rank No.: $rankNo <br /> university name: $uniName <br /> Location: $state <br /> Tution Fees: $fee <br /> source name: $sourceName <br />Program Name: $progName <br /> year: $year<br /><br />";

			//$output .="Rank No.: $rankNo <br /> source name: $sourceName <br />Program Name: $progName <br /> year: $year<br /><br />";

		}
	}
	else{
		$output =  "No results";
	}
	
// $query = "SELECT * FROM `source` WHERE (`sourceName` LIKE '%".$sourceid."%')";

// $sourceinfo = mysqli_query($query);


// while($result = mysql_fetch_array( $sourceinfo))
// {
// 		echo $result['sourceName'];
// 		echo " ";
// 		echo "<br>";
// 		echo $result['sourceURL'];
// 		echo "<br>";
// 		echo "<br>";
// }

/*if(isset($_POST['submit']))
{
	echo "hello";
	$sourceid = $_GET['Source'];

	if( $sourceid!="")
		die('invalid source name');

	$query = "SELECT * FROM source WHERE 'sourceName' = $sourceid";

	$sourceinfo = mysql_query($query);


	while($result = mysql_fetch_array( $isource ))
	{
		echo $result['sourceName'];
		echo " ";
		echo "<br>";
		echo $result['sourceURL'];
		echo "<br>";
		echo "<br>";
	}
 	//$sql="SELECT r.rankNo AS 'Rank', r.sourceName,r.yr, u.uniName AS 'University Name',u.state AS 'Location', u.uniType AS 'University Type', h.progName AS 'Program', h.duration, h.fee FROM Rank r, University u, Has h  WHERE r.uID =u.uID AND r.uID = h.uID AND r.sourceName = 'USNEWS' AND r.yr = '2016' AND r.progName = 'MBA' ORDER BY r.rankNo";

 	//if ($conn->query($sql)== TRUE){
 	//echo "";
 	//} 

 	//else {
 		//echo "Error:".$sql."<br>".$conn->error;
 	//}
	//mysqli_close($conn);
}
else {
	echo "<p> Please enter a source.";
}*/
}
?>
</table>
</body>
</html>

<?php echo $output; ?>
