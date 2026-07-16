<?php

use App\Models\User;

it('creates a user', function () {
    $user = User::factory()->create();

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email,
    ]);
});
