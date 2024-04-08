<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
<form action="" method="get">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <button type="submit">Submit</button>
</form>

<h2>Received Data</h2>
<ul>
    <li>Using $_REQUEST: <?php echo isset($_REQUEST['name']) ? $_REQUEST['name'] : 'Not provided'; ?></li>
    <li>Using $_REQUEST: <?php echo isset($_REQUEST['email']) ? $_REQUEST['email'] : 'Not provided'; ?></li>
    <li>Using $_REQUEST: <?php echo isset($_REQUEST['name']) ? $_REQUEST['name'] : 'Not provided'; ?></li>
</ul>
</body>
</html>


