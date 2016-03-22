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
   
   textarea { 
   	resize: none; 
   }
  
   .main {
    margin: 5% 5% 5% 15%; /* Отступы вокруг элемента */
    width: 400px;
    /*border: 3px solid #666; /* Параметры рамки */
    padding: 10px; /* Поля вокруг текста */
   }
   #good {
   	padding-top: 15px;
   }
   
  </style>
  
  <script>
	$(document).ready(function(){
		$('#ok').hide();
		$('body').click(function(){
			//$('#form').hide();
			$('#ok').show();
		});
		
		var name = $('#name').val();
		if ( name !== '' ) {
			$('#submit').attr('disabled', false);
		} else {
			$('#submit').attr('disabled', true);
			$('#submit').attr('title', 'Заполните все поля');
		}
	});
  </script>
  
  <title>Send Mail</title>
  
</head> 

<body>
<div class="main">
	<div class="panel panel-success">
  		<div class="panel-heading">
    		<h3 class="panel-title"><strong>Отправить сообщение</strong></h3>
  		</div>
	
		<div class="panel-body">
			<form action="" method="POST" id="form">
	
			<p>
			  <input type="text" name="name" id="name" class="form-control" value="" placeholder="Имя">
			</p>

			<p>
			  <input type="text" name="email" id="email" class="form-control" value="" placeholder="e-mail">
			</p>
	
			<p>
			  <input type="text" name="subject" id="subject" class="form-control" value="" placeholder="Тема">
			</p>

			<p>
			  <textarea id="textarea" class="form-control" placeholder="текст сообщения" rows="6"></textarea>
			</p>

			<div align="right">
				<input class="btn btn-success" type="submit" name="submit" id="submit" value="Отправить">
			</div>
	
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
