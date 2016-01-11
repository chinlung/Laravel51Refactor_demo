<?php


namespace VideoRental;


abstract class AbstractMovieType
{
    /**
     * 計算每種型態電影的金額
     *
     * @param int $days
     * @return int
     */
    abstract public function calculatePrice(int $days) : int;
}