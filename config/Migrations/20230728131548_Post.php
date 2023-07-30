<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Post extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {

    $table=$this->table('post');
    
    $table->addColumn('title', 'string',[
        'null'=>false,
        'limit'=>100
    ]);

    $table->addColumn('slug', 'string',[
        'null'=>false,
        'limit'=>150
    ]);
    //pegar de quem é o usuario

    $table->addColumn('user_id', 'integer',[
        'null'=>false,
       
    ]);
    $table->addColumn('content', 'text',[
        'null'=>false,
    ]);
    //horario que criar o valor do campo
    $table->addColumn('created_at', 'timestamp', [
        'default'=>'CURRENT_TIMESTAMP',
    ]);
    //horario que atualizar o valor do campo
    $table->addColumn('update_at', 'timestamp', [
        'default'=>'CURRENT_TIMESTAMP',
        'update'=> 'CURRENT_TIMESTAMP'
    ]);

    //pegando usar_id
    $table->addForeignKey('user_id','users', 'id',[
        'delete'=>'CASCADE'
    ]);

    $table->create();

    }
}
