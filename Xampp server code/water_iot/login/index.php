<!DOCTYPE html>
<html>
<head>
<title>water_iot</title>
<!--<meta http-equiv="refresh" content="1">-->
</head>
<body><a href="myusage.php">
    <button class="custom-btn btn-10">My Usage</button></a>
    <a href="blk2.html">
    <button class="custom-btn btn-10">Graph</button></a>
    <a href="blk3.html">
      <button class="custom-btn btn-10">Tank Usage</button></a>
      <a href="blk4.html">
        <button class="custom-btn btn-10">Help</button></a>
        <a href="logout.php">
          <button class="custom-btn btn-11">Log out</button></a>
          <h1>Water available in the tank </h1>
<table align="center" border="1px" style="width:800px; line-height:40px;">
<tr>
<th>tanksprit</th>
<th>tanklevel</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "water_iot");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT tanksprit, tanklevel FROM mydata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["tanksprit"]. "</td>
          <td>" . $row["tanklevel"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>



<style>
html {
    height: 100%;
  }
  body {
    margin:0;
    padding:0;
    font-family: sans-serif;
    background: linear-gradient(#141e30, #243b55);
  }   `
h1 {
            text-align:center;
            color: #31CDCD;
            font-size: xx-large;
            font-family: 'Lato', sans-serif;;
        }
tr:nth-child(even) {background-color: #161E1E}
button {
  margin: 20px;
}
.custom-btn {
  left: 35%;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;

  font-weight: 700;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}
.btn-10 {
    width: 130px;
  height: 40px;
  
  background: rgb(40,213,202);
background: linear-gradient(0deg, rgba(6,203,219,1) 0%, rgba(6,203,219,1) 100%);
  color: #fff;
  border: none;
  transition: all 0.3s ease;
  overflow: hidden;
}
.btn-10:after {
  position: absolute;
  content: " ";
  top: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  transition: all 0.3s ease;
  -webkit-transform: scale(.1);
  transform: scale(.1);
}
.btn-10:hover {
  color: #fff;
  border: none;
  background: transparent;
}
.btn-10:hover:after {
  background: rgb(0,3,255);
background: linear-gradient(0deg, rgba(6,203,219,1) 0%,  rgba(6,203,219,1)100%);
  -webkit-transform: scale(1);
  transform: scale(1);
}
.btn-11 {
    width: 100px;
  height: 40px;
  margin-left: 400px;
  background: rgb(40,213,202);
background: linear-gradient(0deg, rgba(6,203,219,1) 0%, rgba(6,203,219,1) 100%);
  color: #fff;
  border: none;
  transition: all 0.3s ease;
  overflow: hidden;
}
.btn-11:after {
  position: absolute;
  content: " ";
  top: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  transition: all 0.3s ease;
  -webkit-transform: scale(.1);
  transform: scale(.1);
}
.btn-11:hover {
  color: #fff;
  border: none;
  background: transparent;
}
.btn-11:hover:after {
  background: rgb(0,3,255);
background: linear-gradient(0deg, rgba(6,203,219,1) 0%,  rgba(6,203,219,1)100%);
  -webkit-transform: scale(1);
  transform: scale(1);
}
</style>
<style>
  table {
border-collapse: collapse;
width: 100%;
color: #31CDCD;
font-family: 'Lato', sans-serif;;
font-size: 25px;
text-align: center;
}
th {
background-color: #08BFBF;
color: white;
}
tr:nth-child(even) {background-color: #161E1E}
button {
  margin: 20px;
}
</style>