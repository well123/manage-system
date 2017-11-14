<?php

use Illuminate\Database\Seeder;

class AsideMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();
        DB::table('user')->insert([
            'name' => 'well',
            'phone' => '12345678513',
            'email' => '123548@qq.com',
            'password' => md5('canYouSpeakEnglish?')
        ]);
    }
}
