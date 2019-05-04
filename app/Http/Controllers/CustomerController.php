<?php

namespace App\Http\Controllers;

use App\Services\CustomerServiceInterface;

class CustomerController extends Controller
{
    protected $customerService;

    // Tiêm CustomerServiceInterface vào trong hàm khởi tạo
    public function __construct(CustomerServiceInterface $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        // Gọi đến phương thức index dưới tầng service
        $customers = $this->customerService->index();

        // Trả kết quả nhận được từ tầng service ra ngoài view
        return view('welcome', compact(['customers']));
    }
}
