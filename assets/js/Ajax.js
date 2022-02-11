$(document).on('submit', '#Kontent5Forma', function(e) {
    e.preventDefault(); // Prevents the default page reload after form submission

    $.ajax({
        type: $(this).prop('method'),
        url: $(this).prop('action'),
        data: $(this).serialize()
    }).done(function() {
        // Do something after it submits
        alert('Товар добавлен в корзину!');
    }).fail(function() {
        // There was an error
        alert('Что то пошло не так');
    });
});
