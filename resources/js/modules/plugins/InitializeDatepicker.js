export const InitializeDatepicker  = {

    init() {
        $('.datepicker').each(function () {
            if (!$(this).hasClass('hasDatepicker')) {
                $(this).datepicker({
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "-100:+10",
                });
            }
        })
    }

}

$(document).ready(() => {
    InitializeDatepicker.init();
});
