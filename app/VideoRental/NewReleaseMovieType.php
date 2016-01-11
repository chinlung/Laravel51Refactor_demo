<?php


namespace VideoRental;


class NewReleaseMovieType extends AbstractMovieType
{
    /**
     * 計算每種型態電影的金額
     *
     * @param int $days
     * @return int
     */
    public function calculatePrice(int $days) : int
    {
        $price = 150;
        $price += ($days - 3) * 30;
        return $price;
    }
}