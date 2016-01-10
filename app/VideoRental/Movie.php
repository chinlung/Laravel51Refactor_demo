<?php


namespace VideoRental;


class Movie
{
    /** @var string */
    private $type;

    /**
     * Movie constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * 回傳Movie type字串
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
}