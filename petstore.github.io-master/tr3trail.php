<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"mini1");
?> 

 <!DOCTYPE html>
  <html>
   
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
       
    </head><style>
	*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

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
<form name="form2" action="" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Owner's Store</legend>
					<label>ID<span>*</span></label><br />
                    <input name="t1" type="text" placeholder="1,2,3..." required>
                    
					
                    <label> Name :<span>*</span></label><br />
                    <input name="t2" type="text" placeholder="Ex-Ashutosh Kumar" required>
                    


                    <label>Contact :<span>*</span></label><br />
                    <input name="t3" type="number" placeholder="10-digit number" required>
                    

                    <label>Address :<span>*</span></label><br />
                    <input name="t4" type="text"  placeholder="Enter address" />

                   </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Store</legend>
<label>STore ID :<span>*</span></label><br />
                    <input name="t5" type="text" placeholder="Enter Store id" required>
                    <br />
					<label>Store Name :<span>*</span></label><br />
                    <input name="t6" type="text"  placeholder="Enter Store name" />
					<label>Owner's ID<span>*</span></label><br />
<!--id of owner in store -->
					<input name="t7" type="text" placeholder="Ex-Ashutosh Kumar" required>
                    
        </fieldset>
		        <fieldset>
          <legend><span class="number">3</span>Pet</legend>
          <label>Pet ID :<span>*</span></label><br />
                    <input name="t8" type="text" placeholder="Enter pet id" required>
                    <br />
					<label>Pet Name<span>*</span></label><br />
                    <select name="t9">
                        <option value="">----Select----</options>
                        <option value="Egyptian Mau" value="">Egyptian Cat</options>
                        <option value="Munchkin Cat" value="">Munchkin Cat</options>
                        <option value="Persian Cat" value="">Persian Cat</options>
						<option value="Siamese cats" value="">Siamese cats</options>
						<option value="Sphynx Cat" value="">Sphynx Cat</options>
						<option value="Beagle" value="">Beagle,Dog</options>
						<option value="Bulldog" value="">Bulldog</options>
						<option value="german shepherd" value="">German Shepherd,Dog</options>
						<option value="Golden Retriever" value="">Golden Retriever,Dog</options>
						<option value="Labrador Retriever" value="">Labrador Retriever,Dog</options>
						
                    </select>
                    <br />
					<label>Cost :<span>*</span></label><br />
                    <input name="t10" type="number"  placeholder="Enter cost" />
                    <br />
					<label>Store ID :<span>*</span></label><br />
                    <input name="t11" type="text"  placeholder="enter store id" />
                    </fieldset>
		        <fieldset>
					<legend><span class="number">4</span>Customer</legend>
					<label>Customer ID :<span>*</span></label><br />
                    <input name="t12" type="text" placeholder="Enter customer id" required>
                    <br />
					<label>Customername Name :<span>*</span></label><br />
                    <input name="t13" type="text"  placeholder="Enter customer name" />
					<label>Store ID :<span>*</span></label><br />
                    <input name="t14" type="text"  placeholder="Enter store id" />
					 </fieldset>       <fieldset>
<div align="center">	           
		      <input type="submit" name="submit4" value="insert"></div>
			  </form>
      		   <?php
if(isset($_POST["submit4"])){
mysqli_query($link,"insert into storeowner values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]')");
mysqli_query($link,"insert into store values('$_POST[t5]','$_POST[t6]','$_POST[t7]')");
mysqli_query($link,"insert into pet values('$_POST[t8]','$_POST[t9]','$_POST[t10]','$_POST[t11]')");
mysqli_query($link,"insert into customer2 values('$_POST[t12]','$_POST[t13]','$_POST[t14]')");
}
?>
    </body>
</html>