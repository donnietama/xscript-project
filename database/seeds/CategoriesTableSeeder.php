<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Admin\Category::class, 6)->create()->each(function ($u) {
            $u->save();
        });
        return $this->command->info('Categories table seeded.');
    }
}
