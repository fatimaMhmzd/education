@extends('sitemanager::layout.total')

@section('style')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('vendor/sitemanager/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">


@stop

@section('content')

    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h4 class="card-title">ماژول</h4>
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
                                        <th>عنوان فارسی</th>
                                        <th>اسم انگلیسی</th>
                                        <th>وضعیت</th>
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
    </section>
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header"><h4 class="modal-title"
                                              id="myModalLabel33">ایجاد ماژول</h4>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form id="form" method="post" action="{{route('site_manager_admin_modules_storeOrUpdate')}}">
                    @csrf
                    <input id="action" name="action" value="create" hidden>
                    <input id="id" name="id" hidden>
                    <div class="modal-body">
                        <label>عنوان ماژول(فارسی)</label>
                        <div class="form-group">
                            <input type="text" name="title" id="title"
                                   placeholder="عنوان ماژول(فارسی)"
                                   class="form-control"></div>
                        <label>اسم ماژول(انگلیسی)</label>
                        <div class="form-group">
                            <input type="text" name="name" id="name"
                                   placeholder="اسم ماژول(انگلیسی)"
                                   class="form-control"></div>
                        <label>وضعیت مدال</label>
                        <div class="form-group">
                            <select class="form-control" name="active" id="active">
                                <option value="1">فعال</option>
                                <option value="0">غیرفعال</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="submit-all-form">ثبت
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ asset('vendor/sitemanager/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script
        src="{{ asset('vendor/sitemanager/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>

    <script>

        $(document).ready(function () {

            datatable = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('site_manager_admin_modules_list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'name', name: 'name'},
                    {
                        data: 'active', name: 'active',
                        render: function (data, type, row) {
                            var statusOptions = {
                                1: 'فعال',
                                0: 'غیرفعال'
                            };
                            return statusOptions[data] ?? 'نامشخص';
                        }
                    },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>


@endsection
