// Employee
$('body').on('click', '.employee-show', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#employee-name').val(response.name);
            $('#employee-email').val(response.email);
            $('#employee-img').val(response.image);
            $('#employee-office-number').val(response.office_phone_number);
            $('#employee-mobile-number').val(response.mobile_phone_number);
        }
    })

})
