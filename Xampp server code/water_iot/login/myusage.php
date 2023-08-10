<!DOCTYPE html>
<html>
<head>
<title>water_iot</title>
<!--<meta http-equiv="refresh" content="1">-->
<style>
h1 {
            text-align: center;
            color: #588c7e;
            font-size: xx-large;
            font-family: monospace;
        }
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>
<body>
<form>
 <input type="button" class="custom-btn btn-2" value="Go back!" onclick="history.back()">
</form>
    <h1>MYUSAGE</h1>
<table align="center" border="1px" style="width:900px; line-height:40px;">
<tr>
<th>Id</th>
<th>username</th>
<th>watersprit</th>
<th>waterused</th>

</tr>
<div id="div_refresh">
<?php
$conn = mysqli_connect("localhost", "root", "", "water_iot");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,username, watersprit,waterused FROM mydata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td>
    <td>" . $row["username"]. "</td>
    <td>" . $row["watersprit"]. "</td>
    <td>" . $row["waterused"]. "</td>
   </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?> 
</div>
</table>
<!--<meta http-equiv="refresh" content="1"
<a href="api/bpmgraph.html">
    <button class="custom-btn btn-1">bpm Graph</button></a>>-->
</body>
</html>
<style>
    .custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
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
  .btn-1 {
  position: relative;
  display: inline-block;
  padding: 5px 10px;
  color: #03e9f4;
  font-size: 13 px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  margin-left: 700px;
  letter-spacing: 4px
}
.btn-2 {
    position: relative;
  display: inline-block;
  padding: 5px 10px;
  color: #03e9f4;
  font-size: 13 px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 0px;
  margin-left: 0px;
  letter-spacing: 4px
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