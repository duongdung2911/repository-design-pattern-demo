<?php

namespace App\Http\Controllers;

use App\Services\CustomerServiceInterface;
use Illuminate\Http\Request;

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
        return view('welcome', compact('customers'));
    }

    public function edit($customerId)
    {
        $customer = $this->customerService->getCustomerById($customerId);
        return view('welcome', compact('customer'));
    }

    public function update(Request $request, $customerId) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required',
        ]);
        return $this->customerService->update($customerId, $request->all());
    }
}
