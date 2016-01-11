<?php


namespace VideoRental;


class ChildrenMovieType extends AbstractMovieType
{
    /**
     * 計算每種型態電影的金額
     *
     * @param int $days
     * @return int
     */
    public function calculatePrice(int $days) : int
    {
        $price = 40;
        $price += ($days - 7) * 10;
        return $price;
    }
}