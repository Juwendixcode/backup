<!DOCTYPE html>
<html>
    <head>
        <title>Kasir Kober Mie Setan</title>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='shortcut icon' href='img/'/>

        <link rel="stylesheet" type='text/css' href="css/jquery-ui.css">
        <link rel="stylesheet" type='text/css' href="css/bootstrap.min.css">

        <script src='js/jquery-2.1.1.min.js'></script>
        <script src="js/jquery-ui.js"></script>
        <script src='js/bootstrap.min.js'></script>

        <link rel='stylesheet' type='text/css' href='css/style.css'>
    </head>
    <body style="color: white">
        <div class="wrapper">
            <div class="container kolom">
                <div id="kolom">
                    <h1 style="margin-bottom: 0;"><b>Kober</b></h1>
                    <h1 style="margin-top: 0; margin-bottom: 50px"><b>Mie Setan</b></h1>
                    	
                    <form id="login" method="post" action="login.php">
                        <ul>
                            <h5><b>USERNAME</b></h5>
                            <input type="text" name="username" placeholder="Username" required>
                        </ul>
                        <ul>
                            <h5><b>PASSWORD</b></h5>
                            <input type="password" name="password" placeholder="Password" required>
                        </ul>
                        <ul>
                            <button type="submit" name="login" value="Log in" id="loginbutton">Login</button>
                        </ul>
                    </form>		
                </div>
            </div>
        </div>
    </body>
</html>
