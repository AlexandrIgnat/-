<?php

namespace app\models;

use yii\db\ActiveRecord;


class Task extends ActiveRecord
{
	public static function tableName()
	{
		return'{{tasks}}';
	}

public function attributeLabels() {
return [
 "id" => "Идентификатор",
 "from_user_id" => "От кого задача",
 "to_user_id" => "Кому поставлена задача",
 "text" => "Текст задачи",

];
}



}
?>