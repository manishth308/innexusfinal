<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BloggerSeeder extends Seeder
{
    public function run(): void
    {
        $bloggers = [
            [
                'name' => 'Sarah Johnson',
                'email' => 'sarah.johnson@blogger.test',
                'password' => 'password123',
                'job_title' => 'Senior Tech Writer',
                'bio' => 'Passionate technology writer with 8+ years of experience covering software development, AI, and cloud computing. Regular contributor to major tech publications.',
                'social_url' => 'https://linkedin.com/in/sarahjohnson-tech',
            ],
            [
                'name' => 'Michael Chen',
                'email' => 'michael.chen@blogger.test',
                'password' => 'password123',
                'job_title' => 'Full Stack Developer & Blogger',
                'bio' => 'Full stack developer turned technical blogger. Writes about modern web development, DevOps practices, and developer productivity. Former senior engineer at a unicorn startup.',
                'social_url' => 'https://github.com/michaelchen-dev',
            ],
            [
                'name' => 'Emily Rodriguez',
                'email' => 'emily.rodriguez@blogger.test',
                'password' => 'password123',
                'job_title' => 'DevOps Engineer',
                'bio' => 'DevOps specialist focusing on CI/CD pipelines, Kubernetes, and cloud infrastructure. Shares practical guides on scaling applications and automation best practices.',
                'social_url' => 'https://twitter.com/emilyrodriguez-dev',
            ],
            [
                'name' => 'David Park',
                'email' => 'david.park@blogger.test',
                'password' => 'password123',
                'job_title' => 'Mobile App Developer',
                'bio' => 'iOS and Android developer with expertise in React Native and Flutter. Writes tutorials on cross-platform mobile development and app store optimization strategies.',
                'social_url' => 'https://medium.com/@davidpark-mobile',
            ],
            [
                'name' => 'Lisa Thompson',
                'email' => 'lisa.thompson@blogger.test',
                'password' => 'password123',
                'job_title' => 'UX Designer & Technical Writer',
                'bio' => 'Product designer who bridges the gap between design and engineering. Covers UX research, design systems, and the intersection of design and code.',
                'social_url' => 'https://dribbble.com/lisathompson-ux',
            ],
        ];

        foreach ($bloggers as $blogger) {
            User::query()->firstOrCreate(
                ['email' => $blogger['email']],
                [
                    'name' => $blogger['name'],
                    'password' => Hash::make($blogger['password']),
                    'role' => UserRole::Blogger,
                    'job_title' => $blogger['job_title'],
                    'bio' => $blogger['bio'],
                    'social_url' => $blogger['social_url'],
                    'email_verified_at' => now(),
                ]
            );
        }

        $this->command->info('Blogger users seeded successfully!');
        $this->command->info('Default password for all bloggers: password123');
    }
}