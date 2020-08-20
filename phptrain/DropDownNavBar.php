<!DOCTYPE html>
<html>
<head>
<style>
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
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown2:hover .dropdown-content {
  display: block;
}

.dropdown3:hover .dropdown-content {
  display: block;
}
.dropdown4:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

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


</body>
</html>
