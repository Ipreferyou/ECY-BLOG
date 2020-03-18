<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            form
            {
                width:100%;
                height:700px;
                 margin-top: 0px;
                background:#008B8B;
            }
            div
            {
                display:inline-block;
                padding-top: 80px;
                padding-right: 20px;
                
            }
            h2
            {
                font-family: "Î¢ÈíÑÅºÚ";
            font-size: 40px;
                color:black;
            }
            #log
            {
                color:blue;
            }
        </style>
    </head>
    <body>
        <form action="admin.php" method="post">
            <center>
            <div>
            <h2>
                    LTLT_Blog_Welcome!
            </h2>
            <p>
                username:<input type="text" name='username'/>
            </p>
            <p>
                password:<input type="password" name='password'/>
            </p>
            <p>
                <input id=log type="submit" value="login" />
            </p>
            </div>
            </center>
        </form>
    </body>
</html>