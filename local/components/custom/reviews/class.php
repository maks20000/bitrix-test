<?php
use Bitrix\Main\Entity;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class ReviewsComponent extends \CBitrixComponent
{
    public $reviewsTableName;
    public $connection;
    public $sqlHelper;

	public function createTable() {
        $this->connection->createTable(
            $this->reviewsTableName,
            [
                'id' => new Entity\IntegerField(
                    'id',
                    [
                        'column_name' => 'id'
                    ]
                ),
                'user_name' => new Entity\StringField(
                    'user_name',
                    [
                        'column_name' => 'user_name'
                    ]
                ),
                'text' => new Entity\StringField(
                    'text',
                    [
                        'column_name' => 'text'
                    ]
                ),
                'create_date' => new Entity\DatetimeField(
                    'create_date',
                    [
                        'column_name' => 'create_date'
                    ]
                )
            ],
            ['id'],
            ['id']
        );
    }

    public function getReviews() {
        $sql = 'SELECT * FROM '.$this->reviewsTableName;
        $db = $this->connection->query($sql);
        $result = array();
        while ($res = $db->fetch(\Bitrix\Main\Text\Converter::getHtmlConverter())) {
            $result[] = $res;
        }
        return $result;
    }

    public function addReview($fields) {
        $data = array(
            "user_name" => $fields["user_name"],
            "text" => $fields["comment"],
            "create_date" => new Bitrix\Main\Type\DateTime()
        );
        $insert = $this->sqlHelper->prepareInsert($this->reviewsTableName, $data);
        $sql = "INSERT INTO ".$this->sqlHelper->quote($this->reviewsTableName)."(".$insert[0].") ".
            "VALUES (".$insert[1].")";
        $this->connection->queryExecute($sql);
    }
}