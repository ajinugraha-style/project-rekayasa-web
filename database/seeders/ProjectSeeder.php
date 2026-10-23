<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Project::create([
                'title' => 'Project Aplikasi ' . $i,
                'description' => 'Deskripsi lengkap dan dokumentasi pengembangan sistem untuk project ke-' . $i . '.',
                'status' => $i % 2 == 0 ? 'Selesai' : 'Proses',
                'teknologi' => 'Laravel, Bootstrap, MySQL',
                'image' => 'project' . $i . '.jpg',
                'client' => 'Klien Perusahaan ' . $i,
            ]);
        }
    }
}