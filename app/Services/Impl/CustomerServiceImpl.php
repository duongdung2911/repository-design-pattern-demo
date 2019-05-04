<?php
/**
 * Created by PhpStorm.
 * User: dungdt
 * Date: 03/05/2019
 * Time: 09:20
 */

namespace App\Services\Impl;


use App\Repositories\CustomerRepositoryInterface;
use App\Services\CustomerServiceInterface;

class CustomerServiceImpl implements CustomerServiceInterface
{
    protected $customerRepository;

    /**
     * CustomerServiceImpl constructor.
     * @param CustomerRepositoryInterface $customerRepository
     * Tiêm lớp CustomerRepositoryInterface
     */
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        /**
         * Gọi đến phương thức getAll() dưới tầng Repository
         * Lấy ra tất cả các customer
         * Xử lý các logic liên quan
         */
        $customers = $this->customerRepository->getAll();

        // Kiểm tra dữ liệu
        if (count($customers) == 0)
            return false;

        return $customers;
    }

    public function create($data = [])
    {
        // TODO: Implement create() method.
    }

    public function profile($userId)
    {
        // TODO: Implement profile() method.
    }

    public function delete($userId)
    {
        // TODO: Implement delete() method.
    }

    public function update($userId, $data = [])
    {
        // TODO: Implement update() method.
    }
}
