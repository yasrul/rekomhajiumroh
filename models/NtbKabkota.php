<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ntb_kabkota".
 *
 * @property string $id_prov
 * @property string $id_kabkot
 * @property string $nama_kabkot
 */
class NtbKabkota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ntb_kabkota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prov', 'id_kabkot', 'nama_kabkot'], 'required'],
            [['id_prov'], 'string', 'max' => 2],
            [['id_kabkot'], 'string', 'max' => 4],
            [['nama_kabkot'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prov' => 'Id Prov',
            'id_kabkot' => 'Id Kabkot',
            'nama_kabkot' => 'Nama Kabkot',
        ];
    }
}
