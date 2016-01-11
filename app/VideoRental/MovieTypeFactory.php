<?php


namespace VideoRental;


class MovieTypeFactory
{
    /**
     * @param string $type
     * @return AbstractMovieType
     */
    public static function create(string $type) : AbstractMovieType
    {
        switch ($type) {
            case 'Regular':
                return new RegularMovieType();

            case 'NewRelease':
                return new NewReleaseMovieType();

            case 'Children':
                return new ChildrenMovieType();
        }
    }
}