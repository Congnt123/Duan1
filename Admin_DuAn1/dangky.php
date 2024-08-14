<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
/* style signup */
.signup {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #f5f5f5;
}
.signup__container {
  width: 100%;
  max-width: 400px;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.signup__container h1 {
  margin-bottom: 20px;
  font-size: 2rem;
  text-align: center;
}
.signup__container form {
  display: flex;
  flex-direction: column;
}
.signup__container form label {
  margin-bottom: 10px;
  font-size: 1.2rem;
}
.signup__container form input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}
.signup__container form button {
  padding: 10px;
  border: none;
  border-radius: 5px;
  background: #333;
  color: #fff;
  font-size: 1.2rem;
  cursor: pointer;
}
.signup__container form button:hover {
  background: #555;
}
.signup__container form a {
  text-align: center;
  font-size: 1.2rem;
  text-decoration: none;
  color: #333;
}
.signup__container form a:hover {
  color: #555;
}
.signup__registerButton {
  margin-top: 20px;
  padding: 10px;
  border: none;
  border-radius: 5px;
  color: black;
  font-size: 1.2rem;
  cursor: pointer;
  display: block;
} 
    </style>
</head>
<body>

<div class="signup">
      <div class="signup__container">
        <h1>Đăng Ký</h1>
        <form action="login.html"method="POST">
          <h5>Tên tài khoản</h5>
          <input type="text" id="username" name="username" required>
          <h5>gmail</h5>
          <input type="text" id="namegmail" name="namegmail" required>
          <h5>Số điện thoại</h5>
          <input type="text" id="phone" name="phone" required>
          <h5>Password</h5>
          <input type="password" id="password" name="password" required>
          <button type="submit" class="signup__signInButton">Đăng Ký</button>
        </form>
      
      </div>
    </div>



    <!-- <h3>Đăng Ký</h3>
    <div class="container">
        <form action="dangnhap.php" method="POST" class="register-form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Đăng Ký</button>
        </form>
    </div> -->
</body>
</html>
