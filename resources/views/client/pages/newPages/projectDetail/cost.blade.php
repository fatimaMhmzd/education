@extends('client.layout.total')

@section('style')
@stop

@section('content')
    <main class="container" id="costs">
        <x-project-header></x-project-header>
        <div class="row justify-content-center my-5">
            <div class="col-xl-6 col-md-8">
                <div class="d-lg-flex d-block justify-content-center align-items-center px-md-0 px-5">
                    <div class="new-title-page position-relative me-lg-3 pe-3 pt-lg-0 pt-2 pb-4">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 حذ- text-center">
                        <span class="font-14 text-black fw-bold">
                            هزینه های ضرروی
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-5 fw-bold">
                            <span class="price">200000000</span>
                            تومان
                        </p>
                    </div>
                    <p class="align-middle text-center my-3 mb-2">+</p>
                    <div class="new-title-page position-relative pe-3 pt-lg-0 pt-2 pb-4 me-lg-3">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            هزینه های مکمل
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-5 fw-bold">
                            <span class="price">200000000</span>
                            تومان
                        </p>
                    </div>
                    <p class="align-middle text-center my-3 mb-2">=</p>
                    <div class="new-title-page position-relative pe-3 pt-lg-0 pt-2 pb-4 me-lg-3">
                        <div
                            class="new-title-page-child shadow position-absolute start-0 top-0 px-3 p-4 py-2 text-center">
                        <span class="font-14 text-black fw-bold">
                            کل بودجه
                        </span>
                        </div>
                        <p class="font-14 text-white text-end mt-5 fw-bold">
                            <span class="price">400000000</span>
                            تومان
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered text-center table-warning align-middle">
                <thead>
                <tr>
                    <th>عنوان هزینه</th>
                    <th>مبلغ هزینه (تومان)</th>
                    <th>نوع هزینه</th>
                    <th>محل هزینه</th>
                    <th style="width: 400px !important;">توضیحات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>تست</td>
                    <td class="price">1000000</td>
                    <td>ضر</td>
                    <td>اجرایی</td>
                    <td colspan="6" style="width: 100px !important;">
                        <span style="width: 300px" class="text-line  align-middle">
                            محل کارماران
                        </span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection

