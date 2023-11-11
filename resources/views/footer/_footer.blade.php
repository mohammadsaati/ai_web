<!--begin::footer-->
<footer class="footer container-fluid bg-dark">
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                <img alt="Logo" src="{{ asset(config("settings.logo_with")) }}" class="img-fluid" />
                <p class="text-light">
                    خبرنامه بسیار مهم است و توسط مشتری دنبال می شود.
                    <br>
                    پست الکترونیک خود را وارد کنید
                </p>
                <form>
                    <div class="row">
                        <div class="col-6">
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-danger">
                                ثبت نام
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pt-15">
                <h2 class="text-light">تماس با ما</h2>
                <hr class="border border-1  bg-light">
                <div class="text-light">
                    <h4 class="text-light">
                        {!! getIcon(name: "call"  , class: "fs-2x") !!}
                        تلفن
                    </h4>
                    09148919361
                </div>
                <div class="text-light">
                    <h4 class="text-light">
                        {!! getIcon(name: "map"  , class: "fs-2x") !!}
                        آدرس
                    </h4>
                    تبریز ، آبرسان
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pt-15">
                <h2 class="text-light">شرکت</h2>
                <hr class="border border-1 bg-light">
                <div class="text-light">
                    در باره ما
                    <br>
                    شرایط و ظوابط
                    <br>
                    سوالات متداول
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pt-15">
                <h2 class="text-light">اینیستاگرام</h2>
                <hr class="border border-1 bg-light">
                <div class="row">
                    <div class="col-xl-4 xol-lg-4 col-6">
                        <div class="m-2">
                            <a href="">
                            <img src="{{ asset('assets/media/books/1.png') }}" class="img-fluid h-100px w-150px rounded-1">
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-4 xol-lg-4 col-6">
                        <div class="m-2">
                            <a href="">
                            <img src="{{ asset('assets/media/books/10.png') }}" class="img-fluid h-100px w-150px rounded-1">
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-4 xol-lg-4 col-6">
                        <div class="m-2">
                            <a href="">
                            <img src="{{ asset('assets/media/books/5.png') }}" class="img-fluid h-100px w-150px rounded-1">
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-4 xol-lg-4 col-6">
                        <div class="m-2">
                            <a href="">
                            <img src="{{ asset('assets/media/books/7.png') }}" class="img-fluid h-100px w-150px rounded-1">
                        </a>
                        </div>
                    </div><div class="col-xl-4 xol-lg-4 col-6">
                        <div class="m-2">
                            <a href="">
                            <img src="{{ asset('assets/media/books/2.png') }}" class="img-fluid h-100px w-150px rounded-1">
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-4 xol-lg-4 col-6">
                        <div class="m-2">
                            <a href="">
                            <img src="{{ asset('assets/media/books/9.png') }}" class="img-fluid h-100px w-150px rounded-1">
                        </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

            </div>
        </div>
        <br/>
    </div>
</footer>
<!--end::footer-->
