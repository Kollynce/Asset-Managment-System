// Employee
$('body').on('click', '.employee-show', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#employee-name').text(response.name);
            $('#employee-email').val(response.email);
            $('#employee-img').val(response.image);
            $('#employee-office-number').val(response.office_phone_number);
            $('#employee-mobile-number').val(response.mobile_phone_number);
        }
    })

});


$('body').on('click', '.employee-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#employee-edit').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#employee-name-edit').val(response.name);
            $('#employee-email-edit').val(response.email);
            $('#employee-img-edit').val(response.image);
            $('#employee-office-number-edit').val(response.office_phone_number);
            $('#employee-mobile-number-edit').val(response.mobile_phone_number);
        }
    })

})
