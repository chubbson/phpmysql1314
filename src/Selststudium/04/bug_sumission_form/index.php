<!DOCTYPE html>
<html>
<head>
	<title>Submit us your Bug!</title>
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

	<h2>Bitte melde deinen Bug mit diesem Formular</h2>
	
	<form enctype="multipart/form-data" class="form" action="filebug.php" method="POST">
	
		<p class="username">
			<input type="text" name="user" id="user" placeholder="user" required/>
			<label for="user">Name</label>
		</p>
		
		<p class="password">
			<input type="password" name="pass" id="pass" required/>
			<label for="pass">Password</label>
		</p>
		
		<p class="name">
			<input type="text" name="name" id="name" placeholder="Your Name" required/>
			<label for="name">Name</label>
		</p>
		
		<p class="email">
			<input type="email" name="email" id="email" placeholder="mail@example.com" required/>
			<label for="email">Email</label>
		</p>
		
		<p class="web">
			<input type="url" name="web" id="web" placeholder="http://www.example.com" required/>
			<label for="web">Betreffende Website</label>
		</p>		
		
		<p class="priority">
			<!--slider-->
			<input type="range" name="prioritylvl" min="1" max="10" required>
			<label for="prioritylvl">Bug Priority</label>
		</p>		
		
		<p class="bugtype">
			<!--dropdown-->
			<select name="bugtype" size="1">
			<option>Bug</option>
			<option>Change Request</option>
			<option>Task</option>
			</select>
			<label for="bugtype">Bug type</label>
		</p>	
		
		<p class="callback">
			<input type="checkbox" name="callback[]" value="callback" required><label for="repr">Rückruf erforderlich</label>
		</p>
		
		<p class="reproduzierbar">
			<!--radiobuttons-->
			<input type="radio" name="repr" value="repr" required><label for="repr">Reproduzierbar</label><br/>
			<input type="radio" name="repr" value="notrepr" required><label for="notrepr">Nicht Reproduzierbar</label><br/>
		</p>
		
		<p class="datetime">
			<!--datetime input-->
			<input type="date" name="excdate" id="excdate" placeholder="2013.01.20" />
			<label for="excdate">Exception Date</label>
		</p>
		
		
		<p class="text">
			<textarea name="text" placeholder="Fehlerreport"/></textarea>
		</p>
		
		<p class="fileupload">
			<input name="userfile" type="file" required>
			<label for="fileupload">Datei wählen</label>
		</p>
		
		<p class="submit">
			<input type="submit" value="Senden" />
		</p>
	</form>

</body>
</html>