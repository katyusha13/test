<html>
<head>
<link rel="stylesheet" href="css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="ajax/script.js"></script>
</head>
<body>
<table width=100% height=100%>
<tr><td align=center>
<h2>Гостевая книга</h2>

<div class="container">
	<h4>Добавьте отзыв</h4>
	<form  id="ajax-review" method="POST">
	    <p><input required="required " type="text" placeholder="Ваше имя" name="name" id="name"/></p>
	    <p><textarea required="required" placeholder="Сообщение" name="body" id="body" rows="10" cols="45"></textarea></p>
	    <button>Отправить</button>
	</form>
	<p class="review-success-sent" style="display: none;">Ваш отзыв отправлен!</p>

</div>
<div id="append-ajax-data"></div>

</td></tr>

</table>
</body></html>