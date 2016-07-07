<?php
/**
 * Created by PhpStorm.
 * User: dam1r89
 * Date: 3/11/16
 * Time: 2:13 PM
 */

namespace dam1r89\TranslatableMigration;

use Illuminate\Database\Console\Migrations\MigrateMakeCommand;

class TranslatableMigrateMakeCommand extends MigrateMakeCommand
{
    protected $signature = 'make:migration:translatable {name : The name of the migration.}
        {--create= : The table to be created.}
        {--table= : The table to migrate.}
        {--path= : The location where the migration file should be created.}';

}
