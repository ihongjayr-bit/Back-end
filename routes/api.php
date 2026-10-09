<?php

use Illuminate\Support\Facades\Route;

// (removed the unused YourCustomController import and route)

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
        ],
    ]);
});