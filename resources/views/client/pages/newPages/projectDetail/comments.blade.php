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
        <div class="form mt-5">
            <form>
                <fieldset class="form-floating">
                    <textarea class="form-control" placeholder="نظر شما"></textarea>
                    <label class="form-label">نظر شما</label>
                </fieldset>
                <div class="d-md-flex justify-content-end align-items-center mt-3">
                    <span class="align-middle font-12 text-muted me-3">
                        درخواست شما بعد از بررسی توسط کارشناسان در اختیار مدیر پروژه قرار میگیرد.
                    </span>
                    <button class="btn btn-site mt-md-0 mt-3">افزودن نظر</button>
                </div>
                <div class="comments mt-5">
                    <div class="card project-branch-card py-4 pt-2 px-3 mb-3">
                        <div class="position-absolute top-0 start-0">
                            <p class="detail-box bg-warning mb-0 text-black px-3 ps-4 p py-2 font-12 fw-bold">
                                رضا مهوشی
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <span class="font-12 text-muted">
                                تاریخ درج نظر 1402/2/2/2
                            </span>
                        </div>
                        <p class="font-14 text-muted card-text mt-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection

