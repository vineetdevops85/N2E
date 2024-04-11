<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOKIA to ERICSSON External Alarm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #31610a;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #346e04;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="generate_txt.php" method="post">
            <h1 align="center">NOKIA to ERICSSON</h1>
            <label for="siteid">Site ID:</label>
            <input type="text" id="siteid" name="siteid" required><br><br>
            <label for="alarm">NOKIA Alarm Input (Remove space in last):</label>
            <textarea id="alarm" name="alarm" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" name="submit" value="Download CLI">
        </form>
    </div>
</body>
</html>
