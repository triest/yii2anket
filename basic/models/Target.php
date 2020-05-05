<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "target".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $enable
 */
class Target extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'target';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['enable'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'enable' => 'Enable',
        ];
    }

    public static function getEnabled(){
        return  Target::find()->where(['enable' => 1])->all();
    }
}
