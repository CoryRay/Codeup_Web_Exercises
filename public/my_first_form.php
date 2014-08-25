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
			<label for="sent"><input type="checkbox" id="sent" name="sent" checked>Save a copy of this email to your sent box.</label>
		</p>
	</form>

	<h2>Multiple Choice Test</h2>
	<form action="my_first_form.php" method="POST">
	<ol>
		<li>
			<p>Which OS are you using?</p>
			<label for="question1"><input type="radio" id="question1" name="question1">Windows</label>
			<label for="question1"><input type="radio" id="question1" name="question1">Mac OS X</label>
			<label for="question1"><input type="radio" id="question1" name="question1">Linux</label>
			<label for="question1"><input type="radio" id="question1" name="question1">Other</label>
		</li>
		<li>
			<p>Question 2</p>
			<label for="question2"><input type="radio" id="question2" name="question2">Answer1</label>
			<label for="question2"><input type="radio" id="question2" name="question2">Answer2</label>
			<label for="question2"><input type="radio" id="question2" name="question2">Answer3</label>
			<label for="question2"><input type="radio" id="question2" name="question2">Answer4</label>
		</li>
		<li>
			<p>Question 3</p>
			<label for="question3"><input type="radio" id="question3" name="question3">Answer1</label>
			<label for="question3"><input type="radio" id="question3" name="question3">Answer2</label>
			<label for="question3"><input type="radio" id="question3" name="question3">Answer3</label>
			<label for="question3"><input type="radio" id="question3" name="question3">Answer4</label>
		</li>		
		<li>
			<p>Question 4</p>
			<label for="question4"><input type="checkbox" id="question4" name="question4">Answer1</label>
			<label for="question4"><input type="checkbox" id="question4" name="question4">Answer2</label>
			<label for="question4"><input type="checkbox" id="question4" name="question4">Answer3</label>
			<label for="question4"><input type="checkbox" id="question4" name="question4">Answer4</label>
		</li>

	</ol>
	</form>

	</body>
</html>