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
              'Windy est une éolienne faite à 100% d\'objet recyclé. Celle ci a pour
              but d\'aider les personnes n\'ayant pas accès couramment à l\'électricité.',
          "titre_content" => 'Windy',
        ],
        [
          "class_content" => 'Pourquoi',
          "page_id" => 'index',
          "content" =>
                        'L\'Afrique subsaharienne, comptant plus de 950 millions d\'habitants,
                        est la région la plus pauvre en électricité au monde. Plus de 600 millions
                        de personnes n\'ont pas accès à l\'électricité et des millions d\'autres
                        sont connectées à un réseau non fiable qui ne répond pas à leurs besoins
                        quotidiens en énergie. Les pays de cette région ont un taux d\'accès à
                        l\'électricité d\'environ 20% et deux personnes sur trois n\'ont pas accès
                        aux services énergétiques modernes.',
          "titre_content" => 'Pourquoi ce projet ? </br> Une situation dans le besoin',
        ],
        [
          "class_content" => 'Moyen',
          "page_id" => 'index',
          "content" => 'Pour aider les personnes en manque d\'électricité nous avons créé cette
                        éolienne et ce site web. Il nous permet de partager notre action pour que
                        vous aussi puissiez aider soit en nous faisant un don ou en achetant une
                        éolienne pour vous. Cet argent servira à la création et à l\'envoi de cette éolienne. 
                        Vous pouvez aussi creer votre éolienne maison que nous nous chargeront d\'envoyer dans des zones à besoins.',
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
