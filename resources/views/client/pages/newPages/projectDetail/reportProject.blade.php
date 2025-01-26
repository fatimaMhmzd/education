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
        <p class="card-text text-center font-14 text-muted mt-5">
            در صورت شکایت یا ثبت تخلف می توانید شکایت یا گزارش تخلف خود را در این بخش ثبت نمایید !
        </p>
        <div class="form">
            <form>
                <fieldset class="form-floating">
                    <textarea class="form-control" placeholder="ثبت تخلف / شکایت"></textarea>
                    <label class="form-label">ثبت تخلف / شکایت</label>
                </fieldset>
                <div class="d-md-flex justify-content-end align-items-center mt-3">
                    <span class="align-middle font-12 text-muted me-3">
                        درخواست شما بعد از بررسی توسط کارشناسان در اختیار مدیر پروژه قرار میگیرد.
                    </span>
                    <button class="btn btn-site mt-md-0 mt-3 px-4">ارسال</button>
                </div>
            </form>
        </div>
    </main>
@endsection

