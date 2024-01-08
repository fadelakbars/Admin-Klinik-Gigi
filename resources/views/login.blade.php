@extends('layouts.login-signin')

@section('form')
    <section class="vh-100" style="background-color: #61859a;">
        <div class="container d-flex justify-content-center align-items-center py-5 h-100">
            <div class="row  h-100">
                <div class="col col-xl-10 ">
                    <div class="card" style="border-radius: 1rem; width:30rem;">
                        <div class="col-lg-100 ">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form action="">

                                    <div class="w-100 h-25 d-flex align-items-center mb-3 pb-1">
                                        <img class="float-start img-fluid" style="max-width:4rem" src="{{ asset('style/assets/img/klinik-fifin.jpg') }}"
                                            alt="logo">
                                        <h4 class="text-bold" style="margin-left: 1rem">FIFIN DENTAL KLINIK</h4>
                                    </div>
                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login ke akun anda</h5>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                                    </div>

                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
