// import { InitializeDatepicker } from '../modules/plugins/InitializeDatepicker';
const datepickerFreeSelect = {
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
}

const datepickerBlockBefore = {
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
    startDate: new Date()
}

const datepickerOnlyFuture = {
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
    startDate: new Date(new Date().setDate(new Date().getDate() + 1))
}

$('.datepicker').datepicker(datepickerFreeSelect);
$('.datepicker-block-before').datepicker(datepickerBlockBefore);
$('.datepicker-only-future').datepicker(datepickerOnlyFuture);


$('#checkin_date').on('input', function() {
    var minDate = $(this).val();
    $('#checkout_date').datepicker('setStartDate', minDate);
});
