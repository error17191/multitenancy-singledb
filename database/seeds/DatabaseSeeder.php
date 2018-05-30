<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Project;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = "Mohamed Ahmed";
        $user->email = 'error17191@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();

        $company = new Company();
        $company->name = 'NoisyState';
        $company->save();

        $project = new Project();
        $project->name = 'ProjectX';
        $company->projects()->save($project);

        $project = new Project();
        $project->name = 'ProjectY';
        $company->projects()->save($project);

        $user->companies()->attach($company);

        $company = new Company();
        $company->name = 'SyalTech';
        $company->save();

        $project = new Project();
        $project->name = 'ABC';
        $company->projects()->save($project);

        $project = new Project();
        $project->name = 'XYZ';
        $company->projects()->save($project);


        $user->companies()->attach($company);


    }
}
