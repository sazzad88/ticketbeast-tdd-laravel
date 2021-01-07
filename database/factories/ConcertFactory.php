<?php

namespace Database\Factories;

use App\Models\Concert;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConcertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Concert::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Example Title',
            'subtitle' => 'example subtitle',
            'date' => Carbon::parse("+2 weeks"),
            'ticket_price' => 2050,
            'venue' => 'The Mosh pit',
            'address' => '123, example lane',
            'city' => 'Laraville',
            'state' => 'ON',
            'zip' => '17916',
            'additional_info' => 'some additional info'
        ];
    }
}
