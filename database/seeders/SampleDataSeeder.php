<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        // 1. Seed Modal Masters (Car parts being manufactured)
        $model1 = DB::table('modal_masters')->insertGetId([
            'model_description' => 'HVAC Blower Motor',
            'shift' => 'Shift 1',
            'car_type' => 'SUV',
            'part_no' => 'H-8921-A',
            'active' => 'Y',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $model2 = DB::table('modal_masters')->insertGetId([
            'model_description' => 'Radiator Core',
            'shift' => 'Shift 2',
            'car_type' => 'Sedan',
            'part_no' => 'R-1120-B',
            'active' => 'Y',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // 2. Seed Defect Masters (Types of defects that can occur)
        $defect1 = DB::table('defect_masters')->insertGetId([
            'defect_description' => 'Vibration Noise',
            'active' => 'Y',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $defect2 = DB::table('defect_masters')->insertGetId([
            'defect_description' => 'Coolant Leak',
            'active' => 'Y',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // 3. Seed Defect Data (Actual occurrences of defects)
        $defectData1 = DB::table('defect_data')->insertGetId([
            'model_id' => $model1,
            'defect_id' => $defect1,
            'defect_status' => 'Open',
            'quantity' => '5',
            'date_time' => $now->subDays(2)->format('Y-m-d H:i:s'),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $defectData2 = DB::table('defect_data')->insertGetId([
            'model_id' => $model2,
            'defect_id' => $defect2,
            'defect_status' => 'Closed',
            'quantity' => '2',
            'date_time' => $now->subDays(5)->format('Y-m-d H:i:s'),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // 4. Seed Categories (Man, Machine, Material, Method - 4M)
        $cat1 = DB::table('cfg_categories')->insertGetId(['category_description' => 'Man', 'created_at' => $now, 'updated_at' => $now]);
        $cat2 = DB::table('cfg_categories')->insertGetId(['category_description' => 'Machine', 'created_at' => $now, 'updated_at' => $now]);
        $cat3 = DB::table('cfg_categories')->insertGetId(['category_description' => 'Material', 'created_at' => $now, 'updated_at' => $now]);
        $cat4 = DB::table('cfg_categories')->insertGetId(['category_description' => 'Method', 'created_at' => $now, 'updated_at' => $now]);

        // 5. Seed Cause & Action Data (What caused the defect data event)
        $cause1 = DB::table('cause_action_data')->insertGetId([
            'defect_id' => $defectData1, // Linking to the defect data event
            'category_id' => $cat1,
            'cause_description' => 'Bearing wear in the assembly robot',
            'effect_description' => 'Motor shaft misaligned causing vibration',
            'action' => 'Replace bearing and recalibrate robot arm',
            'status' => 'In Progress',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        // 6. Seed Why-Why Analysis (Deep dive root cause analysis for the cause)
        DB::table('why_why_analyses')->insert([
            'cause_id' => $cause1,
            'why1' => 'Why was the motor vibrating? -> Shaft misaligned.',
            'why2' => 'Why was shaft misaligned? -> Robot arm was off-center during assembly.',
            'why3' => 'Why was robot arm off-center? -> Bearing in the arm was worn out.',
            'why4' => 'Why was bearing worn out? -> Lack of scheduled lubrication.',
            'why5' => 'Why was there lack of lubrication? -> Maintenance schedule was skipped.',
            'why6' => '',
            'why7' => '',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
