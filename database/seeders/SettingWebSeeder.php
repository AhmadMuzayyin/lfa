<?php

namespace Database\Seeders;

use App\Models\SettingWeb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingWeb::insert([
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolorem obcaecati, animi ex qui nesciunt aliquid dolorum maxime amet, libero deleniti fuga id, illo repellat vero pariatur. Reiciendis quam, accusamus illo eum, culpa at minima dolores facere quasi magni mollitia qui ex quaerat alias, quos eius rerum itaque amet saepe?',
            'pustaka' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolorem obcaecati, animi ex qui nesciunt aliquid dolorum maxime amet, libero deleniti fuga id, illo repellat vero pariatur. Reiciendis quam, accusamus illo eum, culpa at minima dolores facere quasi magni mollitia qui ex quaerat alias, quos eius rerum itaque amet saepe?',
            'artikel' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolorem obcaecati, animi ex qui nesciunt aliquid dolorum maxime amet, libero deleniti fuga id, illo repellat vero pariatur. Reiciendis quam, accusamus illo eum, culpa at minima dolores facere quasi magni mollitia qui ex quaerat alias, quos eius rerum itaque amet saepe?',
            'akademi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolorem obcaecati, animi ex qui nesciunt aliquid dolorum maxime amet, libero deleniti fuga id, illo repellat vero pariatur. Reiciendis quam, accusamus illo eum, culpa at minima dolores facere quasi magni mollitia qui ex quaerat alias, quos eius rerum itaque amet saepe?',
            'join' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolorem obcaecati, animi ex qui nesciunt aliquid dolorum maxime amet, libero deleniti fuga id, illo repellat vero pariatur. Reiciendis quam, accusamus illo eum, culpa at minima dolores facere quasi magni mollitia qui ex quaerat alias, quos eius rerum itaque amet saepe?',
            'kontak' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolorem obcaecati, animi ex qui nesciunt aliquid dolorum maxime amet, libero deleniti fuga id, illo repellat vero pariatur. Reiciendis quam, accusamus illo eum, culpa at minima dolores facere quasi magni mollitia qui ex quaerat alias, quos eius rerum itaque amet saepe?',
            'logo_dark' => 'logo_dark.png',
            'logo_light' => 'logo_light.png',
            'is_aktif' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
