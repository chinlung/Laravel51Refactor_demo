<?php


namespace VideoRental;


class TaiwanMovieType extends AbstractMovieType
{
    /**
     * 計算每種型態電影的金額
     *
     * @param int $days
     * @return int
     */
    public function calculatePrice(int $days) : int
    {
        $price = 80;
        $price += ($days - 10) * 10;
        return $price;
    }
}