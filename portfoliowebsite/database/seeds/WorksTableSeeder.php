<?php

use App\Work;
use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $werk = new Work([
            'title' => 'Rens Accountants',
            'content' => 'Rens is een boekhoudkantoor gelegen in Mechelen. Ze hadden juist een nieuwe marketting
manager aangenomen, en samen met haar mocht ik de nieuwe website van het kantoor
opmaken. Zij stuurde me instructies van wat er op de website moest komen. Zo is er enkele
keren een wisselwerking geweest tot we tot het gewenste resultaat gekomen zijn. Als
iedereen akkoord was heb ik ook deze website gecodeerd en opgezet in het CMS.'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'Smmrjob',
            'content' => 'Dit is een app die ik ontwikkeld heb om studenten aan een vakantiejob te helpen. Ik het deze app gemaakt als een opdracht voor het van Cross media Design en werd onder andere mee beoordeeld door een gast docente uit Duitsland.'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'Refugee Walk',
            'content' => 'Voor dit integration project creëerde ik samen met mijn groep een app voor deelnemers aan de wandeling die georganiseerd werd door Refugee Walk. We developten ook een admin platform voor de beheerders om de wandeling goed te laten verlopen en zo een rechtstreeks contact te creëren tussen de wandelaars en de beheerders.'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'World Hapiness Index',
            'content' => 'Datavisualisatie over de hapinessindex in de wereld.'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'Tomatensoep op grootmoeders wijze',
            'content' => 'Datavisualisatie over de ingrediënten van tomatensoep .'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'De Hel',
            'content' => 'KV Mechelen deed vroeger voor elke match een soort van voorprogramma in het stadion met
Mark Uytterhoeven. De mensen in het stadion moesten dan op voorhand stemmen op wat
ze dachten dat de uitslag ging worden. Ik heb deze applicatie voor hen ontworpen en
ontwikkeld. In de app kan je o.a. een spelletje spelen, stemmen op de uitslag, de spelers
individueel bekijken, de opstelling bekijken…'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'Delta Londerzeel',
            'content' => 'Delta Londerzeel is een voetbalploeg die op zoek was naar een nieuwe webshop. Ze kwamen
bij Jemasoft aankloppen en ik mocht deze webshop ontwikkelen, gebaseerd op het ontwerp
van de huidige website. Deze webshop heb ik daarna gedevelopped en opgezet in het CMS.'
        ]);
        $werk->save();
        $werk = new Work([
            'title' => 'KB Jemasoft',
            'content' => 'KB Jemasoft is een intern project. Er werd mij gevraagd om de knowledge base van Jemasoft
een beetje op te krikken qua design. Ik heb de icoontjes in een nieuw jasje gestoken en de
layout wat aangepast, en vervolgens de hele website overgezet naar de nieuwe layout in het
CMS.'
        ]);
        $werk->save();
    }
}
