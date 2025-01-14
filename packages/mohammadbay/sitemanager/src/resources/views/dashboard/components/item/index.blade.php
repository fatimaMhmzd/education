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
                    <div class="card-header"><h4 class="card-title">ایتم ها</h4>

                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard"><p class="card-text"></p>
                            <form id="form" method="post"
                                  action="{{route('site_manager_admin_component_item_store',request()->id)}}">

                                <table class="table table-bordered table-responsive" id="fieldsTable">
                                    <thead>
                                    <tr>
                                        <th>عنوان فیلد(فارسی)</th>
                                        <th>عنوان فیلد(انگلیسی)</th>
                                        <th>نوع</th>
                                        <th>Relation</th>
                                        <th>Relation نوع</th>
                                        <th>اختیاری اجباری</th>
                                        <th>نمایش در لیست</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data->items as $item)

                                        <tr>
                                            <td style="display: none"><input name="fields[{{$loop->index}}][id]"
                                                                             value="{{$item->id}}"></td>
                                            <td><input type="text" name="fields[{{$loop->index}}][title]"
                                                       value="{{$item->title}}"
                                                       placeholder="عنوان فارسی" class="form-control" required></td>
                                            <td><input type="text" name="fields[{{$loop->index}}][name]"
                                                       value="{{$item->name}}"
                                                       placeholder="عنوان انگلیسی" class="form-control" required></td>
                                            <td>
                                                <select name="fields[{{$loop->index}}][type_id]"
                                                        class="form-control type-select">
                                                    <option value="0">انتخاب کنید</option>
                                                    @foreach($data->types as $type)
                                                        <option value="{{$type->id}}"
                                                                @if($item->type_id == $type->id) selected @endif>{{$type->title}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select name="fields[{{$loop->index}}][relation_component_id]"
                                                        class="form-control relation-select">
                                                    <option value="0">انتخاب کنید</option>
                                                    @foreach($data->models as $model)
                                                        <option value="{{$model->id}}"
                                                                @if($item->relation_component_id == $model->id) selected @endif>{{$model->title}}
                                                            (ماژول:{{$model->module->title}})
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select name="fields[{{$loop->index}}][relation_type]"
                                                        class="form-control relation-select">
                                                    <option value="0">انتخاب کنید</option>
                                                    @foreach(\mohammadbay\sitemanager\Enums\RelationType::getLabelKeys() as $key=>$val)
                                                        <option value="{{$key}}"
                                                                @if($key == $item->relation_type) selected @endif>{{$val}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                           name="fields[{{$loop->index}}][required]"
                                                           id="reqy{{$loop->index}}" @if($item->required == "1") checked
                                                           @endif value="1">
                                                    <label class="form-check-label" for="reqy{{$loop->index}}">
                                                        اجباری
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                           name="fields[{{$loop->index}}][required]"
                                                           id="reqn{{$loop->index}}" @if($item->required == "0") checked
                                                           @endif value="0">
                                                    <label class="form-check-label" for="reqn{{$loop->index}}">
                                                        اختیاری
                                                    </label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                           name="fields[{{$loop->index}}][in_list]"
                                                           id="showy{{$loop->index}}" value="1"
                                                           @if($item->in_list == "1") checked @endif>
                                                    <label class="form-check-label" for="showy{{$loop->index}}">
                                                        بله
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                           name="fields[{{$loop->index}}][in_list]"
                                                           id="shown{{$loop->index}}" value="0"
                                                           @if($item->in_list == "0") checked @endif>
                                                    <label class="form-check-label" for="shown{{$loop->index}}">
                                                        خیر
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger remove-row">حذف ردیف
                                                </button>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                                <button id="addField" type="button" class="btn btn-primary">افزوردن فیلد</button>
                                <button id="submit-all-form" type="button" class="btn btn-success">ذخیره</button>
                                <a class="btn btn-danger" id="generate-code">ایجاد سورس کد</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('script')

    <script>
        $(document).ready(function () {
            // Counter to keep track of row IDs
            let rowId = {!! count($data->items) !!};

            // Event handler to add a new row
            $('#addField').click(function () {
                addRow();
            });

            var types = {!! $data->types !!};
            var typeOptions = "<option value='0'>انتخاب کنید</option>";
            $.each(types, function (index, item) {
                typeOptions = typeOptions + `<option value="${item.id}">${item.title}</option>`;
            });

            var models = {!! $data->models !!};
            var modelOptions = "<option value='0'>انتخاب کنید</option>";
            $.each(models, function (index, item) {
                modelOptions = modelOptions + `<option value="${item.id}">${item.title}(ماژول:${item.module.title})</option>`;
            });

            const relationTypes = @json(
                collect(\mohammadbay\sitemanager\Enums\RelationType::getLabelKeys())
            );

            var relationOptions = "<option value='0'>انتخاب کنید</option>";
            $.each(relationTypes, function (index, item) {
                relationOptions = relationOptions + `<option value="${index}">${item}</option>`;
            });

            // Function to add a new row
            function addRow() {
                rowId++;
                let newRow = `
                <tr id="row${rowId}">
                    <td style="display: none"><input name="fields[${rowId}][id]" value="0"></td>
                    <td><input type="text" name="fields[${rowId}][title]" placeholder="عنوان فارسی" class="form-control" required></td>
                    <td><input type="text" name="fields[${rowId}][name]" placeholder="عنوان انگلیسی" class="form-control" required></td>
                    <td>
                        <select name="fields[${rowId}][type_id]" class="form-control type-select">
                           ${typeOptions}
                        </select>
                    </td>
                    <td>
                        <select name="fields[${rowId}][relation_component_id]" class="form-control relation-select">
                            ${modelOptions}
                        </select>
                    </td>
                    <td>
                        <select name="fields[${rowId}][relation_type]" class="form-control relation-select">
                            ${relationOptions}
                        </select>
                    </td>
                    <td>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="fields[${rowId}][required]" id="reqy${rowId}" checked value="1">
                          <label class="form-check-label" for="reqy${rowId}">
                            اجباری
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="fields[${rowId}][required]" id="reqn${rowId}" value="0">
                          <label class="form-check-label" for="reqn${rowId}">
                            اختیاری
                          </label>
                        </div>
                    </td>

                    <td>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="fields[${rowId}][in_list]" id="showy${rowId}" value="1" checked>
                          <label class="form-check-label" for="showy${rowId}">
                            بله
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="fields[${rowId}][in_list]" id="shown${rowId}" value="0">
                          <label class="form-check-label" for="shown${rowId}">
                            خیر
                          </label>
                        </div>
                    </td>
                    <td><button type="button" class="btn btn-danger remove-row">حذف ردیف</button></td>
                </tr>`;
                $('#fieldsTable tbody').append(newRow);
            }

            // Event handler to remove a row
            $(document).on('click', '.remove-row', function () {
                $(this).closest('tr').remove();
            });
            if (rowId === 0) {
                addRow();
            }

            $(document).on('click', '#generate-code', function () {
                const localUrl = "{{route('site_manager_admin_component_item_generateCode',request()->id)}}";

                $.ajax({
                    url: localUrl, // آدرس حذف
                    type: 'GET',
                    success: function (data) {
                        toastr.success(data.message, 'تبریک', {"progressBar": true})
                    },
                    error: function (xhr) {
                        toastr.error('خطایی رخ داده است.', 'اخطار', {"progressBar": true});
                    }
                });
            });

        });
    </script>

@endsection
