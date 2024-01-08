<?php

namespace Julianasaran\CleanArchChecker\fixtures\Order\Domain;

use DateTime;
use Julianasaran\CleanArchChecker\fixtures\User\Domain\User;

class Order
{
    public string $id;
    public User $customer;
    public DateTime $placedAt;

    public function __construct(
        string   $id,
        User     $customer,
        DateTime $placedAt,
    )
    {
        $this->id = $id;
        $this->customer = $customer;
        $this->placedAt = $placedAt;
    }
}
