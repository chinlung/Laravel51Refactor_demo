<?php


namespace VideoRental;


class Customer
{
    protected $orders = [];

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
        $this->orders[] = $order;
    }

    /**
     * 計算一位顧客所有訂單金額
     *
     * @return int
     */
    public function calculateTotalPrice() : int
    {
        $totalPrice = 0;

        foreach ($this->orders as $order) {
            $price = 0;

            /** @var Order $order */
            if ($order->getMovie()->getType() === 'Regular') {
                $price += 100;
                $price += ($order->getDays() - 7) * 10;
            }
            elseif ($order->getMovie()->getType() === 'NewRelease') {
                $price += 150;
                $price += ($order->getDays() - 3) * 30;
            }
            elseif ($order->getMovie()->getType() === 'Children') {
                $price += 40;
                $price += ($order->getDays() - 7) * 10;
            }

            $totalPrice += $price;
        }

        return $totalPrice;
    }
}