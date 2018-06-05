
$('.single-item').slick({
    autoplay:true
});

(function ($) {
    $(".btn-ord").on('click', function (ev) {
        ev.preventDefault();

        var $this = $(this),
            url = $this.data('url'),
            prodId = $this.data('id'),
            quantity = $this.parent().find('.item_quantity').val();

        $.ajax(url, {
            type: 'POST',
            data: {
                prodId: prodId,
                quantity: quantity
            },
            success: function (data) {
                //console.log(data);
            }
        });
        console.log(prodId);
        console.log(quantity);
    });
})(jQuery);