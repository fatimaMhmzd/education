CKEDITOR.replace('editor1');
if (CKEDITOR.env.isCompatible) {
    CKEDITOR.replaceAll(function(textarea, config)
    {
        config.toolbar = 'LimitedToolset';
    });
}
