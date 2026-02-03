<?php

it('can create a student', function () {
    $data = [
        'absen' => 1,
        'name' => 'John Doe',
        'class_id' => 'CLASS01',
        'gender' => 'L',
        'birthdate' => '2010-01-01',
        'address' => 'Jl. Merdeka No. 1',
        'nis' => '12345678',
    ];

    $response = $this->postJson('/api/students', $data);

    $response->assertStatus(201)
        ->assertJsonPath('data.name', 'John Doe')
        ->assertJsonPath('data.absen', 1);

    $this->assertDatabaseHas('students', ['nis' => '12345678']);
});

it('fails to create a student with missing data', function () {
    $response = $this->postJson('/api/students', []);

    $response->assertStatus(422);
});
