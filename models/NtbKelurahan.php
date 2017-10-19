<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ntb_kelurahan".
 *
 * @property string $id_kec
 * @property string $id_kel
 * @property string $nama_kel
 */
class NtbKelurahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ntb_kelurahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kec', 'id_kel', 'nama_kel'], 'required'],
            [['id_kec'], 'string', 'max' => 7],
            [['id_kel'], 'string', 'max' => 10],
            [['nama_kel'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kec' => 'Id Kec',
            'id_kel' => 'Id Kel',
            'nama_kel' => 'Nama Kel',
        ];
    }
}
