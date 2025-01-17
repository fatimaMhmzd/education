@extends('dashboard.layout.total')

@section('style')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">


@stop

@section('content')

    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h4 class="card-title">فرم</h4>
                        <div class="fonticon-container" data-toggle="modal" onclick="resetForm()"
                             data-target="#inlineForm">
                            <div class="fonticon-wrap"><i class="feather icon-plus-square"></i></div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard"><p class="card-text"></p>
                            <div class="table-responsive">
                                <table class="table data-table">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>عنوان</th>
                                        <th>url</th>
                                        <th>قیمت۱</th>
                                        <th>قیمت۲</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="inlineForm" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header"><h4 class="modal-title"
                                                  id="myModalLabel33">ایجاد ماژول</h4>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form id="form" method="post" action="{{route('admin_form_storeOrUpdate')}}">
                        @csrf
                        <input id="action" name="action" value="create" hidden>
                        <input id="id" name="id" hidden>
                        <div class="modal-body">
                            <label>عنوان</label>
                            <div class="form-group">
                                <input type="text" name="title" id="title"
                                       placeholder="عنوان "
                                       class="form-control"></div>
                            <label>url</label>
                            <div class="form-group">
                                <input type="text" name="url" id="url"
                                       placeholder="url"
                                       class="form-control"></div>
                            <label>توضیحات</label>
                            <div class="form-group">
                            <textarea name="description" id="description" class="form-control ckeditor-textarea">

                            </textarea>
                            </div>
                            <label>قیمت ۱</label>
                            <div class="form-group">
                                <input type="text" name="price1" id="price1"
                                       placeholder="قیمت ۱"
                                       class="form-control"></div>
                            <label>قیمت ۲</label>
                            <div class="form-group">
                                <input type="text" name="price2" id="price2"
                                       placeholder="قیمت ۲"
                                       class="form-control"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="submit-all-form">ثبت
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

@stop

@section('script')
    <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script
        src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>

    <script>

        $(document).ready(function () {

            datatable = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin_form_list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'url', name: 'url'},
                    {data: 'price1', name: 'price1'},
                    {data: 'price2', name: 'price2'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>


@endsection
