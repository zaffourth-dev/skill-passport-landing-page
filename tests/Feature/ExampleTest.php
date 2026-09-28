<?php

namespace Tests\Feature;

use Database\Seeders\PortfolioSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the portfolio home page returns a successful response and contains core content.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $this->seed(PortfolioSeeder::class);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('KAMARUL ARIFIN');
        $response->assertSee('ATLAS MBG');
        $response->assertSee('WasteBank2026');
        $response->assertSee('Journey to Logic');
        $response->assertSee('SMK Tunas Harapan Pati');
        $response->assertSee('Dicoding');
    }

    /**
     * Test that contact form submission saves message to the database.
     */
    public function test_contact_form_submission(): void
    {
        $payload = [
            'name' => 'Budi Pratama',
            'email' => 'budi@example.com',
            'subject' => 'Project Inquiry',
            'message' => 'Halo Arif, saya tertarik dengan project ATLAS MBG.',
        ];

        $response = $this->post('/contact', $payload);

        $response->assertRedirect('/#contact');
        $this->assertDatabaseHas('contact_messages', [
            'email' => 'budi@example.com',
            'name' => 'Budi Pratama',
        ]);
    }
}
