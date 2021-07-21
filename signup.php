
<!DOCTYPE html>
<html>

<head><title> signup page</title></head>

<body>
  <div class="boxone">
   <table  style =" font-size:25pt"  align="center" width="100%" height="100%" >
      <tr>
        <td style="color:#329299"><h1 align="center"><marquee> WELCOME TO RHO E-LIBRARY </marquee></td></h1>
      </tr>
      <tr>
        <td style="color:#329299" align="center"> <b> REGISTRATION PAGE </b></td>
      </tr>
    </table>
  </div>
    <br>
    <br> 

    <body>
 <div  class="boxtwo" style="border:solid 4px #3d351d ;border-radius: 40px; width:73.5%; height:360px; margin-left:13%;margin-top:15px;background-color: black ; opacity: .68; background-repeat: no-repeat; background-size: cover; ">

 <fieldset align="center"  style="color:white; border: 0px; " class="one"  >
  <div class="title">
  <h2>TYPE YOUR DETAILS</h2>
    </div>

<form action="" method="post">
<table align="center" style = " font-size:13pt;">
    <tr>
      <td>NAME:</td>
 <td ><input id="text" type="text" name="user_name" size="17"
 maxlength="30" style="color:black"/></td>

    </tr>
    <tr>
      <td>GENDER.:</td>
      <td>
<input id="text" type="radio" name="gender" value="m" checked> Male
<input id="text"  type="radio" name="gender" value="f"> Female</td>
    </tr>
<tr>
<td>UNIVERSITY REG NO.:</td>
 <td><input id="text" type="text" name="regno" size="17"
 maxlength="30" style="color:black"/></td></tr>

<tr>
<td>DEPARTMENT:</td>
 <td><select name="depart">
  <option value="submit">Computer Science</option>
  <option value="submit">Computer Engineering </option>
  <option value="submit">Software Engineering </option>
  <option value="submit">Cyber Security </option>
</select></td></tr>
<tr>
<td>
YEAR:</td>
 <td>
   <select name="year">
     <option value="1st_year">1st Year</option>
     <option value="2nd_year">2nd Year</option>
     <option value="3rd_year">3rd Year</option>
     <option value="4th_year">4th Year</option>
    </select>
 </td></tr>
<tr><td>E-MAIL ID:</td>
 <td><input id="text" type="email" name="e_mail"  size="17"
 maxlength="30" style="color:black"/></td></tr>
<tr>
<td>
PASSWORD:</td>
 <td><input id="text" type="text" name="password" size="17"
 maxlength="30" style="color:black"/>
</td>
<tr>
</tr>
 <tr>

  <td><input type="submit" name="submit"
   value="SUBMIT"></td>
</tr>
<tr>
<td><a href="login.php">CLICK TO LOGIN</a> <br><br></td>
 </table>
</form>
 </fieldset>
</div>
</div>


<div align = center ; class="boxthree" style="background-color:black; border:solid 3px grey; border-radius: 6px; width:73.5%; height:40px; margin-left:13%; margin-top:20px" >
      <h4 style="margin-top: 5px ; color : #329299 ;" >Thank You For Using This System.</h4>
     </div>  
   </body> 

   <style type="text/css">
     body {
      background-image: url(alfons.jpg);
     }
 .boxone{

    width:74%;
    margin-left: 13%;
  }
  .boxtwo{
    background-size: cover;
    box-shadow:0px 0px 15px #3d351d;
    border-radius:12px;
  }
  input[type="submit"]
  {

      font-size:18px;
      text-align:left;
      border:none;
      height:20px;
      margin-left:97% ;
      margin-top: 20px;
      background:#3d351d;
      color:#FFFFFF;
      border-radius:10px;
      }
   </style>
 </html>

