<?php
/**
 * Created by PhpStorm.
 * User: dam1r89
 * Date: 3/11/16
 * Time: 2:38 PM
 */

namespace dam1r89\TranslatableMigration;


use Illuminate\Database\Migrations\MigrationCreator;

class TranslatableMigrationCreator extends MigrationCreator
{


    protected function populateStub($name, $stub, $table)
    {

        $stub = str_replace('DummyKey', str_singular($table), parent::populateStub($name, $stub, $table));

        return $stub;
    }

    public function getStubPath()
    {
        return __DIR__ . '/stubs';
    }
}
