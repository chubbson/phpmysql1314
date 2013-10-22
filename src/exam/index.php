<?php

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ex had</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" media="all" />
		<script type="text/javascript">
			  // ref: http://diveintohtml5.org/detect.html
		  function supports_input_placeholder()
		  {
		    var i = document.createElement('input');
		    return 'placeholder' in i;
		  }

		  if(!supports_input_placeholder()) {	
		    var fields = document.getElementsByTagName('INPUT');
		    for(var i=0; i < fields.length; i++) {
		      if(fields[i].hasAttribute('placeholder')) {
		        fields[i].defaultValue = fields[i].getAttribute('placeholder');
		        fields[i].onfocus = function() { if(this.value == this.defaultValue) this.value = ''; }
		        fields[i].onblur = function() { if(this.value == '') this.value = this.defaultValue; }
		      }
		    }
		  }
		</script>
	</head>
	<body>
		<h1>Exam</h1>
		<?php
			$isLoggedIn = 0; 
			//do some session checks. 

		if($isLoggedIn == 0)
		{

		?>

		<form enctype="multipart/form-data" class="form" action="index.php" method="POST">
	
			<p class="username">
				<input type="text" name="user" id="user" placeholder="user" required/>
				<label for="user">Name</label>
			</p>
			
			<p class="password">
				<input type="password" name="pass" id="pass" required/>
				<label for="pass">Password</label>
			</p>
			<p class="submit">
				<input type="submit" value="Login" />
			</p>
		</form>

		<?php

			echo "User: ";
			// do some logout stuff.. session destroy unset etc - button or link or whatever
			echo "Logout";
		?>

		<?php
			// show all Blog MessagesMessages
		    // BlogCtx Operations
		?>
	</body>
</html>