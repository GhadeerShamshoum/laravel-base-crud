<?php

use App\Film;
use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $films = config("comics");
        
        foreach($films as $film){
            $newFilm = new Film();
            $newFilm->title = $film["title"];
            $newFilm->description = $film["description"];
            $newFilm->thumb = $film["thumb"];
            $newFilm->price = $film["price"];
            $newFilm->series = $film["series"];
            $newFilm->sale_date = $film["sale_date"];
            $newFilm->type = $film["type"];
            $newFilm->save();



        }
    }
}
