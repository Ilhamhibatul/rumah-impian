<?php

namespace Modules\Broker\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Modules\Broker\Entities\Attribute;
use Modules\Broker\Entities\Category;
use Modules\Broker\Entities\Tag;
use Modules\Broker\Entities\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $user = User::first();

        Attribute::setDefaultAttributes();
        $this->command->info('Default attributes seeded.');

        Category::factory()->count(10)->create();
        $this->command->info('Categories seeded.');

        Tag::factory()->count(10)->create();
        $this->command->info('Tags seeded.');

        for ($i = 1; $i <=10; $i++) {
            $manageStock = (bool)random_int(0, 1);

            $product = Product::factory()->crate([
                
            ]);
        }
    }
}
