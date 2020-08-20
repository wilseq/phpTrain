<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="CSS/DropDownNavstyle.css">
		<link rel="stylesheet" type="text/css" href="CSS/flexStyle.css">
</head>
<body>
	<div class="ready"></div>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>

  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>

  <li class="dropdown2">
    <a href="javascript:void(0)" class="dropbtn">Dropdown2</a>
    <div class="dropdown-content">
      <a href="#">Link 11</a>
      <a href="#">Link 12</a>
      <a href="#">Link 13</a>
    </div>
  </li>

  <li class="dropdown3">
    <a href="javascript:void(0)" class="dropbtn">Dropdown2</a>
    <div class="dropdown-content">
      <a href="#">Link 21</a>
      <a href="#">Link 22</a>
      <a href="#">Link 23</a>
    </div>
  </li>

  <li class="dropdown4">
    <a href="javascript:void(0)" class="dropbtn">Dropdown2</a>
    <div class="dropdown-content">
      <a href="#">Link 31</a>
      <a href="#">Link 32</a>
      <a href="#">Link 33</a>
    </div>
  </li>


  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

<h3>Dropdown Menu inside a Navigation Bar</h3>
<p>Hover over the "Dropdown" link to see the dropdown menu.</p>
<p>Need to provide address in Href of links</p>

<div class="flex-container">
	<div>
  	<tr>
  		<td><?php echo "How are you";?></td><br>
  	</tr>
  	<tr>
  		<td><?php echo "How are you";?></td><br>
  	</tr>
  	<tr>
  		<td><?php echo "How are you";?></td><br>
  	</tr>
  	<tr>
  		<td><?php echo "How are you";?></td><br>
  	</tr>

  </div>
    <style>
table {
 
  width: 300px;
  height: 100px;
}

th, td {
  padding: 1px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>

  <div class="two" style="; background-color:red;" >
  	<table style="font-size: 15px;">
  		
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Points</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Griffin</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Griffin</td>
    <td>$150</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>$300</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>$250</td>
  </tr>
</table>
   	
  </div>
  	

  <div>
  		<form method="POST">
  			<tr>
  				<label style="font-size: 20px;">First Name</label>
  				<input type="text" name="firstname" placeholder="Enter your name">
  			</tr><br>
  			<tr>
  				<label style="font-size: 20px;">Last Name</label>
  				<input type="text" name="firstname" placeholder="Enter your name">
  			</tr><br>
  			
  			
  			<tr>
  				<input type="button" name="submit" value="Submit">
  			</tr>

  		</form>

  </div>  
  <div>4</div>
  <div>5</div>
  <div>6</div>  
</div>
</body>
</html>
