<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CustomerTest extends TestCase
{
    public function test_order_1_regular_movie_with_10_days()
    {
        /** arrange */
        $movie = new Movie('Regular');
        $order = new Order($movie, 10);
        $target = new Customer();
        $target->addOrder($order);

        $expected = 130;

        /** act */
        $actual = $target->calculateTotalPrice();

        /** assert */
        $this->assertEquals($expected, $actual);
    }
}
