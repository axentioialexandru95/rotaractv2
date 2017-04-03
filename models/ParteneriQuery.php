<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Parteneri]].
 *
 * @see Parteneri
 */
class ParteneriQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Parteneri[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Parteneri|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
