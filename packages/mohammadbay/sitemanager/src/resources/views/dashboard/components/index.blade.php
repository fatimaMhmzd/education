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
                    <div class="card-header"><h4 class="card-title">اجزا</h4>
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
                                        <th>حذف نرم</th>
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
                                              id="myModalLabel33">اجزا</h4>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <form id="form" method="post" action="{{route('site_manager_admin_component_storeOrUpdate')}}">
                    @csrf
                    <input id="action" name="action" value="create" hidden>
                    <input id="id" name="id" hidden>
                    <div class="modal-body">

                        <label>انتخاب ماژول</label>
                        <div class="form-group">
                            <select class="form-control" name="module_id" id="module_id">
                                @foreach($data->modules as $module)
                                    <option value="{{$module->id}}">{{$module->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label>عنوان اجزا(فارسی)</label>
                        <div class="form-group">
                            <input type="text" name="title" id="title"
                                   placeholder="عنوان اجزا(فارسی)"
                                   class="form-control"></div>
                        <label>اسم اجزا(انگلیسی)</label>
                        <div class="form-group">
                            <input type="text" name="name" id="name"
                                   placeholder="اسم اجزا(انگلیسی)"
                                   class="form-control"></div>

                        <label>وضعیت اجزا</label>
                        <div class="form-group">
                            <select class="form-control" name="is_active" id="is_active">
                                <option value="1">فعال</option>
                                <option value="0">غیرفعال</option>
                            </select>
                        </div>
                        <label>نیاز به حذف نرم</label>
                        <div class="form-group">
                            <select class="form-control" name="soft_delete" id="soft_delete">
                                <option value="1">دارد</option>
                                <option value="0">ندارد</option>
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
                ajax: "{{ route('site_manager_admin_component_list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'name', name: 'name'},
                    {
                        data: 'is_active', name: 'is_active',
                        render: function (data, type, row) {
                            var statusOptions = {
                                1: 'فعال',
                                0: 'غیرفعال'
                            };
                            return statusOptions[data] ?? 'نامشخص';
                        }
                    },
                    {
                        data: 'soft_delete', name: 'soft_delete',
                        render: function (data, type, row) {
                            var softDeleteOptions = {
                                1: 'بله',
                                0: 'خیر'
                            };
                            return softDeleteOptions[data] ?? 'نامشخص';
                        }
                    },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>


@endsection
