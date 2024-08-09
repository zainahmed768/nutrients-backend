<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- Jquery JS -->
<!-- Bootstrap Js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Bootstrap Js -->
<!-- slick slider js -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- slick slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- <script src="https://raw.githubusercontent.com/stevenwanderski/conditional-field/master/dist/conditional-field.min.js"></script> -->

<!-- Main Js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- Main Js -->

<script>
    $(document).ready(function() {
        new WOW().init();
        // loader css starts here
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
        // loader css ends here
        // bannner slider js starts here
        $('.banner-slider').slick({
            dots: true,
            arrows: false,
        });
        // bannner slider js ends here
        // product card js starts here
        $('.product-card-slider').slick({
            dots: false,
            arrows: false,
            slidesToShow: 5,
        });
        // product card js ends here
        // testimonails js starts here
        $('.testimonails-slider').slick({
            dots: false,
        });
        // testimonails js ends here
    })
    // form hide and show
    // $('.quote form ').hide();
    // $('.quote h3').click(() => {
    //     $('.quote form').toggle()
    // })

    function search_bar() {
        $('.search-trigger').on('click', function() {
            const search = $('.search');

            if (search.is('.search--opened')) {
                search.removeClass('search--opened');
            } else {
                search.addClass('search--opened');
                $('.search__input')[0].focus();
            }
        });
    }
    search_bar();
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.search, .search-trigger').length) {
            $('.search').removeClass('search--opened');
        }

        // $('.sidebar-content-wrapper .form-check-input').toggle(function() {
        //     $(".rating-wrappers i").css('color', '#1AAC7A');
        // })
        // $(".rating-wrappers i").css('color', '#50625C');
        if ($('.sidebar-content-wrapper input:checked')) {
            $(".rating-wrappers i").css('color', '#1AAC7A');
        } else if (!$('.sidebar-content-wrapper input:checked')) {
            $(".rating-wrappers i").css('color', '#50625C');
        }

        // product add and sub 
        $('.minus').click(function() {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function() {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });

    });

    function getFile() {
        document.getElementById("upfile").click();
    }

    function sub(obj) {
        var file = obj.value;
        var fileName = file.split("\\");
        document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
        document.myForm.submit();
        event.preventDefault();
    }
</script>