<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ntb_kecamatan".
 *
 * @property string $id_kabkot
 * @property string $id_kec
 * @property string $nama_kec
 */
class NtbKecamatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ntb_kecamatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kabkot', 'id_kec', 'nama_kec'], 'required'],
            [['id_kabkot'], 'string', 'max' => 4],
            [['id_kec'], 'string', 'max' => 7],
            [['nama_kec'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kabkot' => 'Id Kabkot',
            'id_kec' => 'Id Kec',
            'nama_kec' => 'Nama Kec',
        ];
    }
}
