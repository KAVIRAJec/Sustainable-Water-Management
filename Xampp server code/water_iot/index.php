<!DOCTYPE html>
<html>
<head>
<title>water_iot</title>
<meta http-equiv="refresh" content="1">
</head>
<h1>Water Management Project</h1>
    <h1>Sign in to Continue </h1>
<body><a href="login/registration.php">
    <button class="custom-btn btn-10">Sign up</button></a>
    <a href="login/login.php">
    <button class="custom-btn btn-10">Log in</button></a>
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
  }
  h1 {
            text-align: center;
            color: #31CDCD;
            font-size: xx-large;
            font-family: 'Lato', sans-serif;;
        }
.custom-btn {
  left: 45%;
  margin-top: 20px;
  width: 600px;
  padding: 40px;
  width: 130px;
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
  width: 100px;
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
</style>