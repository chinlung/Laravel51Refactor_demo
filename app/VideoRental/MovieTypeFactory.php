<?php


namespace VideoRental;


use Illuminate\Support\Facades\App;

class MovieTypeFactory
{
    /**
     * @param string $type
     * @return AbstractMovieType
     */
    public static function create(string $type) : AbstractMovieType
    {
        App::bind(AbstractMovieType::class, 'VideoRental\\' . $type . 'MovieType');
        return App::make(AbstractMovieType::class);
    }
}