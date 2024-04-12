<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types_id = Type::all()->pluck('id');

        $project = new Project;
        $project->type_id = $faker->randomElement($types_id);
        $project->title = 'vue-boolzapp';
        $project->author = 'Mattia Volonterio';
        $project->description = 'Una webapp simile a whatsapp web creata con vue';
        $project->project_link = 'https://github.com/MattiaVolonterio/vue-boolzapp';
        $project->save();

        $project = new Project;
        $project->type_id = $faker->randomElement($types_id);
        $project->title = 'htmlcss-discord';
        $project->author = 'Mattia Volonterio';
        $project->description = 'Replica del layout della pagina Discord';
        $project->project_link = 'https://github.com/MattiaVolonterio/htmlcss-discord';
        $project->save();

        $project = new Project;
        $project->type_id = $faker->randomElement($types_id);
        $project->title = 'html-css-boolando';
        $project->author = 'Mattia Volonterio';
        $project->description = 'Semplice riproduzione di zalando';
        $project->project_link = 'https://github.com/MattiaVolonterio/html-css-boolando';
        $project->save();

        $project = new Project;
        $project->type_id = $faker->randomElement($types_id);
        $project->title = 'htmlcss-dropbox';
        $project->author = 'Mattia Volonterio';
        $project->description = 'Riproduzione dalla pagina di dropbox';
        $project->project_link = 'https://github.com/MattiaVolonterio/htmlcss-dropbox';
        $project->save();

        $project = new Project;
        $project->type_id = $faker->randomElement($types_id);
        $project->title = 'html-css-spotifyweb';
        $project->author = 'Mattia Volonterio';
        $project->description = 'Ruproduzione della pagina della webapp di spotify';
        $project->project_link = 'https://github.com/MattiaVolonterio/html-css-spotifyweb';
        $project->save();

        $project = new Project;
        $project->type_id = $faker->randomElement($types_id);
        $project->title = 'js-fizzbuzz';
        $project->author = 'Mattia Volonterio';
        $project->description = 'programma che stampa i numeri da 1 a 100, ma che per i multipli di 3 stampa "Fizz" al posto del numero e per i multipli di 5 stampa "Buzz". Per i numeri che sono sia multipli di 3 che di 5 stampa "FizzBuzz".';
        $project->project_link = 'https://github.com/MattiaVolonterio/js-fizzbuzz';
        $project->save();

        $project = new Project;
        $project->type_id = $faker->randomElement($types_id);
        $project->title = 'js-campominato-grid';
        $project->author = 'Mattia Volonterio';
        $project->description = 'Riproduzione semplificata del gioco "campo minato" con possibilità di scegliere tra tre difficoltà';
        $project->project_link = 'https://github.com/MattiaVolonterio/js-campominato-grid';
        $project->save();
    }
}
