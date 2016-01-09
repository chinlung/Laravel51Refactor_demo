<?php


namespace VideoRental;


class Customer
{

    /**
     * Customer constructor.
     */
    public function __construct()
    {
    }

    /**
     * 新增訂單
     *
     * @param Order $order
     */
    public function addOrder(Order $order)
    {
        $orders = [];
        $orders[] = $order;
    }

    /**
     * 計算一位顧客所有訂單金額
     *
     * @return int
     */
    public function calculateTotalPrice() : int
    {
        return 130;
    }
}