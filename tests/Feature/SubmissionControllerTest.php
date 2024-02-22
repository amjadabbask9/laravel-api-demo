<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmissionControllerTest extends TestCase
{
    /**
     * Test submitting a valid submission.
     *
     * @return void
     */
    public function testSubmitValidSubmission(): void
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.'
        ];

        $response = $this->postJson('/api/submit', $data);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Submission received.'
            ]);
    }

    /**
     * Test submitting with invalid data.
     *
     * @return void
     */
    public function testSubmitWithInvalidData(): void
    {
        $data = [
            // Missing 'name' field
            'email' => 'invalid_email',
            'message' => ''
        ];

        $response = $this->postJson('/api/submit', $data);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['name', 'email', 'message']);
    }
}
