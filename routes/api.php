<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/events', function () {
    return response()->json([
        'events' => [
            [
                'id' => 1,
                'name' => 'Event 1',
                'date' => '2024-06-01',
            ],
            [
                'id' => 2,
                'name' => 'Event 2',
                'date' => '2024-06-15',
            ],
        ],
        ]);
});

Route::get('/events/{id}', function ($id) {
    return response()->json([
        'event' => [
            'id' => $id,
            'name' => "Event $id",
            'date' => '2024-06-01',
        ]
    ]);
});

Route::get('/organizations', function () {
    return response()->json([
        'organizations' => [
            [
                'id' => 1,
                'name' => 'Organization 1',
            ],
            [
                'id' => 2,
                'name' => 'Organization 2',
            ],
        ],
    ]);
});

Route::get('/venues', function () {
    return response()->json([
        'venues' => [
            [
                'id' => 1,
                'name' => 'Venue 1',
                'location' => 'Location 1',
            ],
            [
                'id' => 2,
                'name' => 'Venue 2',
                'location' => 'Location 2',
            ],
        ],
    ]);
});

Route::get('/announcements', function () {
    return response()->json([
        'announcements' => [
            [
                'id' => 1,
                'title' => 'Announcement 1',
                'content' => 'Content for announcement 1',
            ],
            [
                'id' => 2,
                'title' => 'Announcement 2',
                'content' => 'Content for announcement 2',
            ],
        ],
    ]);
});