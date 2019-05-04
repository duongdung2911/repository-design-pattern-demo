<?php
/**
 * Created by PhpStorm.
 * User: dungdt
 * Date: 03/05/2019
 * Time: 09:16
 */

namespace App\Services;

// Mô tả các phương thức mà Customer Service sẽ phải triển khai
interface CustomerServiceInterface
{
    public function index();

    public function create($data = []);

    public function profile($userId);

    public function delete($userId);

    public function update($userId, $data = []);
}
