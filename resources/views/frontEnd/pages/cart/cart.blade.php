@extends('frontEnd.layouts.app')
@section('content')
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
    <!-- Stylesheet -->
    <!-- Universal Banner Sec Start Here -->
    <section class="universal_banner">
        <div class="container-fluid p-0">
            <div class="banner-content">
                <div class="banner_image">
                    <figure><img src="{{ asset('assets/img/inner-banner.png') }}" class="img-fluid"></figure>
                </div>
                <div class="page-title">
                    <h2 class="title">Cart</h2>
                </div>
            </div>
        </div>
    </section>
    {{-- @if (session()->has('cart'))
        @dd(session()->get('cart'))
    @endif --}}
    <!-- checkout-section starts here -->
    <section class="cart">
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <div class="cart-table-wrapper">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($cart) --}}
                                    @foreach ($cart as $key => $value)
                                        {{-- @dd($value) --}}
                                        <tr>
                                            <td class="close-row">
                                                <button id="remove-product" data-product-id="{{ $key }}"> <i
                                                        class="fa fa-close"></i></button>
                                            </td>
                                            <td class="pro-img">
                                                <div class="img-wrapper">
                                                    <img src="{{ asset('storage/' . $value['image']) }}"
                                                        style="width: 100px;height: 50px" class="img-fluid" alt="">
                                                </div>
                                            </td>
                                            <td class="pro-name">{{ $value['name'] }}</td>
                                            <td class="total-price">$ {{ $value['price'] }}</td>
                                            <td>
                                                <div class="number">
                                                    <span class="plus">+</span>
                                                    <input type="text" value="{{ $value['quantity'] }}">
                                                    <span class="minus">-</span>
                                                </div>
                                            </td>
                                            <td class="sub-total">$ {{ $value['price'] * $value['quantity'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="button-group text-right">
                            <button onclick="location.href='{{ route('shop') }}'" class="btn">Update Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="cart-t-tal-wrapper">
                        <div class="cart-header">
                            <h5 class="text-center">Cart Total</h5>
                        </div>
                        <div class="cart-content-wrapper">
                            <ul>
                                <li>
                                    <span class="property">Subtotal :</span>
                                    <span class="value">$ 49.00</span>
                                </li>
                                <li>
                                    <span class="property">Shipping Cost :</span>
                                    <span class="value">$ 15.00</span>
                                </li>
                                <li>
                                    <span class="property">Disscount Code :</span>
                                    <span class="value">$ - 10.00</span>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-footer-wrapper">
                            <ul>
                                <li><span class="property">Total Amount :</span> <span class="value">$ 59.00</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-group-total d-flex justify-content-between pt-4">
                        <button class="btn contine-shop">Continue Shopping</button>
                        <button onclick="location.href='checkout.php'" class="btn pro-shop">Proceed To checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout-section ends here -->
@endsection
@section('scripts')
    <script>
        const removeProduct = document.querySelectorAll('#remove-product');
        console.log(removeProduct, "removeProduct")
        // removeProduct.addEventListener("click", function() {

        removeProduct.forEach((button) => {
            button.addEventListener('click', function() {
                let productId = this.getAttribute('data-product-id');
                console.log(productId, "productId")
                fetch("{{ url('/remove-product') }}/" + productId, {
                        method: 'GET',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                            'Accept': 'application/json' // Add Accept header for JSON
                        },

                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Toastify({
                                text: "Product is removed from the cart",
                                className: "info",
                                close: true,
                                style: {
                                    background: "#cb4949",
                                }
                            }).showToast();
                        } else {
                            alert(data.error);
                        }
                    })
                    .catch(error => {
                        console.log('Error:', error);
                        Toastify({
                            text: "Error Please Try Again later",
                            className: "error",
                            close: true,
                            style: {
                                background: "#1aac7a",
                            }
                        }).showToast();
                    });
            })
        })
    </script>
@endsection
