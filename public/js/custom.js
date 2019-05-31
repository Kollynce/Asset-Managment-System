// Employee


$('body').on('click', '.employee-show', function(e){
    e.preventDefault();

    url = $(this).attr('href');
    console.log(url);
    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        successs: function(response){
            console.log(response);
        }

    })

})
