<?php

use Illuminate\Support\Facades\Route;

$events = [
    [
        'id' => 1,
        'name' => 'Intramurals',
        'date' => '2026-10-12',
        'description' => 'An annual sports event where students compete in various sports and games.',
    ],
    [
        'id' => 2,
        'name' => 'Acquaintance Party',
        'date' => '2026-10-15',
        'description' => 'A party to welcome new members and introduce them to the organization.',
    ],
    [
        'id' => 3,
        'name' => 'Tech Conference',
        'date' => '2026-10-20',
        'description' => 'A conference to discuss the latest trends and innovations in technology.',
    ],
    [
        'id' => 4,
        'name' => 'Art Exhibition',
        'date' => '2026-10-25',
        'description' => 'An exhibition showcasing the artwork of students and local artists.',
    ],
    [
        'id' => 5,
        'name' => 'IT Days',
        'date' => '2026-10-30',
        'description' => 'A festival featuring live performances by local bands and musicians.',
    ],
];

Route::get('/events', function () use ($events) {
    return response()->json(['events' => $events]);
});

Route::get('/events/{id}', function ($id) use ($events) {
    $event = collect($events)->firstWhere('id', (int) $id);

    if (!$event) {
        return response()->json(['message' => 'Event not found'], 404);
    }

    return response()->json(['event' => $event]);
});


Route::get('/organizations', function () {
    return response()->json([
        'organizations' => [
            [
                'id' => 1,
                'name' => 'PSITS',
                'description' => 'PSITS is a student organization focused on technology and innovation.',
            ],
            [
                'id' => 2,
                'name' => 'Chess Club',
                'description' => 'Chess Club is a student organization for chess enthusiasts.',
            ],
            [
                'id' => 3,
                'name' => 'Dance Troupe',
                'description' => 'Dance Troupe is a student organization for dance enthusiasts.',
            ],
            [
                'id' => 4,
                'name' => 'Music Society',
                'description' => 'Music Society is a student organization for music enthusiasts.',
            ],
            [
                'id' => 5,
                'name' => 'Art Club',
                'description' => 'Art Club is a student organization for art enthusiasts.',
            ],
        ],
    ]);
});

Route::get('/venues', function () {
    return response()->json([
        'venues' => [
            [
                'id' => 1,
                'name' => 'Intramurals Venue',
                'location' => 'Opol Community College Gymnasium',
            ],
            [
                'id' => 2,
                'name' => 'Acquaintance Party Venue',
                'location' => 'Brevant',
            ],
            [
                'id' => 3,
                'name' => 'Tech Conference Venue',
                'location' => 'Opol Community College Auditorium',
            ],
            [
                'id' => 4,
                'name' => 'Art Exhibition Venue',
                'location' => 'Opol Community College Art Gallery',
            ],
            [
                'id' => 5,
                'name' => 'IT Days Venue',
                'location' => 'Opol Community College Open Grounds',
            ],
        ],
    ]);
});

Route::get('/announcements', function () {
    return response()->json([
        'announcements' => [
            [
                'id' => 1,
                'title' => 'Intramurals Announcement',
                'content' => 'Sports event announcement content for intramurals',
                'description' => 'Intramurals is an annual sports event where students compete in various sports and games. This announcement provides details about the event, including the schedule, rules, and registration information.',
            ],
            [
                'id' => 2,
                'title' => 'Acquaintance Party Announcement',
                'content' => 'Party announcement content for acquaintance party',
                'description' => 'Acquaintance Party is a gathering to welcome new members and introduce them to the organization. This announcement provides details about the event, including the schedule, rules, and registration information.',
            ],
            [
                'id' => 3,
                'title' => 'Tech Conference Announcement',
                'content' => 'Conference announcement content for tech conference',
                'description' => 'Tech Conference is an event to discuss the latest trends and innovations in technology. This announcement provides details about the event, including the schedule, rules, and registration information.',
            ],
            [
                'id' => 4,
                'title' => 'Art Exhibition Announcement',
                'content' => 'Exhibition announcement content for art exhibition',
                'description' => 'Art Exhibition is an event showcasing the artwork of students and local artists. This announcement provides details about the event, including the schedule, rules, and registration information.',
            ],
            [
                'id' => 5,
                'title' => 'IT Days Announcement',
                'content' => 'Festival announcement content for IT days',
                'description' => 'IT Days is a festival featuring live performances by local bands and musicians. This announcement provides details about the event, including the schedule, rules, and registration information.',
            ],
        ],
    ]);
});