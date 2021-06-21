<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{ Contents , User, Pages};
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $libelles = [
            ["libelles_pages" => "index"],
            ["libelles_pages" => "AboutUs"],
            ["libelles_pages" => "Fiche-Produit"],
        ];

      $content = [
        [
          "class_content" => "Windy",
          "page_id" => '1',
          "content" => 'Windy est une éolienne faite à 100% d\'objet recyclé. Celle ci a pour but d\'aider les personnes n\'ayant pas accès couramment à l\'électricité.',
          "titre_content" => 'Windy',
        ],
        [
          "class_content" => 'Pourquoi',
          "page_id" => '1',
          "content" => 'L\'Afrique subsaharienne, comptant plus de 950 millions d\'habitants,est la région la plus pauvre en électricité au monde. Plus de 600 millions de personnes n\'ont pas accès à l\'électricité et des millions d\'autres sont connectées à un réseau non fiable qui ne répond pas à leurs besoins quotidiens en énergie. Les pays de cette région ont un taux d\'accès à l\'électricité d\'environ 20% et deux personnes sur trois n\'ont pas accès aux services énergétiques modernes.',
          "titre_content" => 'Pourquoi ce projet ? </br> Une situation dans le besoin',
        ],
        [
          "class_content" => 'Moyen',
          "page_id" => '1',
          "content" => 'Pour aider les personnes en manque d\'électricité nous avons créé cette éolienne et ce site web. Il nous permet de partager notre action pour que vous aussi puissiez nous aider soit en nous faisant un don ou en achetant une éolienne pour vous. Cet argent servira à la création et à l\'envoi de cette éolienne. Vous pouvez aussi créer votre éolienne maison que nous nous chargerons d\'envoyer dans des zones à besoins.',
          "titre_content" => 'Des moyens mis en place',
        ],
        [
          "class_content" => "miseEnPlace",
          "page_id" => '2',
          "content" => 'Cette éolienne est un projet de fin d\'année en groupe de deux, nous avions l’objectif de créer une éolienne recyclée et de l\'accompagner avec un site web. Pour réaliser ce projet nous avons commencé par la conception du site. Nous avons tout d’abord commencé par identifier nos cibles. Nous avons ensuite pu créer les wireframe puis les maquettes avec leurs specs fonctionnelles. Pour le développement nous avons commencé par créer des tâches et à nous les répartir, grâce à ça le développement s\'est fait rapidement et de façon organisé.',
          "titre_content" => 'FFE',
        ],
        [
          "class_content" => "desc",
          "page_id" => '3',
          "content" => 'Windy c’est une éolienne low-tech, très simple à fabriquer à partir de matériaux de récupération. De plus faible puissance que les éoliennes industrielles elle peut être utilisée pour des applications locales : charger un téléphone, allumer des LED, actionner une petite pompe… Pour de telles applications, quelques watts seulement suffisent.',
          "titre_content" => 'Windy',
        ],
        [
          "class_content" => "nbr",
          "page_id" => '3',
          "content" => '12kw ; <5 ; 0',
          "titre_content" => 'Nombres',
        ],
      ];

        foreach ($libelles as $key => $section) {
            Pages::create([
                'libelle_pages' => $section['libelles_pages'],
            ]);
        }

      foreach ($content as $key => $section) {
          $contenue = Contents::create([
              'class_content' => $section['class_content'],
              'pages_id' => $section['page_id'],
              'content' => $section['content'],
              'titre_content' => $section['titre_content'],
          ]);
      }
      User::create([
        'name' => 'florent',
        'email' => 'fmartinez@edenschool.fr',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
        'is_admin' => '1',
        'remember_token' => Str::random(10),
      ]);

    }
}
