<?php


namespace VideoRental;


class Order
{
    /** @var int */
    private $days;
    /** @var Movie */
    private $movie;

    /**
     * Order constructor.
     * @param Movie $movie
     * @param int $days
     */
    public function __construct(Movie $movie, int $days)
    {
        $this->days = $days;
        $this->movie = $movie;
    }

    /**
     * 回傳Movie物件
     *
     * @return Movie
     */
    public function getMovie() : Movie
    {
        return $this->movie;
    }
}