<?php
namespace app\models;

class MyList  extends \yii\db\ActiveRecord{


    public  static  function tableName()
    {
        return 'list';
    }

    public static function  getALL()
    {
        $data = self::find()->all();
        return $data;
    }

    public static function getOne($id){
        $data = self::find()
            ->where(['id'=>$id])
            ->one();
        return $data;
    }
}