<!DOCTYPE html>
<head>
<title>Random Dice Generator</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>

<?php 

$array = array(
			'4'  => 'images/d4.png',
			'6'  => 'images/d6.png',
			'8'  => 'images/d8.png',
			'10' => 'images/d10.png',
			'12' => 'images/d12.png',
			'20' => 'images/d20.png'
);

?>
<div class="row">
  <div class="col-md-6">
  	<?php foreach ($array as $key=>$value) { ?>
	  <div class="row">
		<div id="button" class="col-xs-6"> 
		  <button type="button" <?php echo 'id='.$key?> class="btn btn-default btn-lg">
			<img src=<?php echo $value ?> alt="d4" width="100" height="75" border="0" />
		  </button>
		</div>
	  </div>
	<?php } ?>
  </div>
  <div class="col-md-6">
	<span id="answer"></span>
  <div>
<div>

<script>

$(document).ready(function(){
	$('button').on('click', function(e) {
		var diceId = (e.currentTarget.id);
		randomNumber = Math.floor(Math.random() * diceId ) + 1;
		console.log(randomNumber);
		var el = document.getElementById("answer");
		el.innerHTML = " = " + randomNumber;
	});
});
</script>
</body>
