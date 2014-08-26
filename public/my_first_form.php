<?php

	var_dump($_POST);
	var_dump($_GET);

?>
<html>
	<head>
		<title>My First Form</title>
	</head>
	<body>

		<h2>User Login</h2>

		<form method="POST" action="/my_first_form.php">
		    <p>
		        <label for="username">Username</label>
		        <input id="username" name="username" type="text">
		    </p>
		    <p>
		        <label for="password">Password</label>
		        <input id="password" name="password" type="password">
		    </p>
		    <p>
		        <input type="submit" value="Login">
		    </p>
		</form>


	<h2>Compose an email</h2>
	<form method="POST" action="my_first_form.php">
		<p>
			<label for="to">To:</label>
			<input type="email" id="to" name="to" placeholder="enter email address">
			<label for="from">From:</label>
			<input type="email" id="from" name="from" placeholder="enter email address">
		</p>
		<p><label for="subject">Subject</label>
			<input type="text" id="subject" name="subject">
		</p>
		<p>
			<label for="body">Body:</label>
			<textarea name="body" id="body" cols="30" rows="10"></textarea>
		</p>
		<p>
			<input type="submit">
		</p>
		<p>
			<label for="sent"><input type="checkbox" id="sent" name="sent" checked>Save a copy to your sent box.</label>
		</p>
	</form>

	<h2>Multiple Choice Test</h2>
	<form action="my_first_form.php" method="POST">
	<ol>
		<li>
<!-- Remember to label the 'names' and and 'values' to make sense to my future self -->
			<p>Which OS are you using?</p>
			<label for="question1"><input type="radio" name="question1" value="1">Windows</label>
			<label for="question1"><input type="radio" name="question1" value="2">Mac OS X</label>
			<label for="question1"><input type="radio" name="question1" value="3">Linux</label>
			<label for="question1"><input type="radio" name="question1" value="4">Other</label>
		</li>
		<li>
			<p>Question 2</p>
			<label for="question2"><input type="radio" name="question2" value="1">Answer1</label>
			<label for="question2"><input type="radio" name="question2" value="2">Answer2</label>
			<label for="question2"><input type="radio" name="question2" value="3">Answer3</label>
			<label for="question2"><input type="radio" name="question2" value="4">Answer4</label>
		</li>
		<li>
			<p>Question 3</p>
			<label for="question3"><input type="radio" name="question3" value="1">Answer1</label>
			<label for="question3"><input type="radio" name="question3" value="2">Answer2</label>
			<label for="question3"><input type="radio" name="question3" value="3">Answer3</label>
			<label for="question3"><input type="radio" name="question3" value="4">Answer4</label>
		</li>		
		<li>
			<p>Question 4</p> <!-- remember that for a checkbox, the name should be an array -->
			<label for="question4"><input type="checkbox" name="question4[]" value="1">Answer1</label>
			<label for="question4"><input type="checkbox" name="question4[]" value="2">Answer2</label>
			<label for="question4"><input type="checkbox" name="question4[]" value="3">Answer3</label>
			<label for="question4"><input type="checkbox" name="question4[]" value="4">Answer4</label>
		</li>
		<li>		
			<label for="selection">Did you like the test?</label>
			<select name="selection" id="selection">
			<option value="yes">yes</option>
			<option value="no">no</option>
		</select>
		</li>

	</ol>
	<input type="submit">
	</form>

	<h2>Select Testing</h2>
	<form method="POST">
		<label for="selct_test">Please select yes or no, depending on how you're feeling.</label>
		<select name="select_test" id="select_test">
			<option value="1">yes</option>
			<option value="0" selected>no</option>
		</select>
		<input type="submit">
	</form>



	</body>
</html>