<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Full-page background blur */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('sun.JPEG'); /* Replace with your image */
            background-size: cover;
            backdrop-filter: blur(5px); /* Add blur effect */
        }

        /* Form styling */
        form {
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent background for form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        /* Center align form elements */
        form p {
            text-align: center;
        }

        /* Input style */
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Link style */
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    
    <form action="process.php" method="post">
                 <h1>Login</h1>
        <p>Username: <input type="text" name="username"></p>
        <p>Password: <input type="password" name="password"></p>
        <p><input type="submit" value="Login"></p>
        <p>Don't have an account? <a href="register.html">Register</a></p>
    </form>
</body>
</html>