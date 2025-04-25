<?php

namespace App\Http\Controllers;

use App\Http\Requests\siteOrder\CreateRequest;
use App\Services\SiteOrderService;
use Illuminate\Http\Request;

class SiteOrderController extends Controller
{
    public function __construct(public SiteOrderService $service)
    {}

    public function store(CreateRequest $request)
    {
        try {
            $this->service->create($request->validated());
            return response()->json([
                'message' => 'Your order has been successfully created.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while creating your order.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }
}
