<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Blog::truncate();
        
        $mgmg = User::factory()->create(['name'=>'mg mg','username'=>'mgmg']);
        $aungaung = User::factory()->create(['name'=>"aung aung",'username'=>'aungaung']);

         $frontend = Category::factory()->create(['name'=>"Frontend","slug"=>"frontend"]);
         $backend = Category::factory()->create(['name'=>"Backend","slug"=>"backend"]);

        Blog::factory(2)->create(["category_id"=>$frontend,"user_id"=>$mgmg->id]);
        Blog::factory(2)->create(["category_id"=>$backend,"user_id"=>$aungaung->id]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
