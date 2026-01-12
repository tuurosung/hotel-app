export const InitializeSummernote = {


    init() {
        $('.summernote').each(function () {
            if (!$(this).data('summernote')) {
                $(this).summernote({
                    height: 200,
                    tabsize: 2,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                    ]
                });
            }
        });
    }
}

$(document).ready(() => {
    InitializeSummernote.init();
})
