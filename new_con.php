<!DOCTYPE html>
<html>
<head>
<style>
 @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

html{    background:url(http://gradschool.umd.edu/sites/gradschool.umd.edu/files/nodes/images/rotator-images/1.jpg) no-repeat;
  background-size: cover;
  height:125%;
}
h3{
	text-align:center;  font-family: "Arial Black", Gadget, sans-serif; font-size: 25px;
}
sourcetext{ font-family: "Arial Black", Gadget, sans-serif; font-size: 15px;color: white;
}

h4{ text-align:center; font-family: "Arial Black", Gadget, sans-serif; font-size: 22px;color: white;
}


yeartext{ font-family: "Arial Black", Gadget, sans-serif; font-size: 15px;color: white;
}

programtext{ font-family: "Arial Black", Gadget, sans-serif; font-size: 15px;color: white;
}

feetext{ font-family: "Arial Black", Gadget, sans-serif; font-size: 15px; color: white;
}

locationtext{ font-family: "Arial Black", Gadget, sans-serif; font-size: 15px;color: white;
}

#feedback-page{
  text-align:center;
}

#form-main{
  width:100%;
  float:left;
  padding-top:0px;
}

#form-div {
  background-color:rgba(72,72,72,0.4);
  padding-left:35px;
  padding-right:35px;
  padding-top:20px;
  padding-bottom:50px;
  width: 450px;
  float: left;
  left: 50%;
  position: absolute;
  margin-top:20px;
  margin-left: -560px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
}



#form-main-location{
  width:50%;
  float:right;
  padding-top:10px;
}

#form-div-location {
  background-color:rgba(72,72,72,0.4);
  padding-left:35px;
  padding-right:35px;
  padding-top:35px;
  padding-bottom:50px;
  width: 250px;
  float: left;
  left: 30%;
  position: absolute;
  margin-top:50px;
  margin-left: 560px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
}

.feedback-input {
  color:#3c3c3c;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 0;
  line-height: 22px;
  background-color: #fbfbfb;
  padding: 13px 13px 13px 54px;
  margin-bottom: 10px;
  width:100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
  border: 3px solid rgba(0,0,0,0);
}

.feedback-input:focus{
  background: #fff;
  box-shadow: 0;
  border: 3px solid #3498db;
  color: #3498db;
  outline: none;
  padding: 13px 13px 13px 54px;
}

.focused{
  color:#30aed6;
  border:#30aed6 solid 3px;
}



/*sample */


textarea {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize:vertical;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
  background-color:white;
}

#button-blue{
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  float:left;
  width: 100%;
  border: #fbfbfb solid 4px;
  cursor:pointer;
  background-color: #3498db;
  color:white;
  font-size:24px;
  padding-top:22px;
  padding-bottom:22px;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}

#button-blue:hover{
  background-color: rgba(0,0,0,0);
  color: #0493bd;
}
  
.submit:hover {
  color: #3498db;
}
  
.ease {
  width: 0px;
  height: 74px;
  background-color: #fbfbfb;
  -webkit-transition: .3s ease;
  -moz-transition: .3s ease;
  -o-transition: .3s ease;
  -ms-transition: .3s ease;
  transition: .3s ease;
}

.submit:hover .ease{
  width:100%;
  background-color:white;
}


/*sample try*/

#Source{
  
  background-size: 30px 30px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}

#Source:focus{
  
  background-size: 30px 30px;
  background-position: 8px 5px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}

#Year{
  
  background-size: 30px 30px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}

#Year:focus{
  
  background-size: 30px 30px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}

#Program{
  
  background-size: 30px 30px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}



textarea {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize:vertical;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
  background-color:white;
}

#button-blue{
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  float:left;
  width: 100%;
  border: #fbfbfb solid 4px;
  cursor:pointer;
  background-color: #3498db;
  color:white;
  font-size:24px;
  padding-top:22px;
  padding-bottom:22px;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}

#button-blue:hover{
  background-color: rgba(0,0,0,0);
  color: #0493bd;
}
  
.submit:hover {
  color: #3498db;
}
  
.ease {
  width: 0px;
  height: 74px;
  background-color: #fbfbfb;
  -webkit-transition: .3s ease;
  -moz-transition: .3s ease;
  -o-transition: .3s ease;
  -ms-transition: .3s ease;
  transition: .3s ease;
}

.submit:hover .ease{
  width:100%;
  background-color:white;
}

@media only screen and (max-width: 580px) {
  #form-div{
    left: 3%;
    margin-right: 3%;
    width: 88%;
    margin-left: 0;
    padding-left: 3%;
    padding-right: 3%;
  }
}
/*ONE MORE SAMPLE TRY*/
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
    padding: 20px 16px;
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
    display: inline;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=302380656558346";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<h3>SUPERRANKER</h3>

<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>

<a href="https://twitter.com/intent/tweet?button_hashtag=SuperRanker" class="twitter-hashtag-button" data-show-count="false">Tweet #SuperRanker</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<!--<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world"
  data-size="large">
Tweet</a>-->


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
      <a href="http://www.cmu.edu/">CMU</a>
      <a href="http://www.upenn.edu/">UPenn</a>
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


<p></p>

</body>
</html>


<div id="form-main">
  <div id="form-div">
<form  method="POST", action="connect.php">


	<h4>ADVANCED SEARCH</h4>
	
  		


 	<sourcetext>SOURCE: </sourcetext><p class="Source"><select name="Source"><br></p>
    <option value="USNEWS">USNEWS</option>
    <option value="Times Higher Education">Times Higher Education</option>
    <option value="Best-masters">Best-masters</option>
    <option value="Mastersindatascience">Mastersindatascience</option>
    <option value="ECONOMIST">ECONOMIST</option>
    <option value="TFE Times">TFE Times</option>

  </select>
  <br><br>
  
      
 	<yeartext>YEAR:</yeartext> <p class="Year"><select name="Year"><br></p>
 	<option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
 
  </select>
  <br><br>
  
 	<programtext>PROGRAM:</programtext> <p class="Program"><select name="Program" ><br></p>
 	<option value="MBA">MBA</option>
    <option value="MS-BA">MS-BA</option>
    <option value="MS-IS">MS-IS</option>
 
  </select>
  <br><br>
  

 	<feetext>FEES MIN:</feetext> <p class="Fee"><select name="FeeMin" ><br></p>
 	<option value="0">0(min fee)</option>
    <option value="50000">50000</option>
    <option value="100000">100000</option>
   

 
  </select>
  <br><br>

  <feetext>FEES MAX:</feetext> <p class="Fee"><select name="FeeMax" ><br></p>
 	<option value="150000">150000(max fee)</option>
    <option value="100000">100000</option>
    <option value="50000">50000</option>
   

 
  </select>
  <br><br>
  

	<div class="submit">
		<input type="SUBMIT" name="submit" value="Search" id="button-blue">
 	<div class="ease"></div>
  </div>

   </form>
  </div>

<!-- <div id="form-main-location">
  <div id="form-div-location">
	<form  method="POST", action="location_connect.php">

  <div class="search_by_location">
  		
		<input type="SUBMIT" name="search by location" value="location search" id="button-blue">
 	<div class="ease"></div>
  </div>

</form>
  </div> -->



  <div id="form-main-location">
  <div id="form-div-location">
<form  method="POST", action="search_location.php">

  <locationtext>LOCATION: </locationtext><p class="Location"><select name="Location"><br></p>
    <option value="MD">Maryland</option>
    <option value="NY">New York</option>
    <option value="CA">California</option>
    <option value="TX">Texas</option>
    <option value="AZ">Arizona</option>
    <option value="VA">Virginia</option>
    <option value="MA">Massachusetts</option>
    <option value="PA">Pennsylvania</option>
    <option value="MN">Minnesota</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="MI">Michigan</option>
    <option value="IL">Illinois</option>
    <option value="NC">North Carolina</option>
    <option value="FL">Florida</option>
    <option value="NJ">New Jersey</option>
    <option value="IA">Iowa</option>
    <option value="CT">Connecticut</option>
    <option value="KY">Kentucky</option>
    <option value="DC">Dist. of Columbia</option>
    <option value="LA">Louisiana</option>
    <option value="OH">Ohio</option>
    <option value="NE">Nebraska</option>
    <option value="NH">New Hampshire</option>
    <option value="TN">Tennessee</option>


  </select>
  <br><br>
  
  
  

  <div class="submit">
    <input type="SUBMIT" name="submit" value="Search by location" id="button-blue">
  <div class="ease"></div>
  </div>



    </form>
  </div>

   