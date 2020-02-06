<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wout Dreessen-Contact</title>
<link rel="stylesheet" type="text/css" href="pro.css">
</head>
<body>
<a class="Home-1"href="Home.html">Home</a>
<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone</p> <input type="text" name="phone">

<p>Request Phone Call:</p>
Yes:<input type="checkbox" value="Yes" name="call"><br />
No:<input type="checkbox" value="No" name="call"><br />

<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>
</body>
</html>