<?php
/* @var $this GroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groups',
);

$this->menu=array(
	array('label'=>'Create Group', 'url'=>array('create')),
	array('label'=>'Manage Group', 'url'=>array('admin')),
);


$this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'id'=>'user-grid',
    'enableSorting' => false,
	'cssFile'=>'css/gridview/styles.css',
	'template'=>'{items}{summary}{pager}',
	'columns'=>array(
	
		array(
			'name'=>'name',
			'header'=>Yii::t('common',Yii::t('common', 'Name')),
		),
	

		array(
			'class'=>'CButtonColumn',
			'header'=>Yii::t('common',Yii::t('common', 'View')),
			'template' => '{view}',	
			'htmlOptions'=>array('width'=>80,  'align'=>'center',),
			'buttons' => array(
				'view'=>array(
						'label'=>'View',
						'url'=>'Yii::app()->createUrl("/group/view", array("id" =>  $data["id"]) )',
						'imageUrl'=>'images/views.png',							       
				),		
			),	
		),


		array(
			'class'=>'CButtonColumn',
			'header'=>Yii::t('common',Yii::t('common', 'Update')),
			'template' => '{update}',	
			'htmlOptions'=>array('width'=>80,  'align'=>'center',),
			'buttons' => array(
				'update'=>array(
						'label'=>'Update',
						'url'=>'Yii::app()->createUrl("/group/update", array("id" =>  $data["id"]) )',
						'imageUrl'=>'images/update.png',							       
				),		
			),	
		),

		array(
			'class'=>'CButtonColumn',
			'header'=>Yii::t('common',Yii::t('common', 'Delete')),
			'template' => '{delete}',	
			'htmlOptions'=>array('width'=>80,  'align'=>'center',),
			'buttons' => array(
				'delete'=>array(
						'label'=>'Delete',
						'url'=>'Yii::app()->createUrl("/group/delete", array("id" =>  $data["id"]) )',
						'imageUrl'=>'images/delete.png',							       
				),		
			),	
		),

		
		

	),
	// After ajax update
	'afterAjaxUpdate'=>'js:function(id,data){
		var 
			$grid=$("#user-grid");
		
		// Modify the operation buttons.
		changeStyleAfterPageUpdate("#user-grid");
	}',

));


?>









