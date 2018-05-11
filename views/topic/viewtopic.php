<?php


use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Topics';
$this->params['breadcrumbs'][] = $this->title;




?>

   <?php /* echo $this->render('_search',['model'=>$searchModel]);*/?>

   <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'id'=>'grid',
        //'filterModel'=>$searchModel,
        'columns' => [
    // ...
            // 'contentOptions' => ['style' => 'width:2px;'],

           


          /* [ 'class' => 'yii\grid\CheckboxColumn',
           'options' => ['style' => 'width:2px;'],
           
           //'checkboxOptions' => function($model, $key, $index, $widget) {
            //return ['value' => $model['courseid'] ];
         //},
            

         ],*/

                
            
        // you may configure additional properties here
           
                // 'courseid',
               // 'topicname',
                  [
                     'headerOptions' => ['width' => '150'],
                'attribute'=>'topicname',
                'format'=>'raw',
                'value'=> function($data)

                 {
                    return
                    Html::a($data->topicname,['topichome','id'=>$data->topicid]);
                 }

            ],

                /*[

                     'attribute'=>'tutorid',
                     'value'=>'tutor.tutorname',
                      'options' => ['style' => 'width:500px;'],

                ],*/

            /*    [
            'class' => 'yii\grid\ActionColumn',
             'options' => ['style' => 'width:2px;'],
            'template' => '{myButton}',  // the default buttons + your custom button
            'buttons' => [
                'myButton' => function($url, $model, $key) {     // render your custom button
                    return Html::a('Enroll',['/course/mycourse1','id'=>$model->courseid]);
                }
            ],
        ],*/
      
            

            
        ]
    ]); ?>

    <?php Pjax::end();?>
