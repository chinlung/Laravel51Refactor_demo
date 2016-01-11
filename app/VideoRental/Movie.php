<?php


namespace VideoRental;


class Movie
{
    /** @var AbstractMovieType */
    private $type;

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = MovieTypeFactory::create($type);
    }

    /**
     * Movie constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->setType($type);
    }

    /**
     * 計算每部電影的金額
     *
     * @param int $days
     * @return int
     */
    public function calculatePrice(int $days)
    {
        return $this->getType()->calculatePrice($days);
    }

    /**
     * 回傳AbstractMovieType物件
     *
     * @return AbstractMovieType
     */
    public function getType() : AbstractMovieType
    {
        return $this->type;
    }
}