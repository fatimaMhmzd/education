@extends('client.layout.total')

@section('style')
    <style>
        #team textarea {
            height: 150px;
        }
    </style>
@stop

@section('content')
    <main class="container" id="team">
        <x-project-header></x-project-header>
        <div class="row justify-content-center my-5">
            <p class="card-text text-center font-14 text-muted">
                شما می توانید جهت همکاری با صاحب پروژه درخواست خود را با توضیحات مورد نیاز ثبت نمایید !
            </p>
            <div class="col-lg-6">
                <div class="d-flex justify-content-center">
                    <div class="new-title-page position-relative me-3 pe-3 pb-2">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            ثبت شده
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold"> 4 درخواست</p>
                    </div>
                    <div class="new-title-page position-relative pe-3 pb-2">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            تایید شده
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-lg-4 mt-5 fw-bold"> 4 درخواست</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form">
            <form>
                <fieldset class="form-floating">
                    <textarea class="form-control" placeholder="درخواست همکاری"></textarea>
                    <label class="form-label">درخواست همکاری</label>
                </fieldset>
                <div class="d-md-flex justify-content-end align-items-center mt-3">
                    <span class="align-middle font-12 text-muted me-3">
                        درخواست شما بعد از بررسی توسط کارشناسان در اختیار مدیر پروژه قرار میگیرد.
                    </span>
                    <button class="btn btn-site mt-md-0 mt-3">ثبت درخواست</button>
                </div>
            </form>
        </div>
    </main>
@endsection

