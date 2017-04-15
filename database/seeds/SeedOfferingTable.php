<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedOfferingTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('offering')->delete();
	    $table = [
		    [
			    'title' => 'Buy 1 Shirt Get Two Free',
			    'price' => 300,
			    'created_at' => Carbon::now(),
			    'updated_at' => Carbon::now()
		    ],
		    [
			    'title' => 'Buy 3 Pent Get 1 Shirt free',
			    'price' => 5000,
			    'created_at' => Carbon::now(),
			    'updated_at' => Carbon::now()
		    ],
		    [
			    'title' => 'Buy 2 Shirts Get 1 Pent free',
			    'price' => 2500,
			    'created_at' => Carbon::now(),
			    'updated_at' => Carbon::now()
		    ],
		    [
			    'title' => 'Buy 2 Pents Get 1 T-Shirt free',
			    'price' => 2500,
			    'created_at' => Carbon::now(),
			    'updated_at' => Carbon::now()
		    ],
	    ];
	    DB::table('offering')->insert($table);
    }
}
