<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How can a DebateHub enhance event organization?',
                'answer' => 'DebateHub streamlines event organization by providing tools for participant registration, topic scheduling, and result reporting.'
            ],
            [
                'question' => 'What features should I look for in a DebateHub?',
                'answer' => 'Look for features such as participant registration, scheduling, scoring, and support for various debate formats.'
            ],
            [
                'question' => 'What is a DebateHub?',
                'answer' => 'A DebateHub is a software tool designed to facilitate the organization, scheduling, and scoring of debates or discussions.'
            ],
            [
                'question' => 'How can a DebateHub benefit tournament organizers?',
                'answer' => 'DebateHub streamline the tournament organization process, improve efficiency, and provide a centralized platform for managing debates.'
            ],
            [
                'question' => 'What features should I look for in a DebateHub?',
                'answer' => 'Look for features such as participant registration, topic scheduling, scoring, real-time updates, and user-friendly interfaces.'
            ],
            [
                'question' => 'Can DebateHus handle multiple debate formats?',
                'answer' => 'Yes, many systems support various debate formats, including parliamentary, Lincoln-Douglas, and policy debates.'
            ],
            [
                'question' => 'How does a DebateHub handle participant registration?',
                'answer' => 'Participants can typically register through the system by providing necessary information, and organizers can manage and track participant details.'
            ],
            [
                'question' => 'Is it possible to integrate a DebateHub with other tools or platforms?',
                'answer' => 'Yes, some systems offer integration capabilities with popular platforms and tools, enhancing flexibility and functionality.'
            ],
            [
                'question' => 'How can a DebateHub adapt to last-minute changes in schedules or participants?',
                'answer' => 'Systems may allow organizers to make real-time updates to schedules and participant information, ensuring flexibility.'
            ],
            [
                'question' => 'Can DebateHub be used for virtual or online debates?',
                'answer' => 'Yes, many systems now support virtual debates, offering features for online participation, live streaming, and remote judging.'
            ],
            [
                'question' => 'Is DebateHub suitable for educational institutions?',
                'answer' => 'Absolutely, these systems are commonly used in schools and universities to facilitate debates and enhance the learning experience.'
            ],
            [
                'question' => 'How user-friendly is DebateHub for event organizers?',
                'answer' => 'The user interface varies, but most systems aim to be intuitive, with features like drag-and-drop scheduling and easy participant management.'
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
