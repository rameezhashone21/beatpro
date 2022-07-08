@extends('layout')
  
@section('content')
<section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-white shadow rounded">
                            <div class="py-3" style="background-color: #000;">
                                <h2 class="text-white fs-4 mb-0 ps-5">Checkout</h2>
                            </div>
                            <div class="row py-lg-5">
                                <div class="col-lg-6">
                                    <div class="ps-lg-5 p-4 py-lg-0 pe-lg-0">
                                        <h3 class="fs-4 mb-4">Billing detail</h3>
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <label for="country" class="fw-bold mb-2">Country</label>
                                                <select name="country" id="country" class="form-select">
                                                    <option value="United Kingdom(UK)">United Kingdom(UK)</option>
                                                    <option value="United Kingdom(UK)">United Kingdom(UK)</option>
                                                    <option value="United Kingdom(UK)">United Kingdom(UK)</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName" class="fw-bold mb-2">First Name</label>
                                                <input type="text" class="form-control" id="firstName">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="lastName" class="fw-bold mb-2">Last Name</label>
                                                <input type="text" class="form-control" id="lastName">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="companyName" class="fw-bold mb-2">Company Name</label>
                                                <input type="text" class="form-control" id="companyName">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="fw-bold mb-2">Email</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="phone" class="fw-bold mb-2">Phone</label>
                                                <input type="tel" class="form-control" id="phone">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="accountPassword" class="fw-bold mb-2">Account Password</label>
                                                <input type="tel" class="form-control" id="accountPassword">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="orderNote" class="fw-bold mb-2">Order Note</label>
                                                <textarea id="orderNote" class="form-control" rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="bg-white shadow rounded px-lg-5 pb-lg-5 me-lg-5 px-5 pb-4">
                                        <h2 class="border-bottom text-center py-4 mb-4">Your Order</h2>
                                        <h3 class="fs-5 mb-4">Beats</h3>
                                        @php $total = 0 @endphp
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        <div class="row gy-2">
                                            <div class="col-sm-6">{{ $details['name'] }}</div>
                                            <div class="col-sm-6 text-end">${{ $details['price'] }}</div>
                                        </div>
                                        @endforeach
                                        @endif
                                        <div class="border-top border-bottom py-3 mt-3">
                                            <div class="row ">
                                                <div class="col-sm-6 fw-bold" style="font-size: 18px;">Subtotal</div>
                                                <div class="col-sm-6 text-end fw-bold">${{ $total }}</div>
                                            </div>
                                        </div>
                                        <div class="py-3 mb-3">
                                            <div class="row">
                                                <div class="col-sm-6 fw-bold" style="font-size: 18px;">Total</div>
                                                <div class="col-sm-6 text-end fw-bold fs-5">${{ $total }}</div>
                                            </div>
                                        </div>
                                        <label for="haveCoupon" class="mb-3">Have A Coupon ?</label>
                                        <div class="row g-0 mb-5">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control coupon-input" id="haveCoupon" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-sm-4">
                                                <button type="submit" class="coupon-btn border-0 w-100">Update Cart</button>
                                            </div>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="paymentMethodsCard" id="creditDebtCards">
                                            <label class="form-check-label d-flex justify-content-between" for="creditDebtCards">
                                                <span>
                                                    Credit Or Debt Cards
                                                </span>
                                                <span>
                                                    <img src="assets/img/visa.png" alt="">
                                                    <img src="assets/img/mastercard.png" alt="">
                                                    <img src="assets/img/stirpe.png" alt="">
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymentMethodsCard" id="paypal" checked>
                                            <label class="form-check-label d-flex justify-content-between" for="paypal">
                                                <span>
                                                    Paypal
                                                </span>
                                                <span>
                                                    <img src="assets/img/paypal.png" alt="">
                                                </span>
                                            </label>
                                        </div>
                                        <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('checkout') !!}" >
                                        {{ csrf_field() }}
                                        <input id="amount" type="hidden" class="form-control" name="amount" value="{{ $total }}" autofocus>
                                        <button type="submit" class="btn-submit-login d-block text-center btn-place-order mt-5">Place Order</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('scripts')
@endsection