<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubmissionTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_submission_success(): void
    {
        $response = $this->postJson('/api/submissions', [
            'name' => 'User Test',
            'email' => 'user@example.com',
            'message' => 'Test Message.',
        ]);

        $response->assertStatus(200)
            ->assertJson(['message' => 'Submission created successfully.']);

    }
}
