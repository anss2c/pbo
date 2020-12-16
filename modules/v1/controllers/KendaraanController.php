<?php

namespace app\modules\v1\controllers;

use app\helpers\BehaviorsFromParamsHelper;
use yii\rest\ActiveController;
/**
 * KendaraanController implements the CRUD actions for Kendaraan model.
 */
class KendaraanController extends ActiveController
{
    /**
     * {@inheritdoc}
     */
	public $modelClass='app\models\Karyawan'; 
	public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors = BehaviorsFromParamsHelper::behaviors($behaviors);
        return $behaviors;
    }
    
}
