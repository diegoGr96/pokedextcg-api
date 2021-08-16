<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class FiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        
        
        
        
        
        

        */
        DB::table('filters')->insert(
            [
                [ //name=PIKACHU
                    'name' => 'name',
                    'type' => 'text',
                    'options' => '',
                    'description' => 'Search a card by the Pokemon name.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//supertypes[]=Energy
                    'name' => 'supertypes',
                    'type' => 'select',
                    'options' => 'multiple,',
                    'description' => 'Search a card by the Supertypes.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//subtypes[]=Baby
                    'name' => 'subtypes',
                    'type' => 'select',
                    'options' => 'multiple,',
                    'description' => 'Search a card by the Subtypes.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//types[]=Colorless
                    'name' => 'types',
                    'type' => 'checkbox',
                    'options' => '',
                    'description' => 'Search a card by the Types.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//hp_low=500
                    'name' => 'hp_low',
                    'type' => 'number',
                    'options' => '',
                    'description' => 'Search a card by the min HP.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//hp_high=1000
                    'name' => 'hp_high',
                    'type' => 'number',
                    'options' => '',
                    'description' => 'Search a card by the max HP.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//weaknesses[]=Colorless
                    'name' => 'weaknesses',
                    'type' => 'checkbox',
                    'options' => '',
                    'description' => 'Search a card by the Weaknesses.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//resistances[]=Colorless
                    'name' => 'resistances',
                    'type' => 'checkbox',
                    'options' => '',
                    'description' => 'Search a card by the Resistances.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//retreat_cost_low=3
                    'name' => 'retreat_cost_low',
                    'type' => 'number',
                    'options' => '',
                    'description' => 'Search a card by the min cost of retreat.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//retreat_cost_high=50
                    'name' => 'retreat_cost_high',
                    'type' => 'number',
                    'options' => '',
                    'description' => 'Search a card by the max cost of retreat.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//set_names[]=BREAKpoint
                    'name' => 'set_names',
                    'type' => 'select',
                    'options' => 'multiple,',
                    'description' => 'Search a card by the name of the set.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//series_names[]=E-Card
                    'name' => 'series_names',
                    'type' => 'select',
                    'options' => 'multiple,',
                    'description' => 'Search a card by the name of the series.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//standard=Banned
                    'name' => 'standard',
                    'type' => 'select',
                    'options' => '',
                    'description' => "Search a card by the Legality 'Standard'.",
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//expanded=Legal
                    'name' => 'expanded',
                    'type' => 'select',
                    'options' => '',
                    'description' => "Search a card by the Legality 'Expanded'.",
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//unlimited=Legal
                    'name' => 'unlimited',
                    'type' => 'select',
                    'options' => '',
                    'description' => "Search a card by the Legality 'Unlimited'.",
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//artist=DD
                    'name' => 'artist',
                    'type' => 'text',
                    'options' => '',
                    'description' => 'Search a card by the Artist name.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
                [//rarities[]=Common
                    'name' => 'rarities',
                    'type' => 'select',
                    'options' => 'multiple,',
                    'description' => 'Search a card by the Rarities.',
                    'active' => true,
                    'created_at' => Carbon::now(),
                ],
            ]
        );
    }
}
