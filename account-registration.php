<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>

        body{
            display:flex;
            justify-content: center;
            height: 90vh;
        }
        .container{
            display: grid;
            width: 500px;
            height:80%;
            grid-template-columns: repeat(4,1fr);
            grid-template-rows: repeat(3,1fr);
        }

        .header{
            grid-column: 2/4;
            grid-row: 1/2;
        }

        .login-form{
            grid-row: 2/3;
            grid-column: 2/4;
        }

        img{
            width: 100%;
        }

        input,select{
            width: 90%;
            padding: 8px;
            border-radius: 2px;
            border: 0.5px solid rgba(34, 32, 32, 0.192);

        }

        input[type="submit"]{
            color: white;
            background-color: rgba(0, 0, 255, 0.658);
            border: none;
        }

        a{
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div class="container">
            <div class="header">
                <img src="images/iitdmj-icon.jpg" alt="IITIDM LOGO">
            </div>

        <div class="login-form">
            <h3>User Registration</h3>
        <form action="register.php"  method="POST">
            <p><input type="text" name="fname" placeholder="First Name"></p>
            <p><input type="text" name="lname" placeholder="Last Name"></p>
            <p><input type="email" placeholder="Email"></p>
            <p>
                <select name="type" id="account-type">
                    <option value="0">*Select Account Type</option>
                    <option value="1">Teacher</option>
                    <option value="2">Student</option>
                </select>
            </p>
            <input type="text" placeholder="Roll Number / PF Number">
            <p><input type="password" placeholder="Password"></p>
            <p><input type="submit" value="Register"></p>
        </form>
        </div>
    </div>
</body>
</html>