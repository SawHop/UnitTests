<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "new".
 *
 * @property string $title
 * @property string $email
 */
class NewQwe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'new';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'email'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'email' => 'Email',
        ];
    }

    public function getTitle()
    {
        return $this->title;
    }
}
