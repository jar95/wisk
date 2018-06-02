<?php

use Illuminate\Database\Seeder;

class PlannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();
        for ($i = 1; $i <= 10; $i++) {
            $users->each(function ($user) {
                $planner = factory(\App\Planner::class)->make();
                $planner->user()->associate($user);
                $planner->save();
            });
        }
    }
}
