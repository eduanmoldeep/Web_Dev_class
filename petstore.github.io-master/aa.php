<!-- retreive -->
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"mini1");
?>
<!DOCTYPE html>
<html>
<head><title>Details</title></head>
<style>
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:1000px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
th:after {
	background: rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}
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

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
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
    z-index: 1;
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
</style>
<body>

<ul>
  <li><a class="active" href="index1.php">Home</a></li>
  <li><a href="generic1.php">Cats</a></li>
  <li><a href="elements1.php">Dog</a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Sign Up</a>
    <div class="dropdown-content">
      <a href="tr3trail.php">Page 1</a>
      <a href="x.php">Page 2</a>
    </div>
  </li>
  <li><a href="aa.php">Query</a></li>
</ul>
<div style="width:400px;">
<div style="float: left; width: 130px"> 
<form name="form1" action="" method="post">
<input type="submit" name="submit4" value="View All"> </form></div>
<div style="float: right; width: 225px"> <form name="form2" action="" method="post"> <input type="submit" name="submit3" value="Transactions"></form></div>
<div style="float: left; width: 130px"> <form name="submit6" action="" method="post" value="costwise">
                <select name="value">
                        <option value="">Filter Pet By Cost</options>
                         <option value="2000">less than 2000</options>
                        <option value="5000">less than 5000</options>
                        <option value="6000">less than 7000</options>
                        <option value="10000">less than 10000</options>
                        <option value="11000">less than 11000</options>
                        <option value="12000">less than 12000</options>
                        <option value="12000">less than 14000</options>
           
            </select>
            <input type ="submit" value="Filter">
</form></div>

<div style="float: left; width: 225px"><form name="searchpet"  action="" method="post" value="selectpet">

                    <select name="selectpet">
                        <option value="">----Select----</options>
                        <option value="Egyptian Mau">Egyptian Cat</options>
                        <option value="Munchkin Cat">Munchkin Cat</options>
                        <option value="Persian Cat">Persian Cat</options>
						            <option value="Siamese cats">Siamese cats</options>
						            <option value="Sphynx Cat">Sphynx Cat</options>
						            <option value="Beagle">Beagle,Dog</options>
						            <option value="Bulldog">Bulldog</options>
						            <option value="German shepherd">German Shepherd,Dog</options>
						            <option value="Golden Retriever">Golden Retriever,Dog</options>
						            <option value="Labrador Retriever">Labrador Retriever,Dog</options>

						</select>
            <input type="submit" value="searchpet">
</form></div>
<!--<div style="float: left; width: 130px"><form name="form2" action="index.php" method="post">	
      <input type="submit" name="submit7" value="Main Page">
      </form></div>
<form name="form3" action="tr3trail.php" method="post">	
      <input type="submit" name="submit7" value="Previous Page">
      </form>
	<div style="float: left width: 225px"> 	  <form name="form4" action="" method="post">	
      <input type="submit" name="submit8" value="Query">
      </form></div>-->
    </div>

<?php
if(isset($_POST["submit4"])){
$res1=mysqli_query($link,"select * from storeowner");
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
echo "<tr>";
echo "<th>"; echo "id"; echo "</th>";
echo "<th>"; echo "name"; echo "</th>";
echo "<th>"; echo "tel"; echo "</th>";
echo "<th>"; echo "address"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res1))
{ 

          echo "<td>"; echo $row["id"]; echo"</td>";
		  echo "<td>"; echo $row["name"]; echo"</td>";
		   echo "<td>"; echo $row["tel"]; echo"</td>";
		    echo "<td>"; echo $row["address"]; echo"</td>";
        echo "</tr>";
}

$res2=mysqli_query($link,"select * from store");
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
echo "<tr>";
echo "<th>"; echo "storeid"; echo "</th>";
echo "<th>"; echo "storename"; echo "</th>";
echo "<th>"; echo "ownerid"; echo "</th>";

echo "</tr>";
while($row=mysqli_fetch_array($res2))
{ 
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
          echo "<td>"; echo $row["storeid"]; echo"</td>";
		  echo "<td>"; echo $row["storename"]; echo"</td>";
		   echo "<td>"; echo $row["ownerid"]; echo"</td>";
        echo "</tr>";
}
$res3=mysqli_query($link,"select * from pet");
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
echo "<tr>";
echo "<th>"; echo "petid"; echo "</th>";
echo "<th>"; echo "petname"; echo "</th>";
echo "<th>"; echo "cost"; echo "</th>";
echo "<th>"; echo "storeid"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res3))
{ 
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
          echo "<td>"; echo $row["petid"]; echo"</td>";
		  echo "<td>"; echo $row["petname"]; echo"</td>";
		   echo "<td>"; echo $row["cost"]; echo"</td>";
		    echo "<td>"; echo $row["storeid"]; echo"</td>";
        echo "</tr>";
}
$res4=mysqli_query($link,"select * from customer2");
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
echo "<tr>";
echo "<th>"; echo "customerid"; echo "</th>";
echo "<th>"; echo "customername"; echo "</th>";
echo "<th>"; echo "storeid"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res4))
{ 
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
          echo "<td>"; echo $row["customerid"]; echo"</td>";
		  echo "<td>"; echo $row["customername"]; echo"</td>";
		  echo "<td>"; echo $row["storeid"]; echo"</td>";
        echo "</tr>";
}

$res6=mysqli_query($link,"select * from puchase2");
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
echo "<tr>";
echo "<th>"; echo "petid"; echo "</th>";
echo "<th>"; echo "customerid"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res6))
{ 
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
          echo "<td>"; echo $row["petid"]; echo"</td>";
		  echo "<td>"; echo $row["customerid"]; echo"</td>";
        echo "</tr>";
}
    echo "</tbody>";
    echo "</table>";
  echo "</div>";
echo "</section>";
}
 if(isset($_POST['store_search'])){ 
  $res1=mysqli_query($link,"select storeid ,storename,ownerid,storeowner.address from store,storeowner where storename = '".$_POST['t3']."' and id=ownerid");

echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
echo "<tr>";
echo "<th>"; echo "storename"; echo "</th>";
echo "<th>"; echo "storeid"; echo "</th>";
echo "<th>"; echo "ownerid"; echo "</th>";
echo "<th>"; echo "address"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res1))
{ 

          echo "<td>"; echo $row["storename"]; echo"</td>";
      echo "<td>"; echo $row["storeid"]; echo"</td>";
      echo "<td>"; echo $row["ownerid"]; echo"</td>";
      echo "<td>"; echo $row["address"]; echo"</td>";
        echo "</tr>";
}}
if(isset($_POST["value"])){
  $res1=mysqli_query($link,"select petname,cost,storeid from pet where pet.cost <'".$_POST['value']."'");
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
echo "<tr>";
echo "<th>"; echo "petname"; echo "</th>";
echo "<th>"; echo "storeid"; echo "</th>";
echo "<th>"; echo "price"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res1))
{ 

          echo "<td>"; echo $row["petname"]; echo"</td>";
		  echo "<td>"; echo $row["storeid"]; echo"</td>";
      echo "<td>"; echo $row["cost"]; echo"</td>";
        echo "</tr>";
}}
if(isset($_POST["submit3"])){
$res1=mysqli_query($link,"select petid,petname,customerid,pet.storeid as a from pet,customer2 where pet.storeid=customer2.storeid");
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
echo "<tr>";
echo "<th>"; echo "petid"; echo "</th>";
echo "<th>"; echo "petname"; echo "</th>";
echo "<th>"; echo "storeid"; echo "</th>";
echo "<th>"; echo "customerid"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res1))
{ 
		   echo "<td>"; echo $row["petid"]; echo"</td>";
		    echo "<td>"; echo $row["petname"]; echo"</td>";
			 echo "<td>"; echo $row["a"]; echo"</td>";
			 echo "<td>"; echo $row["customerid"]; echo"</td>";

        echo "</tr>";
}}
if(isset($_POST["selectpet"])){
$res1=mysqli_query($link,"select petid,petname ,storename,pet.storeid from pet,store where petname='".$_POST["selectpet"]."' and pet.storeid=store.storeid ");
     echo "<table cellpadding='0' cellspacing='0' border='0'> ";
      echo "<tbody>";
        echo "<tr>";
echo "<tr>";
echo "<th>"; echo "petid"; echo "</th>";
echo "<th>"; echo "petname"; echo "</th>";
echo "<th>"; echo "storename"; echo "</th>";
echo "<th>"; echo "storeid"; echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res1))
{ 
		   echo "<td>"; echo $row["petid"]; echo"</td>";
		    echo "<td>"; echo $row["petname"]; echo"</td>";
			 echo "<td>"; echo $row["storename"]; echo"</td>";
			 echo "<td>"; echo $row["storeid"]; echo"</td>";
        echo "</tr>";
}}
?>

</body>
</html>