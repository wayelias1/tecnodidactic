{{--
  Template Name: Cart template
--}}

@extends('layouts.app')

@section('content')
@php
  do_action('get_header', 'shop');
  do_action('woocommerce_before_main_content');
@endphp
<div class="woocommerce-cart cotizacion">
    <div class="container">
        <div>
            <h3>Cotización</h3>
        </div>
        <div>
            <div>   
                <form action="{{home_url('cotizacion')}}" method="POST" class="woocommerce-cart-form">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-remove"></th>
                                <th class="product-thumbnail">Imagen</th>
                                <th class="product-name">Producto</th>
                                <th class="product-price">Precio</th>
                                <th class="product-quantity">Cantidad</th>
                                <th class="product-subtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- funcion --}}
                            {{-- <div class="quantity">
                                <label class="screen-reader-text" for="quantity_6553f4f783aa9">Simulador</label>
                                <input type="number" id="quantity_6553f4f783aa9" class="input-text qty text" name="cart[2b24d495052a8ce66358eb576b8912c8][qty]" value="1" aria-label="Product quantity" size="4" min="0" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                </div> --}}
                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <div>
                    <div>
                        <h4>Total</h4>
                        {{-- funcion --}}
                        <table></table>
                        <div>
                            <a href="http://tecnodidactic.test/finalizar-compra/" class="checkout-button button alt wc-forward">
                                Finalizar cotizacion</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
  do_action('woocommerce_after_main_content');
  do_action('get_sidebar', 'shop');
  do_action('get_footer', 'shop');
@endphp
@endsection