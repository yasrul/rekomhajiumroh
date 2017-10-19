<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pemohon;

/**
 * PemohonSearch represents the model behind the search form about `app\models\Pemohon`.
 */
class PemohonSearch extends Pemohon
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_gender', 'id_kabkota', 'id_kecamatan', 'id_desakelurahan'], 'integer'],
            [['nama', 'tempat_lahir', 'tgl_lahir', 'alamat', 'rt_rw', 'pekerjaan', 'no_ktp', 'file_ktp', 'file_kk', 'file_photo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pemohon::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tgl_lahir' => $this->tgl_lahir,
            'id_gender' => $this->id_gender,
            'id_kabkota' => $this->id_kabkota,
            'id_kecamatan' => $this->id_kecamatan,
            'id_desakelurahan' => $this->id_desakelurahan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'rt_rw', $this->rt_rw])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'file_ktp', $this->file_ktp])
            ->andFilterWhere(['like', 'file_kk', $this->file_kk])
            ->andFilterWhere(['like', 'file_photo', $this->file_photo]);

        return $dataProvider;
    }
}
