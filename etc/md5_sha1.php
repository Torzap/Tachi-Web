<!Doctype html>
<html>
	<head>
		<title>MD5 - SHA1</title>
		<style type="text/css">
			*{font-family:Verdana;}
			#text{width:350px;text-align:center;}
			#text2{width:300px;}
		</style>
		<script type="text/javascript">
			function SelectText(begin,end){
				ta = document.getElementById("text");
				if(ta.createTextRange){
					tr=ta.createTextRange();
					tr.move("character",begin);
					tr.moveEnd("character",end-begin);
					tr.select();
				}else if(ta.setSelectionRange){
					ta.setSelectionRange(begin,end);
				};
			};
		</script>
	<?php
	if($_POST['text'] != ''){
		if($_POST['type'] == 'md5'){
			$cnvrt = md5($_POST['text']);
			$mdsc = 'selected';
		};
		if($_POST['type'] == 'sha1'){
			$cnvrt = sha1($_POST['text']);
			$shsc = 'selected';
		};
	};
	?>
	<!-- Script created by Amir Torrez -->
	</head>
	<body>
		<div align="center" style="margin-top:10%;">
			<form method="post" class="converter">
				<label>Convert string text to MD5 o SHA1:</label><br><br>
				<select name="type">
					<option value="md5" <?php echo('.$mdsc.');?>>MD5</option>
					<option value="sha1" <?php echo('.$shsc.');?>>SHA1</option>
				</select> 
				<input type="text" id="text2" name="text" required><br><br>
				<input type="submit" value="Convert">
			</form><br>
		<?php
		if($_POST['text'] != ''){
			echo('<br><br>');
			echo('<input type="text" name="text" id="text" value="'.strtoupper($cnvrt).'" onClick="SelectText(0,50)">');
		};
		?></div>
	</body>
</html>