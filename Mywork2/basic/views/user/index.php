<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1>user/index</h1>
<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
  <?php $form = ActiveForm::begin(); ?>
      <?php 
   
     foreach ($data as $record){ 
      echo $form->field($record, 'name')->checkbox()->label($record->name);
         }
     ?>
  <div class="form-group">
        <?= Html::submitButton('submit', ['class' => 'btn btn-primary']) ?>
      <?= Html::a('Create User ', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
  <?php ActiveForm::end(); ?>