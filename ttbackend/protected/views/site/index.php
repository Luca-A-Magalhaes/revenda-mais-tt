<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>This is a REST API for Search It App</p>

<p>The avaiables endpoints are:</p>
<ul>
	<li>GET: <tt>http://ttbackend/index.php/api/trending</tt></li>
	<li>GET: <tt>http://ttbackend/index.php/api/recent</tt></li>
	<li>POST: <tt>http://ttbackend/index.php/api/search</tt></li>
</ul>

<p>For more details read the app documentation.</p>