<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class CategoryMigration_1029 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'Category',
            array(
            'columns' => array(
                new Column(
                    'categoryId',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'notNull' => true,
                        'autoIncrement' => true,
                        'size' => 11,
                        'first' => true
                    )
                ),
                new Column(
                    'category',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 255,
                        'after' => 'categoryId'
                    )
                ),
                new Column(
                    'description',
                    array(
                        'type' => Column::TYPE_TEXT,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'category'
                    )
                ),
                new Column(
                    'status',
                    array(
                        'type' => Column::TYPE_BOOLEAN,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'description'
                    )
                ),
                new Column(
                    'createdAt',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'status'
                    )
                ),
                new Column(
                    'updatedAt',
                    array(
                        'type' => Column::TYPE_DATETIME,
                        'notNull' => true,
                        'size' => 1,
                        'after' => 'createdAt'
                    )
                )
            ),
            'indexes' => array(
                new Index('PRIMARY', array('categoryId'))
            ),
            'options' => array(
                'TABLE_TYPE' => 'BASE TABLE',
                'AUTO_INCREMENT' => '2',
                'ENGINE' => 'InnoDB',
                'TABLE_COLLATION' => 'utf8_unicode_ci'
            )
        )
        );
    }
}