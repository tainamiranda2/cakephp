<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change():void
    {
     $table=   $this->table( 'users');
    //adicionando colunas
     $table->addColumn('firstName', 'string', [
        'limit'=>100,
        'null'=>false,

    ]);
    $table->addColumn('lastName', 'string', [
        'limit'=>100,
        'null'=>true,

    ]);
   

    $table->addColumn('email', 'string', [
        'limit'=>255,
        'null'=>false,

    ]);
    
    $table->addColumn('password', 'string', [
        'limit'=>255,
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

     //deixando o email unico
     $table->addIndex('email', ['unique'=>true]);
     //criando a tabela
     $table->create();
     
    }
}
