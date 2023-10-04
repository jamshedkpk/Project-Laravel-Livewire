<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
public function run()
{
User::create
([
'name'=>'Admin',
'email'=>'admin@gmail.com',
'photo'=>'Image-1.jpeg',
'password'=>Hash::make('admin'),
'role'=>'admin',
]);
User::create
([
'name'=>'User',
'email'=>'user@gmail.com',
'photo'=>'Image-2.jpeg',
'password'=>Hash::make('admin'),
'role'=>'user',
]);
User::create
([
'name'=>'Tahir',
'email'=>'Tahir@gmail.com',
'photo'=>'Image-3.jpeg',
'password'=>Hash::make('admin'),
'role'=>'client',
]);
User::create
([
'name'=>'Hameed',
'email'=>'Hameed@gmail.com',
'photo'=>'Image-4.jpeg',
'password'=>Hash::make('admin'),
'role'=>'admin',
]);
User::create
([
'name'=>'Naila',
'email'=>'Naila@gmail.com',
'photo'=>'Image-5.jpeg',
'password'=>Hash::make('admin555'),
'role'=>'user',
]);
}
}
