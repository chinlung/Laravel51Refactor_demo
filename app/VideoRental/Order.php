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
     * 計算每筆訂單的金額
     *
     * @return int
     */
    public function calculatePrice() : int
    {
        $price = 0;

        switch ($this->getMovie()->getType()) {
            case 'Regular':
                $price += 100;
                $price += ($this->getDays() - 7) * 10;
                return $price;
            case 'NewRelease':
                $price += 150;
                $price += ($this->getDays() - 3) * 30;
                return $price;
            case 'Children':
                $price += 40;
                $price += ($this->getDays() - 7) * 10;
                return $price;
        }
        return $price;
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

    /**
     * 回傳租片天數
     *
     * @return int
     */
    public function getDays() : int
    {
        return $this->days;
    }
}