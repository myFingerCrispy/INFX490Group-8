<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">


<html>
<head>
	<link rel="stylesheet" type="text/css" href="testing.css">
	<title>Menu Tester</title>
</head>
<h1>This is for testing menu operations.</h1>
<body>
	<form action="connectForm.php" method="post">
		
		<b>Where is the incident?</b>
		<div class="addr1">
			
			<label for="address1">Address (line 1)</label>
			<input type="text" name="address1" id="address1" size="50">
		</div>

		<div class="addr2">
			<label for="address2">Address (line 2)</label>
			<input type="text" name="address2" id="address2" size="50">
		</div>

		<label for="zip">Zip</label>
		<input type="text" name="zip" id="zip" size="5">
		<br>

		<label for= "city">City</label>
		<input type="text" name="city" id="city" size="20">
		<br>

		<label for= "state">State</label>
		<input type="state" name="state" id="state" size="20">
		<br>
		</div>

		<label for="complaintType">Lawn (Fire Dept)</label>
		<input type="radio" name="complaintType" value="lawn">

 		<div class="dropdown">
  			<button class="drop">Lawn and Land Complaints</button>
  		</div>
  		<div class="dropcontent">

    		<label for="tallgrass">Tall Grass</label>
    		<input type="radio" name="issue" id="tallgrass" value="tallgr">
    		<br>

    		<label for="lawndmg">Lawn Damage</label>
    		<input type="radio" name="issue" id="lawndmg" value="lawndmg">
  			<br>

    		<label for="garbage">Garbage Violation</label>
    		<input type="radio" name="issue" id="garbage" value="garbage">
    	</div>
	
	

	<div>
		<label for="complaintType">Sewer and Drainage</label>
		<input type="radio" name="complaintType" id="sewer" value="sewer">
	</div>

	<div>
		<label for="complaintType">Electrical</label>
		<input type="radio" name="complaintType" id="electrical" value="elec">
	</div>

		
			<label for="complaintType">Road</label>
			<input type="radio" name="complaintType" id="road" value="road">

			<div></div>
			<label for="desc">Additional info / description of problem</label>
			<br>
			<textarea cols="50" rows="5" id= "desc" name="desc"></textarea>

			<div></div>
	<input type="submit" name="submit">
		</form>
	</body>

</html>