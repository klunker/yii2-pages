<?php

use yii\db\Migration;

/**
 * Class m200220_165834_static_pages
 */
class m200220_165834_static_pages extends Migration {

    /**
     *
     * @var string Table name 
     */
    private $_tableName;

    public function init() {
        parent::init();
        $this->_tableName = Yii::$app->getModule('pages')->tableName;
    }

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable($this->_tableName, [
            'id' => $this->primaryKey(),
            'alias' => $this->string(255)->notNull()->comment('Уникальный идентификатор страницы, отображаемый в адресной стороке, как часть строки'),
            'title' => $this->string(128)->notNull()->comment('Заголовок страницы отображаемый в title'),
            'description' => $this->string(255)->notNull()->comment('Описание страницы для отображения в meta=description'),
            'keywords' => $this->string(255),
            'h1' => $this->string(255)->notNull()->comment('Наименование'),
            'content' => $this->text()->notNull()->comment('Содержимое'),
            'date_create' => $this->dateTime()->defaultExpression('NOW()')->comment('Время создания'),
            'publish_at' => $this->dateTime()->defaultValue('0')->comment('Время публикации или 0 если не опубликовано'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        echo "m200220_165834_static_pages cannot be reverted.\n";
        $this->dropTable($this->_tableName);
        return false;
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m200220_165834_static_pages cannot be reverted.\n";

      return false;
      }
     */
}
