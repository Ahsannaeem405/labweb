<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class testList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\testList::truncate();

        $test = [

            ['name' => 'PCR', 'platform' => 'Cepheid GeneXpert Xpress','specimen'=>'Nasopharyngeal Swab','methodology'=>'PCR','procedure'=>'NAAT - RNA','price'=>'150'],
            ['name' => 'RT-PCR - Abbott IDNOW', 'platform' => 'Abbott ID NOW','specimen'=>'Nasopharyngeal Swab','methodology'=>'RT-PCR','procedure'=>'NAAT - RNA','price'=>'150'],
            ['name' => 'Antigen - CareStart', 'platform' => 'Access Bio CareStart','specimen'=>'Nasopharyngeal Swab','methodology'=>'Qualitative Antigen Test','procedure'=>'Lateral Flow Test','price'=>'79'],
            ['name' => 'Antigen - Sienna', 'platform' => 'Sienna','specimen'=>'Nasopharyngeal Swab','methodology'=>'Qualitative Antigen Test','procedure'=>'Lateral Flow Test','price'=>'79'],
            ['name' => 'Antigen - BinaxNow', 'platform' => 'Abbott BinaxNow','specimen'=>'Nasopharyngeal Swab','methodology'=>'Qualitative Antigen Test','procedure'=>'Lateral Flow Test','price'=>'79'],

            ['name' => 'PCR - 24hrs', 'platform' => 'Cepheid GeneXpert Xpress','specimen'=>'Nasopharyngeal Swab','methodology'=>'PCR','procedure'=>'NAAT - RNA','price'=>'114'],
            ['name' => 'RT-PCR Accula', 'platform' => 'Accula','specimen'=>'Nasopharyngeal Swab','methodology'=>'RT-PCR','procedure'=>'NAAT - RNA','price'=>'175'],
            ['name' => 'Antibody', 'platform' => 'Access Bio CareStart','specimen'=>'Blood Sample','methodology'=>'Qualitative Antibody Test','procedure'=>'Lateral Flow Test','price'=>'30'],
            ['name' => 'RT-PCR 24hrs - Abbott IDNOW', 'platform' => 'Abbott ID NOW','specimen'=>'Nasopharyngeal Swab','methodology'=>'RT-PCR','procedure'=>'NAAT - RNA','price'=>'114'],
            ['name' => 'RT-PCR 24hrs - Accula', 'platform' => 'Accula','specimen'=>'Nasopharyngeal Swab','methodology'=>'RT-PCR','procedure'=>'NAAT - RNA','price'=>'114'],


        ];

        foreach ($test as $key => $value) {
            \App\Models\testList::create($value);
        }
    }
}
