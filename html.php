<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            width: 350px;
            margin: 100px auto;
            padding: 30px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 25px;
            cursor: pointer;
            border-radius: 4px;
        }

        #message {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Username Verification</h2>

    <div class="form-group">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username">
    </div>

    <button type="button" id="submitBtn">Submit</button>

    <div id="message"></div>
</div>

<script src="verify_ajax.js"></script>

</body>
</html>