'use strict'

document.addEventListener("DOMContentLoaded", function () {
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });

    $('.shop-orders-slider').slick({
        Infinity: false,
        arrows: true,
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    $('.shop-slider').slick({
        Infinity: false,
        arrows: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('.forfancy').slick({
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.school-sertificate-slider').slick({
        Infinity: false,
        arrows: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
    $('.school-sert-slider').slick({
        Infinity: false,
        arrows: true,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });
//count buttons + -
    let order_counter = document.querySelectorAll('.cart-main-info-orders-count');

    order_counter.forEach(el => {
        if (el.querySelector('.count-minus')) {
            let minus = el.querySelector('.count-minus');
            let plus = el.querySelector('.count-plus');
            let input = el.querySelector('input');

            minus.addEventListener('click', function () {
                if (+input.value > 0) {
                    input.value = +input.value - 1;
                } else return;
            })

            plus.addEventListener('click', function () {
                input.value = +input.value + 1;
            })
        }
    })

    // refresh cart-count icon
    function getCountForUpIcon() {
        $.get("index.php?r=cart/get-qty", {}, function (res) {
            $('.shop-cart-count').text(res);
        });
    }

    getCountForUpIcon();

    // add to cart f
    function addToCart(id) {
        $.get("index.php?r=cart/add", {id}, function (res) {
            console.log(res);
            getCountForUpIcon();
        });
    }

    //cart button click
    let order_btn = document.querySelector('.view-main-btn');
    if (order_btn) {
        order_btn.addEventListener('click', function () {
            var id = $(this).data('id');
            addToCart(id);

            order_btn.textContent = "Товар добавлен"
            order_btn.style.background = "#1e5387"
            document.querySelector('.shop-cart-count').textContent = Number(document.querySelector('.shop-cart-count').textContent) + 1
        })
    }

    //category button click
    let cat_btn = document.querySelectorAll('.category-cart-add-btn');
    cat_btn.forEach(el => {
        if (el) {
            el.addEventListener('click', function () {
                var id = $(this).data('id');
                addToCart(id);

                el.textContent = "Товар добавлен"
                el.style.background = "#1e5387"
                document.querySelector('.shop-cart-count').textContent = Number(document.querySelector('.shop-cart-count').textContent) + 1
            })
        }
    })


    function regular() {
        let pattern = /(\+7|8)[\s(]?(\d{3})[\s)]?(\d{3})[\s-]?(\d{2})[\s-]?(\d{2})/g;
        document.querySelector(".body-index").innerHTML = document.querySelector(".body-index").innerHTML.replace(pattern, '+7($2)$3-$4-$5');
    }

    if ((!document.querySelector(".contacts-map")) & (!document.querySelector(".index-map-container")) & (!document.querySelector(".index-feedback"))) {
        regular();
    }
    //phone mask for form
    var phoneInput = document.querySelectorAll('.phone')
    phoneInput.forEach(el =>
        el.addEventListener('keydown', function (event) {
            if (!(event.key == 'ArrowLeft' || event.key == 'ArrowRight' || event.key == 'Backspace' || event.key == 'Tab')) {
                event.preventDefault()
            }
            var mask = '+7 (111) 111-11-11'; // Задаем маску
            if (/[0-9\+\ \-\(\)]/.test(event.key)) {
                // Здесь начинаем сравнивать this.value и mask
                // к примеру опять же
                var currentString = this.value;
                var currentLength = currentString.length;
                if (/[0-9]/.test(event.key)) {
                    if (mask[currentLength] == '1') {
                        this.value = currentString + event.key;
                    } else {
                        for (var i = currentLength; i < mask.length; i++) {
                            if (mask[i] == '1') {
                                this.value = currentString + event.key;
                                break;
                            }
                            currentString += mask[i];
                        }
                    }
                }
            }
        }));

    $(document).on("click", ".count-minus", function () {
        var btngroup = $(this).parent();
        var qty = $(btngroup).find('.qty').val();
        qty = parseInt(qty);
        var id = $(btngroup).data('id');

        $.get("index.php?r=cart/ajax-edit-qty", {id, qty}, function () {
            window.location.reload();
        });
    });

    $(document).on("click", ".count-plus", function () {
        var btngroup = $(this).parent();
        var qty = $(btngroup).find('.qty').val();
        qty = parseInt(qty);
        var id = $(btngroup).data('id');

        $.get("index.php?r=cart/ajax-edit-qty", {id, qty}, function () {
            window.location.reload();
        });
    });


    $(document).on("click", ".send-order", function () {
        if (!validateOrder()) {
            var person_name = $('#input-name').val();
            var person_family = $('#input-surname').val();
            var person_email = $('#input-email').val();
            var person_phone = $('#input-phone').val();

            $.get("index.php?r=cart/send-order", {
                person_name,
                person_family,
                person_email,
                person_phone
            }, function (res) {
                window.location.href = 'index.php?r=shop/order-sended';
            });
        }
    });

    function validateOrder() {
        var errzone = $('.err-zone');
        var errstatus = 0;

        if ($('#input-name').val() == '') {
            errstatus = 1;
        }

        if ($('#input-surname').val() == '') {
            errstatus = 1;
        }

        if ($('#input-phone').val() == '') {
            errstatus = 1;
        }

        if (errstatus != 0) {
            $(errzone).text('Не все поля заполнены');
        } else {
            $(errzone).text('');
        }

        return errstatus;
    }

    // Поиск заказов
    $("#shop-search").submit(function (event) {
        event.preventDefault();
        var req = $('.s-request').val();
        window.location.href = 'index.php?r=shop/search&s=' + req;
    });
}); 