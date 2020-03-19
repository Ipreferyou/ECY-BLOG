<script language="javascript">
function randompic()
{
	var i = Math.floor(Math.random()*5);
	var src = "";
	switch(i)
	{
		case 0 :
		src = "TP/0.jpg";
		break;
		case 1 :
		src = "TP/1.jpg";
		break;
		case 2 :
		src = "TP/2.jpg";
		break;
		case 3 :
		src = "TP/3.jpg";
		break;
		case 4 :
		src = "TP/4.jpg";
		break;	
	}
	document.body.background=src;
	setTimeout("randompic()",1000);
}
</script>