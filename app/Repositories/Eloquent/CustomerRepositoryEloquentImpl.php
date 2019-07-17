<?php
/**
 * Created by PhpStorm.
 * User: dungdt
 * Date: 03/05/2019
 * Time: 09:10
 */

namespace App\Repositories\Eloquent;


use App\Customer;
use App\Repositories\CustomerRepositoryInterface;

class CustomerRepositoryEloquentImpl extends EloquentRepository implements CustomerRepositoryInterface
{
    /**
     * Ghi đè phương thức trừu tượng getModel của Eloquen Repository
     * Nhận vào User Model
     */
    public function getModel()
    {
        return Customer::class;
    }

    public function pay($items, $money)
    {
        // TODO: Implement findByName() method.
    }
}
