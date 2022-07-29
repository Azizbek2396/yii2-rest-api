<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <button id="send-api">Meni bos</button>

    <code><?= __FILE__ ?></code>
</div>

    <script>
        $('#send-api').on('click', function (event){
           $.ajax({
               url: 'http://10.frontend-yii2.loc/posts',
               type: 'GET',
               dataType: 'json',
               success: function (data) {
                   console.log(data);
               }
           })
        });
    </script>