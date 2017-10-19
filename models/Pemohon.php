<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemohon".
 *
 * @property integer $id
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property integer $id_gender
 * @property string $alamat
 * @property string $rt_rw
 * @property integer $id_kabkota
 * @property integer $id_kecamatan
 * @property integer $id_desakelurahan
 * @property string $pekerjaan
 * @property string $no_ktp
 * @property string $file_ktp
 * @property string $file_kk
 * @property string $file_photo
 */
class Pemohon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pemohon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'tempat_lahir', 'tgl_lahir', 'id_gender', 'alamat', 'rt_rw', 'id_kabkota', 'id_kecamatan', 'id_desakelurahan', 'pekerjaan', 'no_ktp', 'file_ktp', 'file_kk', 'file_photo'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['id_gender', 'id_kabkota', 'id_kecamatan', 'id_desakelurahan'], 'integer'],
            [['nama', 'alamat', 'pekerjaan', 'file_ktp', 'file_kk', 'file_photo'], 'string', 'max' => 255],
            [['tempat_lahir'], 'string', 'max' => 50],
            [['rt_rw'], 'string', 'max' => 15],
            [['no_ktp'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'id_gender' => 'Id Gender',
            'alamat' => 'Alamat',
            'rt_rw' => 'Rt Rw',
            'id_kabkota' => 'Id Kabkota',
            'id_kecamatan' => 'Id Kecamatan',
            'id_desakelurahan' => 'Id Desakelurahan',
            'pekerjaan' => 'Pekerjaan',
            'no_ktp' => 'No Ktp',
            'file_ktp' => 'File Ktp',
            'file_kk' => 'File Kk',
            'file_photo' => 'File Photo',
        ];
    }
}
