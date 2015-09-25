<!DOCTYPE html>
<html>
    <head>
        <title>MTISS System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="small.css"/>
        <link type="text/css" rel="stylesheet" href="css/large.css"/>
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(':submit').click(function (event) {
                    event.preventDefault();
                    alert("On Testing");
                    return false;
                    
                });
            });

        </script>
    </head>
    <body>
        <div class="loginIcon">
            <img src="images/MTISS logo.png"/>
        </div>
        <div class="loginForm">
            <form>
                <label>Username</label>
                <p><input type="text" name="username" required=""/></p>
                <label>Password</label>
                <p><input type="password" name="password" required=""/></p>
                <p><input type="submit" value="login"/></p>
            </form>
        </div>



    </body>
</html>
