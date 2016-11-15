<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form № 1</title>
</head>
<body>
<h2>Form № 1</h2>
<div class="message">
<?php $message = $this->beginWidget('CActiveForm'); ?>

<?php echo $message->errorSummary($model); ?>
<div class="row">
    <?php echo $message->label($model,'title'); ?>
    <?php echo $message->textField($model,'title') ?></div>
<div class="row">
    <?php echo $message->label($model,'description'); ?>
    <?php echo $message->textArea($model,'description'); ?></div>
<div class="row">
    <?php echo $message->label($model,'message'); ?>
    <?php echo $message->textField($model,'message') ?></div>
    <div class="row">
    <?php echo $message->label($model,'message'); ?>
    <?php echo $message->textField($model,'message') ?></div>
    <div class="row">
    <?php echo $message->label($model,'message'); ?>
    <?php echo $message->textField($model,'message') ?></div>
<div class="row submit">
<?php echo CHtml::submitButton('Send'); ?>
</div>
<?php $this->endWidget(); ?></div>
<!-- form -->
</body>
</html>
