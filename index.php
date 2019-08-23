<!DOCTYPE html>
<html>
<head>
	<title>Form Data Process</title>
	<style type="text/css">
		header{
				background-color:	#e6e6e6;
				max-width:			85%;
				height:				150px;
				padding-left:		5%;
				padding-right:		5%;
				padding-top:		1%;
				padding-bottom:		5%;
				margin:				auto;
			}
			header h1{
				text-align:			center;
			}
			header h3{
				text-align:			center;
			}
			header p{
				text-align:			center;
			}
			main{
				background-color:	rgb(255,255,255);
				max-width:			85%;
				height:				400px;
				margin:				auto;
			}
			footer{
				background-color:	#595959;
				color:				rgb(255,255,255);
				text-align:			center;
				max-width:			85%;
				height:				5px;
				padding:			5%;
				margin:				auto;
			}
	</style>
</head>
<body>
	<header>
		<h1>Form Data Process With PHP</h1>
		<h3>By David Guimaraes, Computer Engineer</h3>
		<p>This is a little project done in order to actually start doing things with the PHP
			programming language. This is a very basic app. All it does is: it gathers the data
			from an HTML form and stores the data into variables for further processing.</p>
	</header>
	<main>
		<br><br>
		<form action="main.php" method="POST">
			<label>First Name: </label> <input name="firstName" type="text"><br>
			<label>Last Name: </label> <input name="lastName" type="text"><br>
			<label>Email Adress: </label> <input name="email" type="text"><br>
			<br><br>
			<textarea name="message" rows=10 cols=30>Type something in here...</textarea>
			<br><br>
			<input type="submit">
		</form>
	</main>
	<footer></footer>
</body>
</html>