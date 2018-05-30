<?php

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
        \App\User::truncate();
        \App\Project::truncate();
        \App\Company::truncate();

        $user = new \App\User();
        $user->name = "Mohamed Ahmed";
        $user->email = 'error17191@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();

        $company = new \App\Company();
        $company->name = 'NoisyState';
        $company->save();

        $project = new \App\Project();
        $project->name = 'ProjectX';
        $company->projects()->save($project);

        $project = new \App\Project();
        $project->name = 'ProjectY';
        $company->projects()->save($project);

        $user->companies()->attach($company);

        $company = new \App\Company();
        $company->name = 'SyalTech';
        $company->save();

        $project = new \App\Project();
        $project->name = 'ABC';
        $company->projects()->save($project);

        $project = new \App\Project();
        $project->name = 'XYZ';
        $company->projects()->save($project);


        $user->companies()->attach($company);


    }
}
