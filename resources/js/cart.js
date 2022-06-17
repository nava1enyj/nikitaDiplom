window.$ = require('jquery');
$('#addToCart').on('click', function (e) {
    e.preventDefault();
    addToCart();
})


$('#number').on('click', function () {

    let number = document.getElementById('number').value;
    if (number <= 0) {
        number = 1;
        document.getElementById('number').value = number;

    }
});

function addToCart() {

    let number = parseInt(document.getElementById('number').value);
    let id = document.getElementById('id').value;
    let total_qty = parseInt($('.cart-qty').text());
    console.log(total_qty);
    total_qty += number;
    $('.cart-qty').text(total_qty);
    if (number <= 0) {
        number = 1;
    }


    $.ajax({
        url: "/addToCart",
        method: "POST",
        data: {
            id: id,
            number: number
        },
        success: function (data) {
            let ss = document.getElementById('success');
            var div = document.createElement('div');
            div.innerHTML = `<div class="alert alert-success mt-3">Товар успешно добавлен , можете посмотреть в <a
                href="/cart" class="link link-primary">корзине</a></div>`;
            ss.appendChild(div);


        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


}
