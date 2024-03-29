<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['comments', 'petitions', 'users'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        foreach ($this->toTruncate as $table){
            //DB::table($table)->truncate();
        }
        $this->call('UserTableSeeder');
        Model::reguard();
    }
}
