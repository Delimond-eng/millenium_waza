@extends('layouts.app')

@section('content')
    <div class="row authentication mx-0">
        <div class="col-xxl-7 col-xl-7 col-lg-12">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12">
                    <form class="p-5" id="payForm" action="{{ route('millenium.mpesa.payment') }}">
                        <p class="h5 fw-semibold mb-2 d-lg-none d-sm-block">Millenium PAY PORTAL</p>
                        <p class="mb-3 text-muted op-7 fw-normal d-lg-none d-sm-block">Veuillez procéder à votre paiement !</p>

                        <div id="errors-section">
                        </div>

                        <div class="row gy-3 mt-3">
                            <div class="col-xl-12 mt-0">
                                <label for="amount" class="form-label text-default">Amount</label>
                                <div class="d-flex">
                                    <input type="number" id="amount" value="30" name="amount" class="form-control form-control-lg border-primary w-100 me-1"  placeholder="enter amount" readonly>
                                    <select name="currency" style="width: 100px" class="form-control border-1 border-primary" name="currency" id="currency" disabled>
                                        <option value="USD" selected>USD</option>
                                        <option value="CDF">CDF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12"> <label for="customer_id" class="form-label text-default">CostumerID</label>
                                <input type="text" class="form-control form-control-lg"
                                    id="customer_id" name="customer_id" placeholder="enter customer_id ID">
                             </div>
                            <div class="col-xl-12"> <label for="phone" class="form-label text-default">Mpesa Phone Number <sup class="text-danger">*</sup></label>
                                <div class="d-flex">
                                    <input class="form-control me-1 text-primary" type="tel" value="+243" style="width: 70px" readonly>
                                    <input name="phone" type="text" class="form-control form-control-lg"
                                    id="phone" type="tel" placeholder="enter your Mpesa phone number" maxlength="9" required> </div>
                                </div>

                            <div class="col-xl-12 d-grid mt-3">
                                <button id="submitBtn" class="btn btn-lg btn-primary" type="submit"><span id="btn-loader" class="spinner-border spinner-border-sm align-middle d-none" role="status" aria-hidden="true"></span> Make payment</button>
                             </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xxl-5 col-xl-5 col-lg-5 d-xl-block d-none px-0">
            <div class="authentication-cover">
                <div class="aunthentication-cover-content rounded">
                    <div
                        class="swiper keyboard-control swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper"
                             aria-live="off">
                             <div
                                    class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5"> <img src="{{ asset('assets/images/tap-to-pay.png') }}"
                                                class="authentication-image" alt=""> </div>
                                        <h6 class="fw-semibold text-fixed-white">Millenium PAY PORTAL</h6>
                                        <p class="fw-normal fs-14 op-7"> Veuillez effectuer le paiement en toute sécurité avec <b class="text-primary">Millenium Pay</b></p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="{{ asset('assets/js/app/pay_manage.js') }}"></script>
@endsection

