<?php

namespace App\App\Payment\Controllers;

use App\App\Payment\Requests\PaymentRequest;
use Domain\Mollie\Actions\CreateMolliePaymentAction;
use Domain\Payment\DataTransferObjects\PaymentData;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Inertia\Inertia;
use Inertia\Response;

class PaymentController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): Response
    {
        return Inertia::render('Payment/Index');
    }

    public function store(PaymentRequest $request, CreateMolliePaymentAction $action)
    {
        $data = PaymentData::fromRequest($request);

        $payment = $action->execute($data);

        return redirect()->to($payment->getCheckoutUrl());
    }
}
