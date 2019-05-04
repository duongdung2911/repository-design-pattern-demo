<?php
/**
 * Created by PhpStorm.
 * User: dungdt
 * Date: 03/05/2019
 * Time: 09:02
 */

namespace App\Repositories;

// Kế thừa các phương thức mô tả chung từ lớp Repository
interface CustomerRepositoryInterface extends Repository
{
    // Phương thức riêng của đối tượng Customer
    public function findByName($name);
}
