
<!DOCTYPE html>
<!--<?php
error_reporting(-1);
ini_set('display_errors',1);
?>
-->

<html>
	<head>
	    <meta charset="utf-8">
	    <title>P2 - xkcd style password generator</title>
	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/custom.css" rel="stylesheet">
	    <script src="js/respond.js"></script>
	    <?php require 'generator.php'; ?>
	</head>
	<body>
		<div class="container">
			<h1> xkcd Password Generator </h1>
		<!-- 
		    <?php if (!empty($error_message)) { ?>
		        <p class="error"><?php echo $error_message; ?></p>
		    <?php } // end if ?> -->

		    <h2 class="bg-success"> <?= $password ?> </h2><br>

			<form class="form-inline" role="form" method='POST' action='index.php'>
				# of Words to use: <input type='text' class="form-control" name='words'><br>
				<div class="checkbox">
						<input type='checkbox' name='number'> Include a number<br>
				</div>
				 <div class="checkbox">
						<input type='checkbox' name='symbol'> Include a symbol<br>
				</div>
				<div class="form-group">
				    <button type="submit" class="btn btn-primary">Generate</button>
				</div>
			</form><br>


			<img src="images/password_strength.png" class="img-responsive" alt="Responsive image">
			
			<h3> Explanation </h3>
				<p><small>
					This comic is saying that the password in the top frames "Tr0ub4dor&amp;3" is easier for password cracking software to guess because it has less entropy than "correcthorsebatterystaple" and also more difficult for a human to remember, leading to insecure practices like writing the password down on a post-it attached to the monitor.
					In simple cases the entropy of a password is calculated as a^b where a is the number of allowed symbols and b is its length. A dictionary word (however long) has an entropy of around 65000, i.e. 16 bits. A truly random string of length 11 (not like "Tr0ub4dor&amp;3", but more like "J4I/tyJ&amp;Acy") has 94^11 = 72.1 bits. However the comic shows that "Tr0ub4dor&amp;3" has only 28 bits of entropy. Another way of selecting a password is to have 2048 "symbols" (common words) and select only 4 of those symbols. 2048^4 = 44 bits, much better than 28.
					It is absolutely true that people make passwords hard to remember because they think they are "safer", and it is certainly true that length, all other things being equal, tends to make for very strong passwords and this can confirmed by using rumkin.com's password strength checker. Even if the individual characters are all limited to [a-z], the exponent implied in "we added another lowercase character, so multiply by 26 again" tends to dominate the results.
				<br>
					Source: <a href='http://www.explainxkcd.com/wiki/index.php/936:_Password_Strength'> explainxkcd</a>
				</small>
				</p>
		<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
		</div>
	</body>
</html>
