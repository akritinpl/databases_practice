<!DOCTYPE html>
<html>
<head>
    <title>Add Input</title>
</head>
<body>
<form method="POST">
Number 1: <input type="text"> name="num1"><br>
Number 2: <input type="text"> name="num2"><br>
<input type="submit">
<p>The sum is: <?php echo $_POST["num1"] + $_POST["num2"]; ?></p>
</form>
</body>
</html>