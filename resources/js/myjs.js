$('.custom-file-input').on('change', function() {
    let filename = $(this).val().split('\\').pop();
    $(this).siblings('.custom-file-label').addClass('selected').html(filename);
});
