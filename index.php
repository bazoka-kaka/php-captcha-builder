<?php

require_once 'vendor/gregwar/captcha/src/Gregwar/Captcha/CaptchaBuilderInterface.php';
require_once 'vendor/gregwar/captcha/src/Gregwar/Captcha/PhraseBuilderInterface.php';
require_once 'vendor/gregwar/captcha/src/Gregwar/Captcha/PhraseBuilder.php';
require_once 'vendor/gregwar/captcha/src/Gregwar/Captcha/CaptchaBuilder.php';
require_once 'vendor/gregwar/captcha/src/Gregwar/Captcha/ImageFileHandler.php';

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build();
echo '<pre>';
var_dump($builder->getPhrase());
echo '</pre>';
if ($builder->testPhrase($userInput)) {
  // instructions if user phrase is good
} else {
  // user phrase is wrong
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <img src="<?php echo $builder->inline(); ?>" />
</body>

</html>