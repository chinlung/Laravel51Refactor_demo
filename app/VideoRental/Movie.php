<?php


namespace VideoRental;


class Movie
{
    /** @var string */
    private $type;

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
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
        $price = 0;

        switch ($this->getType()) {
            case 'Regular':

            case 'NewRelease':

            case 'Children':

        }
        return $price;
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