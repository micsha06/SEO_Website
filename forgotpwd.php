<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
   <style>
	body {
    font-family: Arial, sans-serif;
    background-image: url('bg.jpg');
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgb(0, 238, 255);
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.btn {
    background-color: #4000ff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
    display: block;
    text-align: center;
}

.btn:hover {
    background-color: #0056b3;
}

.forgot-password {
    margin-top: 10px;
    text-align: center;
}

p {
    margin-top: 20px;
    text-align: center;
}
</style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Forgot Password</h2>
            <form id="password-reset-form">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Reset Password</button>
            </form>
            <p class="login-link">Remember your password? <a href="login.php">Login</a></p>
        </div>
    </div>

    <script>
        document.getElementById("password-reset-form").addEventListener("submit", function (event) {
            event.preventDefault();

           
            alert("Password reset successful!");
            window.location.href = "home.php"; 
        });
    </script>
</body>
</html>
