<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body> 

	<table>
		<tr>
			<td style='width: 30%;'><img class = 'newappIcon' src='images/vsk_greentura.png.png'>
			</td>
			<td>

				<h1 id = "message"><?php echo "IOTNguyen Start UP, Hello World! This the start up project, please checking and comment"; ?>

				<h1 id = "message"><?php echo "Hello world!"; ?>

</h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>. To get started see the Start Coding guide under your app in your dashboard.
			</td>
		</tr>
        <form  name="Start">Start<><br>
            <button class="ledButton" type="button" id="3" onClick="buttonClick(this.id)">On</button>
            <lable for="tempData" name="tempData" value="tempData">
            <input style="text" name="tempData" id="tempData" value="tempData">
            <label style="text" name="humiData" id="humiData" calue="humiData">
            <input style="text" name="humiData" id="humiData" value="humiData">
            <?php 
                echo "Bang nguyen checking......" ;
               ?>
        </form><br>
	</table>
</body>
</html>
