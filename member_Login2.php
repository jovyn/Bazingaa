<html>
<head>
<title>Member Login Page</title>
<style>
         #login_id {
            font: 15px arial, sans-serif;
	    align: left;
            border-radius: 15px 50px 30px 5px;
            background: #00BFFF;
            padding: 20px; 
            width: 250px;
            height: 250px; 
         }
</style>
</head>
<body bgcolor="#0489B1">
<h1><font face="arial"> Bazingaa !!</font></h1>
<h3><font face="arial">Enter your credentials to Login ...</font></h3>
<form id="login_id" name="login_form" method="POST" action="afterlogin.php">
<p style="text-align:left;"> Username: <input name="username" type="text" id="userid"></p>
<p style="text-align:left;"> Password: <input name="passname" type="password" id="passid"></p>
<p style="text-align:left;"> Enter Secret Code: <input name="textname" type="text" id="textid"></p><br>
<p style="text-align:left;"> <input id="idlogin" name="login" type="submit" value="Login"> </p>
</form>
</table>
<!DOCTYPE html><?php 
session_start();
if ($_GET["message"] && $_GET["message"] != "") {
    echo '<h4><font color="#8A0808"> Authentincation Error!!</font></h4>';
    echo '<h6><font color="#8A0808"> The answer ';
    echo $_GET["message"];
	echo ' is incorrect !</font></h6>';
}
?>
</body>
</html>
