<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Admin\Article::class, 50)->create()->each(function ($u) {
            $u->save();
        });
        return $this->command->info('Articles table seeded.');
    }
}
