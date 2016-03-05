<!DOCTYPE html>
<html>
<head>
	<?php
		$baseUrl = Yii::app()->baseUrl;
		Yii::app()->getClientScript()->registerScriptFile($baseUrl.'/scripts/jquery.js');
		Yii::app()->getClientScript()->registerScriptFile($baseUrl.'/scripts/underscore.js');
		Yii::app()->getClientScript()->registerScriptFile($baseUrl.'/scripts/backbone.js');
	?>
	<title>title</title>
</head>


<body>
<p>Hi</p>
<?php
echo $content;
?>
</body>
</html>
