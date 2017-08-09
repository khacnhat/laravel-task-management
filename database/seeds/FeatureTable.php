<?php

use Illuminate\Database\Seeder;
use \App\Feature;

class FeatureTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feature = new Feature();
        $feature->id = 1;
        $feature->name = "Birthday";
        $feature->save();
    }
}
