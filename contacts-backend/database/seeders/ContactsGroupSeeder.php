<?php

namespace Database\Seeders;

use App\Models\ContactGroup;
use Illuminate\Database\Seeder;

class ContactsGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactGroup::create([
            'name' => 'Personal',
        ]);
        ContactGroup::create([
            'name' => 'Business',
        ]);
        ContactGroup::create([
            'name' => 'Work',
        ]);
    }
}
