<?php

namespace Seed\Shared;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
            self::seedCompany(1, 'KU Leuven'),
            self::seedCompany(2, 'Group HEI-ISA-ISEN'),
            self::seedCompany(3, 'The University of Kent'),
            self::seedCompany(4, 'East Kent Hospitals University Foundation Trust'),
            self::seedCompany(5, 'Voka'),
            self::seedCompany(6, 'Sussex Community NHS Trust'),
            self::seedCompany(7, 'Centre of Expertise and New Technologies Resources & Communication APF'),
            self::seedCompany(8, 'DSP Valley'),
            self::seedCompany(9, 'Dynamic Controls'),
            self::seedCompany(10, 'Kent Acquired Brain Injury Forum (KABIF)'),
            self::seedCompany(11, 'ESIGELEC (School of Engineering)'),
            self::seedCompany(12, 'Sir William Beveridge Foundation (SWBF)'),
            self::seedCompany(13, 'Eurasanté'),

        ]);
    }

    protected static function seedCompany($id, $name, $description = null){
        return [
            'id'       => $id,
            'name_en'     => $name,
            'description_en' => $description,
        ];
    }
}
