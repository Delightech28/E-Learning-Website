
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        ::-webkit-scrollbar{
            display: none;
        }

        body{
            box-sizing: border-box;
            background-color:rgb(255, 252, 252);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Montserrat', sans-serif;
        }

        .container{
            background-color: #FFFFFF;
            height: 500px;
            width: 380px;
            border-radius: 20px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }

        form{
           padding: 30px;
        }

        h1{
            font-weight: bold;
            font-size: 25px;
        }

        input{
            height: 32px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #D3D3D3;
            outline: none;
        }

        .password{
            margin-top: 20px;
        }

        .email{
            margin-top: 20px;
        }

        button{
            margin-top: 25px;
            height: 35px;
            width: 310px;
            background-color: #008080 ;
            color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            border: none;
        }

        hr{
            width: 120px;
        }

        .or{
            display: flex;
            justify-content: center;
            color: grey;
            margin-top: 17px;
           
        }

        .social-container{
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .social-container a{
                border: 1px solid #DDDDDD;
                border-radius: 50%;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin: 0 10px;
                height: 40px;
                width: 40px;
            }

            p{
                text-align: center;
                color: grey;
                margin-top: 15px;
                letter-spacing: 2px;
            }

            p a{
                text-decoration: none;
                font-weight: bold;
                color: grey;
            }

    </style>
</head>
<body>
    <div class="container">
        <form action="signup.php" method="POST">
            <h1>SIGN UP</h1>
            <div class="name">
            <label for="name">Name</label> <br>
            <input type="text" id="name" name="name">
        </div>
        <div class="email">
            <label for="email">Email</label> <br>
            <input type="email" id="email" name="email">
        </div>
        <div class="password">
            <label for="password">Password</label> <br>
            <input type="password" id="password" name="password" >
        </div>          
            <button type="submit" name="submit" style="cursor:pointer;">SIGN UP</button> 
        <div class="or">
            <hr>
            <span>OR</span>
            <hr>
        </div>
        <div class="social-container">
                    <a href="#" class="social" style="color:blue;"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social" style="color:red;"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social" style="color:#0A66C2;"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>
                Already a user? <a href="login.php">LOGIN</a>
            </p>
        </form>
    </div>
    
    <script scr="assets/bootstrap.min.js"></script>
    <script src="assets/all.min.js"></script>
</body>
</html>
