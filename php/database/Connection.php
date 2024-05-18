<?php
namespace DB;

use Illuminate\Database\Capsule\Manager as Capsule;

class Connection
{
    function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
		"driver" => "mysql",
		"host" => $_ENV['DB_HOST'],
		"database" => $_ENV['DB_BASE'],
		"username" => $_ENV['DB_USER'],
		"password" => $_ENV['DB_PASSWORD']
		]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
		
		// Capsule::schema()->create('cards', function ($table) {
            // $table->bigIncrements('id');
            // $table->string('name');
            // $table->string('image');
            // $table->string('description');
            // $table->timestamps();
        // });
		return $capsule;
    }
}

