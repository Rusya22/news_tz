<h2>Регістрація</h2>
<?php
use \yii\widgets\ActiveForm;
?>

<?php
$form=ActiveForm::begin(['class'=>'form-horizontal']);
?>
<?= $form->field($model,'username')->textInput()->hint('Імя')?>
<?= $form->field($model,'email')->textInput(['autofocus'=>true])?>
<?= $form->field($model,'password')->passwordInput()?>

<div>

    <button type="submit" class="btn btn-primary"></button>

</div>


    <?php
    ActiveForm::end();
    ?>
