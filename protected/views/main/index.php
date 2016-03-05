
<p>Hello</p>

<?php
	$baseUrl = Yii::app()->baseUrl;
	Yii::app()->getClientScript()->registerScriptFile($baseUrl.'/scripts/test.js', 1);
?>

<button>Add</button>

<button>Remove</button>
