<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	var sum;
	$(document).ready(function(){
		$("#button").click(function(){
			var x = (Math.floor(Math.random() * 99) + 1);
			var y = (Math.floor(Math.random() * 99) + 1);
			$("#number1").html(x);
			$("#number2").html(y);
			sum = x+y;
			return sum;
		});
		$("#send").click(function(){
			var get = $("#answer").val();
			if(sum==get){
				$("#result").html("This is correct");
				$("#result").css("color","green");
			}
			else{
				$("#result").html("That's wrong.The answer is "+sum);
				$("#result").css("color","red");
			}
		});
	});
	</script>
</head>
<body>
	<center>
		<button id="button">Random Number</button><br><br>
		<span id="number1">?</span>+<span id="number2">?</span>=
		<input type="text" id="answer"><br><br>
		<button id="send">Send Answer</button><br><br>
		Result : <span id="result"></span>
	</center>
</body>
</html>