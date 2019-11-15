<?php

use App\Career;
use App\Project;
use App\Service;
use App\QuoteRequest;
use App\FieldIndustry;
use App\SystemProcess;
use App\CareerCategory;
use App\ClientTestimony;
use App\NdebiTechClient;
use App\ProjectCategory;
use App\ServiceCategory;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(env('APP_ENV') === 'local')
        {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
            CareerCategory::truncate();
            Career::truncate();
            ClientTestimony::truncate();
            FieldIndustry::truncate();
            NdebiTechClient::truncate();
            ProjectCategory::truncate();
            Project::truncate();
            QuoteRequest::truncate();
            SystemProcess::truncate();
            ServiceCategory::truncate();
            Service::truncate();

            $careerCategoryQty = 6;
            $projectCategoryQty = 4;
            $serviceCategoryQty = 5;
            $projectQty = 15;
            $clientTestimonyQty = 15;
            $careerQty = 15;
            $fieldIndustryQty = 15;
            $ndebiTechClientQty = 15;
            $systemProcessQty = 15;
            $serviceQty = 8;
            $quoteRequestQty = 15;


            factory(CareerCategory::class,$careerCategoryQty)->create();
            factory(Career::class,$careerQty)->create();
            // factory(Career::class,$careerQty)->create()->each(
            //     function($career){
            //         $careerCategories = CareerCategory::all()->random(mt_rand(1,3))->pluck('id');
            //         $career->careerCategory()->attach($careerCategories);
            //     }
            // );

            factory(ServiceCategory::class,$serviceCategoryQty)->create();
            factory(Service::class,$serviceQty)->create();
            // factory(Service::class,$serviceQty)->create()->each(
            //     function($service){
            //         $serviceCategories = ServiceCategory::all()->random(mt_rand(1,3))->pluck('id');
            //         $service->serviceCategory()->attach($serviceCategories);
            //     }
            // );

            factory(ProjectCategory::class,$projectCategoryQty)->create();
            factory(Project::class,$projectQty)->create();
            // factory(Project::class,$projectQty)->create()->each(
            //     function($project){
            //         $projectCategories = ProjectCategory::all()->random(mt_rand(1,3))->pluck('id');
            //         $project->projectCategory()->attach($projectCategories);
            //     }
            // );

            factory(ClientTestimony::class,$clientTestimonyQty)->create();
            factory(FieldIndustry::class,$fieldIndustryQty)->create();
            factory(NdebiTechClient::class,$ndebiTechClientQty)->create();
            factory(QuoteRequest::class,$quoteRequestQty)->create();

            factory(SystemProcess::class,$systemProcessQty)->create();
        }
    }
}
