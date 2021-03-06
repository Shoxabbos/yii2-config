<?php

namespace shoxabbos\config;

use Yii;

/**
 * This is the model class for table "simple_config".
 *
 * @property integer $id
 * @property string $key
 * @property string $value
 * @property string $big_value
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'simple_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key'], 'required'],
            [['key'], 'unique'],
            [['key', 'value'], 'string', 'max' => 255],
            [['big_value'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'key' => Yii::t('app', 'Key'),
            'value' => Yii::t('app', 'Value'),
            'big_value' => Yii::t('app', 'Big Value'),
        ];
    }

    /**
     * @param $key
     * @param null $value
     * @return mixed|null|Config|static
     */
    public function get($key, $value = null, $cacheDuration = 3600) {

        $config = Yii::$app->cache->get('config-'.$key);

        if ($config === false) {
            $config = self::findOne(['key' => $key]);
            Yii::$app->cache->set('config-'.$key, $config, $cacheDuration);
        }

        if (!$config) {
            $config = new self();
        }

        if ($value) {
            return $config->getAttribute($value);
        }

        return $config;
    }

    /**
     * @param $key
     * @param null $value
     * @param null $bigValue
     * @return Config
     */
    public function set($key, $value = null, $bigValue = null) {
        $config = $this->get($key);
        $config->key = $key;
        $config->value = $value;
        $config->big_value = $bigValue;
        $config->save();

        return $config;
    }

}
