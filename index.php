<!DOCTYPE html>
<html>
<head>
<title>JBMR RESTO</title>

<style>
  
* {
  box-sizing: border-box;
}
body{
  background-color:#F1F1F1;
}

.column1 {
  float: left;
  width: 23%;
  padding: 5px;
  /* background-color:#A5F1E9; */
  border-radius:15px;
  box-shadow: 5px 10px 5px 5px #277BC0;
}
.column2 {
  float: left;
  width: 23%;
  padding: 5px;
  /* background-color:#A5F1E9; */
  border-radius:15px;
  margin: 0px 0px 0px 38px;
  box-shadow: 5px 10px 5px 5px #277BC0;
}
.column3 {
  float: right;
  width: 23%;
  padding: 5px;
  /* background-color:#A5F1E9; */
  border-radius:15px;
  margin: 0px 0px 0px 0px;
  box-shadow: 5px 10px 5px 5px #277BC0;
}
.column4 {
  float: right;
  width: 23%;
  padding: 5px;
  /* background-color:#A5F1E9; */
  box-shadow: 5px 5px 5px 5px #277BC0;
  border-radius:15px;
  margin-right: 30px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
img {
  border-radius: 15px;
}
.row1{
    margin-top: 100px;
}
h5{
    color:#D800A6;
}
.button {
  background-color: #277BC0; /* Green */
  border-radius: 15px;
  border:none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button:hover{
    background-color:#AF7AB3;
    color:white;
}
.text-center{
  text-align:center;
}
.menu ul{
  list-style-type:none;
}
.menu ul li{
  display:inline;
  padding: 1%;
}
.menu ul li a{
  text-decoration:none;
  color:blue;
}
.menu ul li a:hover{
  color:red;
}
h6{
  color:#277BC0;
}
.wrapper{
  border: 0px solid black;
  /* padding:1%; */

  margin:0 auto;
}
.wrapper1{
  border: 1px solid black;
  /* padding:1%; */

  margin:0 auto;
}
.footer{
  background-color:#277BC0;
  color:white;
}
.row1{
  height: 500px;
}

</style>
</head>
<body>
<div class="menu text-center">
  <div class="wrapper">
    <ul>
      <li> <a href="index.php"><b> Home</b> </a></li>
      <li> <a href="#"><b> About Us</b> </a></li>
      <li> <a href="login.php"><b> Login</b> </a></li>
      <li> <a href="signup.php"><b> SignUp</b> </a></li>
</ul>
</div>
</div>

<img src="image/front.jpg" alt="Snow" width="100%" height="250">
<h1 style="text-align:center">Popular Recipes</h1>
<div class="row">
  <div class="column1">
    <img src="image/chana.jfif" alt="Snow" width="276" height="200">
    <p><i> Dal (Lentils) & Legumes</i></p>
    <h5> Dal Makhani</h5>
    <button class="button button2"><a href="dalmakhni.php">Read More</a></button>
  </div>
  <div class="column2">
    <img src="image/dal.jfif" alt="Forest" width="276" height="200">
    <p> Dal (Lentils) & Legumes</p>
    <h5>Rajma Recipe | Rajma Masala | Rajma Chawal</h5>
    <button class="button button2"><a href="https://www.w3schools.com/">Read More</a></button>
  </div>
  <div class="column3">
    <img src="image/palak.jfif" alt="Mountains" width="276" height="200">
    <p>Chickpeas Recipes</p>
    <h5>Chana Masala | Chole Recipe | Punjabi Chole</h5>
    <button class="button button2"><a href="https://www.w3schools.com/">Read More</a></button>
  </div>
  <div class="column4">
    <img src="image/rajma.jfif" alt="Mountains" width="276" height="200">
    <p>Paneer Recipes</p>
    <h5>Palak Paneer Recipe | 2 Variations</h5>
    <button class="button button2"><a href="https://www.w3schools.com/">Read More</a></button>
  </div>
</div>
<div class="row1">
  <div class="column1">
    <img src="image/daltdka.jpg" alt="Snow" width="276" height="200">
    <p> Dal (Lentils) & Legumes</p>
    <h5> Dal Makhani</h5>
    <button class="button button2"><a href="https://www.w3schools.com/">Read More</a></button>
  </div>
  <div class="column2">
    <img src="image/paneer.jpg" alt="Forest" width="276" height="200">
    <p> Dal (Lentils) & Legumes</p>
    <h5>Rajma Recipe | Rajma Masala | Rajma Chawal</h5>
    <button class="button button2"><a href="https://www.w3schools.com/">Read More</a></button>
  </div>
  <div class="column3">
    <img src="image/palak.jfif" alt="Mountains" width="276" height="200">
    <p>Chickpeas Recipes</p>
    <h5>Chana Masala | Chole Recipe | Punjabi Chole </h5>
    <button class="button button2"><a href="https://www.w3schools.com/">Read More</a></button>
  </div>
  <div class="column4">
    <img src="image/rajma.jfif" alt="Mountains" width="276" height="200">
    <p>Paneer Recipes</p>
    <h5>Palak Paneer Recipe | 2 Variations</h5>
    <button class="button button2"><a href="https://www.w3schools.com/">Read More</a></button>
  </div>
</div>
<div class="footer">
  <div class="wrapper1">
    <p class="text-center"> 2022 All Right Reserved, JBMR Resto. Developed By - Sachin Tonger</p>
  </div>
</div>

</body>
</html>