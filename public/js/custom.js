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
            $('#employee-email').text(response.email);
            $('#employee-img').text(response.image);
            $('#employee-office-number').text(response.office_phone_number);
            $('#employee-mobile-number').text(response.mobile_phone_number);
        }
    });

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
    });

});



$('body').on('click', '.assetItem-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#assetsItem-edit').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            console.log(response);
            $('#asset-edit-serial').val(response.serial_number);
            $('#asset-edit-description').val(response.description);
            $('#asset-edit-type').val(response.asset_type);
            $('#asset-edit-location').val(response.location_id);
            $('#asset-edit-manufacturer').val(response.manufacturer);
            $('#asset-edit-brand').val(response.brand);
            $('#asset-edit-model').val(response.model);
            $('#asset-edit-image').val(response.asset_image);
        }
    });

});

$('body').on('click', '.coa-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#coa-edit').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            console.log(response);
            $('#coa-cat-id').val(response.coa_cat_id);
            $('#coa-code').val(response.coa_code);
            $('#coa-name').val(response.coa_name);
            $('#coa-x-name').val(response.coa_x_name);
            $('#chart_of_accounts_cartegory_id').text(response.chart_of_accounts_cartegory_id);
            
        }
    });

});

$('body').on('click', '.coacat-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#coacat-edit').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            console.log(response);
            $('#coacat-code').val(response.coa_cat_code);
            $('#coacat-name').val(response.coa_cat_name);
            $('#coa-min').val(response.coa_min);
            $('#coa-max').val(response.coa_max);
            $('#last-modified-by').val(response.last_modified_by);
        }
    });

});

//Delete Method
$('body').on('click', '.assetItems-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#form-delete').attr('action', url);
});

$('body').on('click', '.employee-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#form-delete').attr('action', url);
});

$('body').on('click', '.coa-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#form-delete').attr('action', url);
});

$('body').on('click', '.coacat-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#form-delete').attr('action', url);
});


$(document).ready(function () {
    $(document).on('click','#edit',function(event) {
            var text = $(this).text();
            $('#title').text('Edit Asset Location');
            $('#locationName').val(text);
            //$('#delete').show('400');
            $('#saveChanges').show('400');
            $('#addAssetBtn').hide('400');
            console.log(text);
    });
    $(document).on('click','#addAsset',function(event) {
        $('#title').text('Add Asset Location');
        $('#locationName').val('');
        //$('#delete').hide('400');
        $('#saveChanges').hide('400');
        $('#addAssetBtn').show('400');

    });

    $('#addAssetBtn').click(function (event) {
        var text = $('#locationName').val();
        $.post('location',{'text': text,'_token':$('input[name=_token]').val()},function(data) {
            console.log(data);
            $('#refresh').load(location.href +' #refresh');
        });

    });
});
