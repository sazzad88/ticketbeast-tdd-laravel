<?php

namespace Tests\Unit;

use App\Models\Concert;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;


class ConcertTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function can_get_formatted_date()
    {

        $concert = Concert::factory()->make([
            'date' => Carbon::parse("February 2, 2021 , 8:00pm")
        ]);

        $this->assertEquals("February 2, 2021", $concert->formatted_date);
    }


    /** @test */
    public function can_get_formatted_start_time()
    {



        $concert = Concert::factory()->make([
            'date' => Carbon::parse("2021-02-01 , 17:00:00")
        ]);

        $this->assertEquals("5:00pm", $concert->formatted_start_time);
    }

    /** @test */
    public function can_get_ticket_price_in_dollars()
    {

        $concert = Concert::factory()->make([
            'ticket_price' => 6750
        ]);

        // dd($concert->ticket_price_in_dollars);

        $this->assertEquals("67.50", $concert->ticket_price_in_dollars);
    }
}
