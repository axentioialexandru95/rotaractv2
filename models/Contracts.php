<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "contracts".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $company_address
 * @property integer $company_nr
 * @property integer $CUI
 * @property string $company_representative
 * @property string $representative_function
 * @property integer $payment
 */
class Contracts extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contracts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'company_address', 'company_nr', 'CUI', 'company_representative', 'representative_function', 'payment'], 'required'],
            [['company_nr', 'CUI', 'payment'], 'integer'],
            [['company_name', 'company_address', 'company_representative', 'representative_function'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'company_address' => 'Company Address',
            'company_nr' => 'Company Nr',
            'CUI' => 'Cui',
            'company_representative' => 'Company Representative',
            'representative_function' => 'Representative Function',
            'payment' => 'Payment',
        ];
    }

    /**
     * @inheritdoc
     * @return ContractsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContractsQuery(get_called_class());
    }
}
