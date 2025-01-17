<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Builder</title>
    <link rel="stylesheet" href="https://unpkg.com/formbuilder/dist/form-builder.min.css">
</head>
<body>
<h1>ساخت فرم</h1>
<div id="fb-editor"></div>
<button id="get-json">دریافت JSON فرم</button>
<button id="get-xml">دریافت XML فرم</button>
<div id="fb-render"></div>

<script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
<script src="https://unpkg.com/jquery-ui-dist/jquery-ui.min.js"></script>
<script src="https://unpkg.com/formbuilder/dist/form-builder.min.js"></script>

<script>
    $(document).ready(function() {
        var formBuilder = $('#fb-editor').formBuilder({
            // تنظیمات اختیاری
            onInit: function() {
                console.log('FormBuilder Initialized');
            }
        });

        $('#get-json').on('click', function() {
            var formData = formBuilder.formData;
            console.log('Form JSON:', formData);
        });

        $('#get-xml').on('click', function() {
            var xmlData = formBuilder.formData;
            // تبدیل JSON به XML اگر نیاز است
            console.log('Form XML:', xmlData);
        });
    });
</script>
</body>
</html>
