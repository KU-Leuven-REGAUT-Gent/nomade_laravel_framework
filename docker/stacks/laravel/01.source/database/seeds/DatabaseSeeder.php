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
        // Backup
        $this->call(Seed\Backup\ApiLogCategoriesTableSeeder::class);
        // $this->call(Seed\Backup\ApiLogsTableSeeder::class);

        // Essentials
        $this->call(Seed\Essential\AnswerTypesTableSeeder::class);
        $this->call(Seed\Essential\QuestionTypesTableSeeder::class);
        $this->call(Seed\Essential\RolesTableSeeder::class);
        $this->call(Seed\Essential\PermissionsTableSeeder::class);

        // Shared     
        $this->call(Seed\Shared\ParametersTableSeeder::class);
        $this->call(Seed\Shared\ParameterValuesTableSeeder::class);
        $this->call(Seed\Shared\PermissionRoleTableSeeder::class);

        switch(config('app.realm')){
            case "NOMADe":
                $this->nomade();
                break;
        }
    }

    public function nomade()
    {      
        $this->call(Seed\Nomade\CompaniesTableSeeder::class);
        $this->call(Seed\Nomade\UsersTableSeeder::class);
        $this->call(Seed\Nomade\RoleUserTableSeeder::class);     
        
        // //Questionnaires
        $this->call(Seed\Nomade\QuestionnaireCategoriesTableSeeder::class);
        $this->call(Seed\Nomade\QuestionnaireGroupsTableSeeder::class);
        $this->call(Seed\Nomade\QuestionnairesTableSeeder::class);
        $this->call(Seed\Nomade\QuestionsTableSeeder::class);
        $this->call(Seed\Nomade\AnswersTableSeeder::class);
        $this->call(Seed\Nomade\AnswerOptionsTableSeeder::class);
        $this->call(Seed\Nomade\QuestionConditionsTableSeeder::class);   

        // //Setups
        $this->call(Seed\Shared\InstrumentTypeCategoriesTableSeeder::class);
        $this->call(Seed\Nomade\SetupCategoriesTableSeeder::class);
        $this->call(Seed\Nomade\SetupGroupsTableSeeder::class);
        $this->call(Seed\Nomade\SetupsTableSeeder::class);
        $this->call(Seed\Nomade\InstrumentTypesTableSeeder::class);
        $this->call(Seed\Nomade\InstrumentTypeParameterTableSeeder::class);
        $this->call(Seed\Nomade\InstrumentsTableSeeder::class);
        $this->call(Seed\Nomade\InstrumentParameterTableSeeder::class);     
    }

}
