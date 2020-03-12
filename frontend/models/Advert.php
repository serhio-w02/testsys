<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "advert".
 *
 * @property int $id
 * @property string $naslov
 * @property string $povzetek
 * @property int $avtor
 */
class Advert extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naslov', 'povzetek', 'avtor'], 'required'],
            [['avtor'], 'integer'],
            [['naslov'], 'string', 'max' => 150],
            [['povzetek'], 'string', 'max' => 600],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'naslov' => Yii::t('app', 'Naslov'),
            'povzetek' => Yii::t('app', 'Povzetek'),
            'avtor' => Yii::t('app', 'Avtor'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return AdvertQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdvertQuery(get_called_class());
    }
}
