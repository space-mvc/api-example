<?php

use Illuminate\Database\Seeder;

/**
 * Class MenusTableSeeder
 */
class MenusTableSeeder extends Seeder
{
    /** @var array $seeds */
    protected $seeds = [
        [
            'title' => 'Sidebar Menu',
            'slug' => 'sidebar',
            'description' => 'This is positioned at the template left side',
        ],
        [
            'title' => 'Leaderboard Menu',
            'slug' => 'leaderboard',
            'description' => 'This is positioned at the template top',
        ],
    ];

    /**
     * run.
     */
    public function run()
    {
        foreach($this->seeds as $seed) {
            \App\Model\System\Menu::insert(array_merge($seed, [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]));
        }
    }
}
