<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar{
            display: grid;
            grid-template-columns: 10% 10% 10% 10% 10% 50%;
            height: 15%;
            align-items: center;
        }

        .logo{
            grid-column:2/4;
            height:50px;
        }
        .menu{
            height: 75%;
            grid-column: 6/-1;
            display: grid;
            grid-template-columns: repeat(5,1fr);
            align-items: center;
            justify-content: space-between;
        }
        img{
            height: 80%;
        }

        a{
            text-decoration: none;
            color:black;
            font-weight: bold;
        }

        a:hover{
            text-decoration: underline;
            cursor:default;
        }

        a:visited{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="navbar">
            <div class="logo">
                <img src="images/logo.jpeg" alt="IIITDM LOGO">
            </div>
            <div class="menu">
                <div class="menu-items"><a href="home-page.php">Home</a></div>
                <div class="menu-items"><a href="account.html">Account</a></div>
                <div class="menu-items"><a href="courses.html">Courses</a></div>
                <div class="menu-items"><a href="clubs.html">Clubs</a></div>
                <div class="menu-items"><a href="to-do.html">To-Do</a></div>
            </div>
        </div>
    </div>
</body>
</html>