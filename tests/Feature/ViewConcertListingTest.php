<?php

namespace Tests\Feature;

use App\Models\Concert;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewConcertListingTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function user_can_view_a_published_concert_listing()
    {
        // Arrange
        // Create a concert

        $concert = Concert::create([
            'title' => 'The Red Cord',
            'subtitle' => 'with Animosity and Lethargy',
            'date' => Carbon::parse("February 2, 2021 , 8:00pm"),
            'published_at' => Carbon::parse("-1 week"),
            'ticket_price' => 3250,
            'venue' => 'The Mosh pit',
            'address' => '123, example lane',
            'city' => 'Laraville',
            'state' => 'ON',
            'zip' => '17916',
            'additional_info' => 'some additional info'
        ]);


        // Act
        // View the concert listing

        $this->visit("/concerts/" . $concert->id);

        // Assert
        // See the concert details
        $this->see("The Red Cord");
        $this->see("with Animosity and Lethargy");
        $this->see("February 2, 2021");
        $this->see("8:00pm");
        $this->see("32.50");
        $this->see("The Mosh pit");
        $this->see("123, example lane");
        $this->see("Laraville");
        $this->see("ON");
        $this->see("17916");
        $this->see("some additional info");

        // $response = $this->get('/');

        // $response->assertStatus(200);
    }

    /** @test */
    public function user_cannot_view_unpublished_concert_listing()
    {
        $concert = Concert::factory()->create([
            'published_at' => null
        ]);


        $this->get("/concerts/" . $concert->id);

        $this->assertResponseStatus(404);
    }
}
