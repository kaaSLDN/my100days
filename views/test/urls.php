<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<h1>Generating URLs</h1>

<h3>Generating a link with URL to <i>blog</i> controller and <i>article</i> action
    with alias as param</h3>

<?= Html::a('Link Name', ['post/article', 'alias' => 'someAlias']); ?>

<h3>Current url</h3>
<?= Url::to('') ?>

<h3>Current Controller, but you can specify an action</h3>
<?= Url::toRoute(['view', 'id' => 'contact']); ?>

<h3>Current module, but you can specify controller and action</h3>
<?= Url::toRoute('post/article') ?>

<h3>An absolute route to blog/list </h3>
<?= Url::toRoute('/post/list') ?>

<h3> URL for <i>blog</i> controller and action <i>HiTech</i></h3>
<?= Url::toRoute('post/hi-tech') ?><h3>Canonical URL for current page</h3>
<?= Url::canonical() ?>

<h3>Getting a home URL</h3>
<?= Url::home() ?>

<h3>Saving a URL of the current page and getting it for re-use</h3>
<?php Url::remember() ?>
<?= Url::previous() ?>

<h3>Creating URL to <i>blog</i> controller and <i>rss-feed</i> action while URL
    helper isn't available</h3>
<?= Yii::$app->urlManager->createUrl(['post/rss-feed', 'param' => 'someParam']) ?>

<h3>Creating an absolute URL to <i>blog</i> controller and <i>rss-feed</i></h3>

<p>It's very useful for emails and console applications</p>
<?= Yii::$app->urlManager->createAbsoluteUrl(['post/rss-feed', 'param' =>
    'someParam']) ?>