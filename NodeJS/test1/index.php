<!DOCTYPE html>
<html>
<head>
    <title>Student Application</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
	<script src="script.js"></script>
	

    <style>
        .success-box {
            background-color: #c3e6cb;
            border-radius: 5px;
            padding: 20px;
			text-align: center;
			

        }
    </style>



</head>
<body>
    <h1>Student Application</h1>
    <form method="post" action="submit.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="majority">Majority:</label>
            <input type="text" id="majority" name="majority" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
