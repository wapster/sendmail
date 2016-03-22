<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <link href="../css/style.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!-- <script src="/js/jquery-1.2.1.min.js"></script> -->


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <!-- <script src="/js/bootstrap.min.js"></script> -->
  
  <style>
   body { 
    margin: 0; /* Убираем отступы */
   }
   .main {
    margin: 5% 5% 5% 15%; /* Отступы вокруг элемента */
    width: 400px;
    /*border: 3px solid #666; /* Параметры рамки */
    padding: 10px; /* Поля вокруг текста */
   }
   #good {
   	padding-top: 20px;
   }
   
  </style>
  
  <script>
	$(document).ready(function(){
		$('#ok').hide();
		$('body').click(function(){
			$('#form').hide();
			$('#ok').show();
		});
	});
  </script>
  
  <title>Send Mail</title>
  
</head> 

<body>
<div class="main">
	<div class="panel panel-success">
  		<div class="panel-heading">
    		<h3 class="panel-title">Отправить сообщение</h3>
  		</div>
	
		<div class="panel-body">
			<form action="" method="POST" id="form">
	
			<p>
			  <input type="text" name="name" id="name" value="" placeholder="Имя">
			</p>

			<p>
			  <input type="text" name="email" id="email" value="" placeholder="e-mail">
			</p>
	
			<p>
			  <input type="text" name="subject" id="subject" value="" placeholder="Тема">
			</p>

			<p>
			  <textarea placeholder="текст сообщения"></textarea>
			</p>

			<input class="btn btn-success" type="submit" name="submit" id="submit" value="Отправить">
	
			</form>
			
			<div id="good">
			<div class="alert alert-success" role="alert" id="ok">
				<span class="alert-link">Сообщение отправлено. Спасибо.</span>
			</div>
			</div>

		</div>
	</div>
</div>

</body>
</html>
