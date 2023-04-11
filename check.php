<?php

require 'CaptchasDotNet.php';

// Pobranie danych z formularza i przekazanie ich do zmiennych
$message       = $_REQUEST['message'];
$password      = $_REQUEST['captcha'];
$random_string = $_REQUEST['random'];

$captchas = new CaptchasDotNet ('mrDernizer', 'mrdernizer@gmail.com',
                                '/tmp/captchasnet-random-strings','3600',
                                'abcdefghkmnopqrstuvwxyz','6',
                                '240','80','000088');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PPHU KOLO Figury ogrodowe Borów Wielki</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery.js"></script>
</head>
<body>
  <header id="start">
		<h2 class="logo">PPHU KOLO</h2>
		<h3 class="logo">Figury ogrodowe w Borowie Wielkim</h3>
		</nav>
	</header>

<?php
  // Check the random string to be valid and return an error message
  // otherwise.
  if (!$captchas->validate ($random_string))
  {
    echo 'The session key (random) does not exist, please go back and reload form.<br/>';
    echo 'In case you are the administrator of this page, ';
    echo 'please check if random keys are stored correct.<br/>';
    echo 'See http://captchas.net/sample/php/ "Problems with save mode"';
  }
  // Check, that the right CAPTCHA password has been entered and
  // return an error message otherwise.
  elseif (!$captchas->verify ($password))
  {
    echo 'You entered the wrong password. Aren\'t you human? Please use back button and reload.';
  }
  // Return a success message
  else
  {
    echo 'Your message was verified to be entered by a human and is "' . $message . '"';
  }
?>

</body>
</html>

