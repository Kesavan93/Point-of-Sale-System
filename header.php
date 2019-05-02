<style>
* {box-sizing: border-box;}

body {
  background-color: #FFC0CB;	
  margin: 0;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 10px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 70px;
  padding: 12px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.first {
  background-color: 8B4513;
  color: white;
}

.header a.second {
  background-color: dodgerblue;
  color: white;
}

.header a.third {
  background-color: 800080;
  color: white;
}

.header-right {
  float: right;
}


  
  .header-right {
    float: none;
	padding-top: 30px;
	padding-left: 50px;
  }
}
</style>
</head>

<div class="header">
  <a href="home.php" class="logo"><img src="img/companylogo.jpg" style="height:150px; width:350px; " id="icon" alt="User Icon" /></a>
  <div class="header-right">
    <a class="first" href="home.php"><b>HOME</b></a>
    <a class="second" href="pos.php"><b>POS</b></a>
<!--    <a href="upload.php"><b>UPLOAD</b></a>	-->
	<a class="third" href="shwprod.php"><b>PRODUCTS</b></a>
  </div>
</div>

<!--

<div style="padding-left:20px">
  <h1>Responsive Header</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>Some content..</p>
</div>

-->