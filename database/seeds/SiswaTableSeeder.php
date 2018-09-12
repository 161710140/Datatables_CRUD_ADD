<?php

use Illuminate\Database\Seeder;
use App\a;
class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a1= a::create(['Nama'=>'Iqra','Lahir'=>'16 januari 2001']);
        $a2= a::create(['Nama'=>'Ali','Lahir'=>'16 September 2001']);
        $a3= a::create(['Nama'=>'Apu','Lahir'=>'16 Februari 2001']);
        $a4= a::create(['Nama'=>'Edi','Lahir'=>'16 Maret 2001']);
        $a5= a::create(['Nama'=>'Epi','Lahir'=>'16 Juli 2001']);
        $a6= a::create(['Nama'=>'Nein','Lahir'=>'16 Juni 2001']);
        $a7= a::create(['Nama'=>'Mein','Lahir'=>'16 October 2001']);
        $a8= a::create(['Nama'=>'Eli','Lahir'=>'16 November 2001']);
        $a9= a::create(['Nama'=>'Aru','Lahir'=>'16 Desember 2001']);
        $a11= a::create(['Nama'=>'Abi','Lahir'=>'16 januari 2001']);
        $a12= a::create(['Nama'=>'Abu','Lahir'=>'16 januari 2001']);
        
    }
}
