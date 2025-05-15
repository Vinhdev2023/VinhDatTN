<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Publisher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            AdminSeeder::class,
            CustomerSeeder::class,
            OrderSeeder::class,
            PublisherSeeder::class,
            BookSeeder::class,
            OrderDetailSeeder::class,
            CategorySeeder::class,
            ClassifyingSeeder::class,
            AuthorSeeder::class,
            WritingSeeder::class,
        ]);

        $order_ids = OrderDetail::distinct()->get('order_id');
        foreach($order_ids as $order_id) {
            $parameters = OrderDetail::where('order_id', '=', $order_id->order_id)->get();
            $total = 0;
            foreach($parameters as $parameter) {
                $total += ($parameter->quantity * $parameter->price); 
            }
            Order::where('id', '=', $order_id->order_id)->update(['total' => $total]);
        }
    }
}
