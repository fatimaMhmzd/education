<!-- در فایل layout.blade.php یا فایل اصلی HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Builder</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- اضافه کردن CSS formBuilder -->

</head>
<body>

<h1>Create Form</h1>
<form action="" method="POST" id="form-builder-form">
    @csrf
    <label for="name">Form Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>

    <div id="fb-editor"></div>
    <input type="hidden" name="fields" id="form-fields">

    <button type="submit">Create Form</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- اضافه کردن formBuilder -->
<script src="https://cdn.jsdelivr.net/npm/formBuilder@3.6.1/dist/form-builder.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/formBuilder@3.6.1/dist/form-render.min.js"></script>


<script>
        $(function() {
            var options = {
                onSave: function(evt, formData) {
                    $('#form-fields').val(JSON.stringify(formData));
                    $('#form-builder-form').submit();
                }
            };
            var formBuilder = $('#fb-editor').formBuilder(options);
        });
    </script>

</body>
</html>
