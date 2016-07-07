Create migration for Dimsav\Translatable package.

Based on Laravel's default migrations.

## Installation

	composer require dam1r89/translatable-migration --dev

Add to `config/app.php` providers
	
	dam1r89\TranslatableMigration\TranslatableMigrationServiceProvider::class,

## Usage

Same as regular migration

	php artisan make:migration:translatable create_table_name --create=table_name

	php artisan make:migration:translatable update_table_name --table=table_name


