<?php

use Illuminate\Database\Seeder;

class HcpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hcp = new \App\Hcp([
            'hcp_name' => 'Sibusiso Mhlanga',
            'hcp_spec' => 'Family Health',
            'hcp_email' => 'xyz@gmail.com',
            'hcp_password' => Hash::make('1234567'),
            'hcp_pic' => 'nothing'
        ]);
        $hcp->save();

        $hcp = new \App\Hcp([
            'hcp_name' => 'Lorraine Kunaka',
            'hcp_spec' => 'Family Health',
            'hcp_email' => 'lorraine@gmail.com',
            'hcp_password' => Hash::make('1234567'),
            'hcp_pic' => 'nothing'
        ]);
        $hcp->save();

        $hcp = new \App\Hcp([
            'hcp_name' => 'Van Heerden Van Staden',
            'hcp_spec' => 'General Practitioner',
            'hcp_email' => 'test@gmail.com',
            'hcp_password' => Hash::make('1234567'),
            'hcp_pic' => 'nothing'
        ]);
        $hcp->save();
    }
}
