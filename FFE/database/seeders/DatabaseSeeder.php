<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{ Contents };


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $content = [
        [
          "class_content" => "Windy",
          "page_id" => 'index',
          "content" =>
              'Windy est une éolienne faite à 100% d\'objet recyclé. Cette Éolienne a pour
              but d\'aider les personnes n\'ayant pas accès couramment à l\'électricité.
              Vous pouvez si vous avez les moyens acheter celle-ci pour nous aider à en faire plus.',
          "titre_content" => 'Windy',
        ],
        [
          "class_content" => 'Pourquoi',
          "page_id" => 'index',
          "content" =>
                        'Malheureusement aujourd’hui environ 15% de la population mondiale n’a
                        pas accès à l\'électricité, mais des personnes en ont besoin pour par
                        exemple avoir un peu de lumière à la nuit tomber et pouvoir étudier.
                        ;
                        Mais le réel besoin des habitant d\'après un échanges menées par
                        electriciens sans frontières avec la population locale était non
                        pas que chaque habitant est de l\'électricité mais qu’il priorise l’alimentation du
                        dispensaire et de l\'école',
          "titre_content" => 'Pourquoi ce projet ? ; Une situation dans le besoin',
        ],
        [
          "class_content" => 'Moyen',
          "page_id" => 'index',
          "content" => 'Alors pour réunir notre projet et faire une bonne action de notre côté
                        nous avons décidé de créer un site web qui permettrait de vendre des éoliennes
                        créer par nos soin et les vendre pour en construire d’avantages puis en envoyer
                        au personnes qui n’ont pas acces a l\'electricite',
          "titre_content" => 'Des moyens mis en place',
        ],
        [
          "class_content" => "miseEnPlace",
          "page_id" => 'AboutUs',
          "content" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas nec
                        ipsum dignissim commodo. Pellentesque lacinia sagittis sapien at consectetur.
                        Maecenas at egestas urna. Vestibulum bibendum ultricies ex, id consectetur
                        libero pharetra in. Proin molestie ses
                        ;
                        Duis feugiat in purus et mattis. Proin nisl risus, eleifend sit amet nisl eu,
                        tincidunt tristique lorem. Nam leo nibh, viverra ut consectetur fringilla
                        , dictum eget diam. Phasellus enim quam, semper in viverra porttitor,
                        semper quis leo. Integer et ultricies libero. Duis a turpis id lectus facilisis interdum.',
          "titre_content" => 'FFE',
        ],
        [
          "class_content" => "desc",
          "page_id" => 'fiche-produit',
          "content" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          "titre_content" => 'Windy',
        ],
        [
          "class_content" => "nbr",
          "page_id" => 'fiche-produit',
          "content" => '12kw ; <5 ; 0',
          "titre_content" => 'Nombres',
        ],
      ];

      foreach ($content as $key => $section) {
        Contents::create([
          'class_content' => $section['class_content'],
          'page_id' => $section['page_id'],
          'content' => $section['content'],
          'titre_content' => $section['titre_content'],
        ]);
      }
    }
}
