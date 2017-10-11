<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo url('type/a') ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>头像</td>
				<td><input type="file" name="file-name"></td>
			</tr>
			
			<tr>
				<td>尼玛</td>
				<td><input type="text" name="a"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>