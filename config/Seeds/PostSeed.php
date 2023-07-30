<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Faker\Factory;

/**
 * Post seed.
 */
class PostSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $faker=Factory::create();

        for($i=1; $i<= 20; $i++){
            $title=$faker->sentence(5);
            $data['title']=$title;
            $data['slug']=strtolower(str_replace(['', '.'] , ['-',''], $title));
            $data['user_id']=$faker->randomNumber(1, 20);
            $data['content']=$faker->paragraph(2);
           
            $table = $this->table('post');
            $table->insert($data)->save();
        }

    }
}
