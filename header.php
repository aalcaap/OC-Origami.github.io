<style type="text/css">

.coral {
  background: rgb(255, 127, 80);
  flex-grow: 1;
}
.coral:hover {
  background: #FC9700;
  flex-grow: 2;
}
.green {
  background: yellowgreen;
    align-items: center;
}
.green:hover{
  background: #80FC42;
  flex-grow: 2;
}

ul {
  list-style-type: none;
  display: table-row;
  float: right;
}

ul li{
  display: table-cell;
  height: 100px;
}
ul li a {
  display: table-cell;
  padding: 14px 16px;
  text-decoration: none;
  height: 100px;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  font-family: 'Work Sans', sans-serif;
}

ul li a:hover{
  color: rgb(255, 127, 80);
}

</style>
<div class="container">
<div class="coral">
    <a href="home_page.html">
    <img src="400dpiLogoCropped.png"
    style="width:150px;"
    alt="OC Origami" width="100px">
  </a>
</div>
<div class="green">
    <ul>
      <li> <a href="signin.php">Sign In</a></li>
      <li><a href="market_page.php">Market</a></li>
      <li><a href="about_page.php">About</a></li>
      <li><a href="contact_page.php">Contact</a></li>
      <li> <a href="join_page.php">Join</a> </li>
      <li><a href="home_page.php">Home</a></li>
    </ul>
</div>
</div>
