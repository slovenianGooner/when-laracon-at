<?php

namespace App\Console\Commands;

use App\Models\Talk;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FillSchedule extends Command
{
    protected $signature = 'fill-schedule';

    protected $description = 'Command description';

    public function handle(): void
    {
        Talk::truncate();

        $talks = [
            ['day' => 1, 'time' => '08:30', 'title' => 'Doors Open / Registration', 'speaker' => null],
            ['day' => 1, 'time' => '09:25', 'title' => 'Opening Remarks', 'speaker' => null],
            ['day' => 1, 'time' => '09:30', 'title' => 'Nuno Maduro - Pest', 'speaker' => 'Nuno Maduro'],
            ['day' => 1, 'time' => '10:00', 'title' => 'Luke Downing - Lessons From the Framework', 'speaker' => 'Luke Downing'],
            ['day' => 1, 'time' => '10:50', 'title' => 'Philo Hermans - Livewire Beyond the Basics', 'speaker' => 'Philo Hermans'],
            ['day' => 1, 'time' => '11:20', 'title' => 'Mateus Guimaraes - Behind Laravel Octane', 'speaker' => 'Mateus Guimaraes'],
            ['day' => 1, 'time' => '13:40', 'title' => 'Rissa Jackson - D&D Strategies for Software Excellence', 'speaker' => 'Rissa Jackson'],
            ['day' => 1, 'time' => '14:10', 'title' => 'Colin DeCarlo - Laravel and AI', 'speaker' => 'Colin DeCarlo'],
            ['day' => 1, 'time' => '14:40', 'title' => 'Daniel Coulbourne - Verbs for Laravel', 'speaker' => 'Daniel Coulbourne'],
            ['day' => 1, 'time' => '15:35', 'title' => 'Taylor Otwell - Laravel Keynote', 'speaker' => 'Taylor Otwell'],
            ['day' => 1, 'time' => '17:00', 'title' => 'Reception & Entertainment', 'speaker' => null],
            ['day' => 1, 'time' => '19:30', 'title' => 'Laracon After Dark', 'speaker' => null],
            ['day' => 2, 'time' => '08:30', 'title' => 'Doors Open', 'speaker' => null],
            ['day' => 2, 'time' => '09:30', 'title' => 'Caleb Porzio - Livewire Keynote', 'speaker' => 'Caleb Porzio'],
            ['day' => 2, 'time' => '10:00', 'title' => 'Jack McDade - Design for the Rest of Us', 'speaker' => 'Jack McDade'],
            ['day' => 2, 'time' => '10:50', 'title' => 'Seb Armand - Scaling Laravel at Square', 'speaker' => 'Seb Armand'],
            ['day' => 2, 'time' => '11:20', 'title' => 'Freek - Unique Laravel Packages', 'speaker' => 'Freek'],
            ['day' => 2, 'time' => '13:40', 'title' => 'Kapehe Sevilleja - Building Your Village', 'speaker' => 'Kapehe Sevilleja'],
            ['day' => 2, 'time' => '14:10', 'title' => 'Joe Dixon - Learn to Fly with Laravel Reverb', 'speaker' => 'Joe Dixon'],
            ['day' => 2, 'time' => '14:40', 'title' => 'Jess Archer - Analyzing Analytical Databases', 'speaker' => 'Jess Archer'],
            ['day' => 2, 'time' => '15:35', 'title' => 'Joe Tannenbaum - Terminal UIs', 'speaker' => 'Joe Tannenbaum'],
            ['day' => 2, 'time' => '16:10', 'title' => 'Adam Wathan - Designing a Component Library', 'speaker' => 'Adam Wathan'],
            ['day' => 2, 'time' => '16:45', 'title' => 'Primeagen - Developer Excellence', 'speaker' => 'Primeagen'],
            ['day' => 2, 'time' => '17:00', 'title' => 'Reception & Entertainment', 'speaker' => null],
        ];

        Talk::insert($talks);
    }
}
