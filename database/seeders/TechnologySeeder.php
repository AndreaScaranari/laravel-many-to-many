<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $techs = [
            ['label' => 'HTML', 'color' => 'secondary'],
            ['label' => 'CSS', 'color' => 'primary'],
            ['label' => 'JavaScript', 'color' => 'warning'],
            ['label' => 'Bootstrap', 'color' => 'dark'],
            ['label' => 'Vue', 'color' => 'success'],
            ['label' => 'SQL', 'color' => 'muted'],
            ['label' => 'PHP', 'color' => 'dark'],
            ['label' => 'Laravel', 'color' => 'danger'],
        ];

        foreach($techs as $tech) {
            $new_tech = new Technology();

            $new_tech->label = $tech['label'];
            $new_tech->color = $tech['color'];

            $new_tech->save();
        }
    }
}
