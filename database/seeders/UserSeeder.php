<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'fullname' => 'Neraj Lal S',
                'email' => 'neraj@gmail.com',
                'phone' => '8547470675',
                'password' => '8547',
                'security_question' => 'What city were you born in?',
                'security_answer' => 'Kollam',
                'address1' => 'Lal Bhavan Mukkoodu P.O Mulavana',
                'address2' => 'Lal Bhavan Mukkoodu P.O Mulavana, Kollam',
                'city' => 'Kollam',
                'state' => 'Kerala',
                'pincode' => '691503',
                'dob' => '2013-06-17',
                'anniversary' => '2025-06-06',
                'landmark' => 'Hebron school',
                'created_at' => '2025-05-23 07:59:59',
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'fullname' => 'Neraj Lal S',
                'email' => 'gokul@gmail.com',
                'phone' => '8547479651',
                'password' => '2222',
                'security_question' => 'What city were you born in?',
                'security_answer' => 'Alappuzha',
                'address1' => 'Lal Bhavan Mukkoodu P.O Mulavana',
                'address2' => 'Lal Bhavan Mukkoodu P.O Mulavana',
                'city' => 'Kollam',
                'state' => 'Kerala',
                'pincode' => '691504',
                'dob' => '1970-01-01',
                'anniversary' => null,
                'landmark' => 'Hebron',
                'created_at' => '2025-05-23 08:30:45',
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'fullname' => 'Vaishna Sajeev',
                'email' => 'vaishnasreekutty@gmail.com',
                'phone' => '7907493414',
                'password' => '2001',
                'security_question' => 'What was the name of your first school?',
                'security_answer' => 'DIET ATTINGAL',
                'address1' => 'parimahal',
                'address2' => 'Paivelikkonam  Vettiyara P. O Navaikulam',
                'city' => 'Thiruvananthapuram',
                'state' => 'KERALA',
                'pincode' => '695603',
                'dob' => '1970-01-01',
                'anniversary' => null,
                'landmark' => 'Paivelikkonam Rationkada',
                'created_at' => '2025-06-11 13:40:26',
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'fullname' => 'Gokul Jayakumar',
                'email' => 'higokul99@gmail.com',
                'phone' => '8547349691',
                'password' => '0000',
                'security_question' => 'What is your favorite book?',
                'security_answer' => 'You can win',
                'address1' => 'Kollam',
                'address2' => '',
                'city' => 'Kollam',
                'state' => 'Kerala',
                'pincode' => '691012',
                'dob' => '1970-01-05',
                'anniversary' => '2025-06-01',
                'landmark' => 'Temple',
                'created_at' => '2025-06-17 11:22:40',
                'updated_at' => null,
            ],
        ]);
    }
}
