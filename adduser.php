<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\style.css">
</head>
<body>

<h2>REGISTRATION FORM-ADD USER</h2>
<p>Use this form to register a new user into the system</p>

<div class="container">

<form action="backend\sqlinsert.php" method="post">

<div class="row">
<div class="col-25">
<label for="fname">Name</label>
</div>
<div class="col-75">
<input type="text" id="fname" name="fname" placeholder="Your full name....">
</div>
</div>

<div class="row">
<div class="col-25">
<label for="email">Email</label>
</div>
<div class="col-75">
<input type="text" id="email" name="email" placeholder="Your email....">
</div>
</div>

<div class="row">
<div class="col-25">
<label for="phonenum">Phone Number</label>
</div>
<div class="col-75">
<input type="text" id="phonenum" name="phonenum" placeholder="Your phone #....">
</div>
</div>

<div class="row">
<div class="col-25">
<label for="city">City</label>
</div>
<div class="col-75">
<input type="text" id="city" name="city" placeholder="Your city....">
</div>
</div>

<div class="row">
<input type="submit" value="Save" name="save">
</div>
</form>
</div>
</body>
</html>

