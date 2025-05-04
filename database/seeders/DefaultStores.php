<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\{
    Store,
    StoreHour
};

class DefaultStores extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $store1 = Store::create([
            "name"      => "Store 1",
            "address"   => "Store 1 Address"
        ]);

        StoreHour::create([
            "store_id"      => $store1->id,
            "day_of_week"   => "Sunday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store1->id,
            "day_of_week"   => "Monday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store1->id,
            "day_of_week"   => "Tuesday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store1->id,
            "day_of_week"   => "Wednesday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store1->id,
            "day_of_week"   => "Thursday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store1->id,
            "day_of_week"   => "Friday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store1->id,
            "day_of_week"   => "Saturday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        $store2 = Store::create([
            "name"      => "Store 2",
            "address"   => "Store 2 Address"
        ]);

        StoreHour::create([
            "store_id"      => $store2->id,
            "day_of_week"   => "Sunday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store2->id,
            "day_of_week"   => "Monday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store2->id,
            "day_of_week"   => "Tuesday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store2->id,
            "day_of_week"   => "Wednesday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store2->id,
            "day_of_week"   => "Thursday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store2->id,
            "day_of_week"   => "Friday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store2->id,
            "day_of_week"   => "Saturday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        $store3 = Store::create([
            "name"      => "Store 3",
            "address"   => "Store 3 Address"
        ]);

        StoreHour::create([
            "store_id"      => $store3->id,
            "day_of_week"   => "Sunday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store3->id,
            "day_of_week"   => "Monday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store3->id,
            "day_of_week"   => "Tuesday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store3->id,
            "day_of_week"   => "Wednesday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store3->id,
            "day_of_week"   => "Thursday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store3->id,
            "day_of_week"   => "Friday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);

        StoreHour::create([
            "store_id"      => $store3->id,
            "day_of_week"   => "Saturday",
            "open_time"     => "09:00",
            "close_time"    => "17:00"
        ]);
    }
}
