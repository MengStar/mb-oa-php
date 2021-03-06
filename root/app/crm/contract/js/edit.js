$(document).ready(function()
{
    $('.orderTH').not(':first').empty();

    $(document).on('focus', '.select-order', function()
    {
        $('#tmpData').html($('#orderGroup tbody').html());

        indexValue = $(this).find('option:selected').val();

        $('.select-order').not('#tmpData select, .orderGroup select').each(function()
        {
            selectedValue = $(this).find('option:selected').val();

            if(selectedValue && selectedValue != indexValue)
            {
                $('#tmpData').find("option[value='" + selectedValue + "']").remove();
            }
        });

        $(this).html($('#tmpData select').html());
        $(this).val(indexValue);
    })

    $(document).on('click', '.plus', function()
    {
        $(this).parents('tr').after($('#orderGroup tbody').html());
    });
  
    $(document).on('click', '.minus', function()
    {
        if($(this).parents('table').find('.order-real').not('tbody.hide .order-real').size() == 1)
        {
            $(this).parents('tr').html($('#orderGroup tr').html());
            $(this).parents('td').find('select').val('').change();

            if($('.orderTH:first').html() == '') $('.orderTH:first').html(v.order);
            return false;
        }
        $(this).parents('tr').remove();
        $('.order-real').change();

        if($('.orderTH:first').html() == '') $('.orderTH:first').html(v.order);
    });

    $('#customer').change(function()
    {
        $('#address').load(createLink('contract', 'ajaxGetAddresses', 'customer=' + $(this).val()), function()
        {
            $('#address').trigger('chosen:updated');
        }); 
    });
})
