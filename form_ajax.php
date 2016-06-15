<?php 
	if (isset($_POST['a']) && isset($_POST['b'])) {
		echo ($_POST['a']+$_POST['b']);
		exit();
	}		
?>
<html>

	<head>
		<title>ajax表單加法</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type='text/javascript'>
			var xhr;
			function run_ajax(){
				//create new XMLHttpRequest object
				//if using IE5/6 to set xhr object, it should use some try/catch to handle the condition
				xhr = new XMLHttpRequest();
				if(xhr.overrideMimeType){
					xhr.overrideMimeType('text/xml');
				}

				//set onready state and call getData()
				xhr.onreadystatechange = getData;

				//set ajax para. & header encoded
				xhr.open('post','form_ajax.php',true);
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');

				//get a,b value & send request
				a = document.getElementById('a').value;
				b = document.getElementById('b').value;
				xhr.send('a='+a+'&b='+b);
			}

			//define getData function
			function getData(){
				if(xhr.readyState == 4){//get all responsed data
					if(xhr.status == 200){
						document.getElementById('show').innerHTML = xhr.responseText;
					}
				}
			}
		</script>
	</head>
	<body>
		
			<input type="num" name="a" id='a'>+
			<input type="num" name="b" id='b'>
			<button type="submit" onClick="run_ajax();">=</button>
			<span id='show'>?</span>
		
	</body>
</html>