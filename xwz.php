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
                font-family: "微软雅黑";
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
            <form action="wzym.php" method="post">
			<center>
			<div>
			<p>
            <input type="text" placeholder="标题" name ="tit">
			</p>
			<p>
            <textarea name="con" style="margin-top: 10px" rows="24" cols="80">
			            
            </textarea>
			</p>
			<p>
            <input type="text" style="margin-top: 10px" placeholder="作者" name="zz">
			</p>
			<p>
            <input id=reg type="submit" style="margin-top: 10px" name="submit" value="post">
			</p>
			</div>
			</center>
</form>
</body>
</html>