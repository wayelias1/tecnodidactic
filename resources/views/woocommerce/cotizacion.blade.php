{{--
  Template Name: Cart template
--}}

@extends('layouts.app')

@section('content')
@php
  do_action('get_header', 'shop');
  do_action('woocommerce_before_main_content');
  do_action('woocommerce_cart');
@endphp
<div class="cotizacion">
    <div class="container has-padding-20-touch">
        <div class="has-padding-30">
            <h3 class="title is-size-1">Cotización</h3>
        </div>
        <div>   
            <form action="{{home_url('/cotizacion')}}" method="POST" class="woocommerce-cart-form">
                <table class="table table-products  is-full-width card">
                    <thead class="has-background-primary">
                        <tr class="is-vcentered">
                            <th class="has-text-centered product-remove"></th>
                            <th class="has-text-centered product-thumbnail" style="width: 10rem">Imagen</th>
                            <th class="has-text-centered product-name">Producto</th>
                            <th class="has-text-centered product-quantity">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $products = WC()->cart->get_cart();
                            $nonce = wp_create_nonce('woocommerce-cart');
                            function get_remove_item_url($cart_item_key) {
                                $nonce = wp_create_nonce('woocommerce-cart');
                                return home_url('/cotizacion/?remove_item=' . $cart_item_key . '&_wpnonce=' . $nonce);
                            }
                        @endphp
                        @foreach ($products as $product)   
                        @set($permalink, $product['data']->get_permalink())
                        @set($imagen, $product['data']->get_image())
                            <tr>
                                <th class="is-vcentered has-text-centered product-remove">
                                    <a href="{{get_remove_item_url($product['key'])}}" class="has-text-black" >X</a>
                                </th>
                                <td class="is-vcentered has-text-centered product-thumbnail">
                                    <a href="/producto/{{ $permalink }}" class="">{!! $imagen !!}</a>
                                </td>
                                <td class="is-vcentered has-text-centered product-name">
                                    <a href="/producto/{{ $permalink }}" class="has-text-black">{{ $product['data']->get_name() }}</a>
                                </td>
                                {{-- <td class="is-vcentered has-text-centered product-price">{{ $product['data']->get_price() }}</td> --}}
                                <td class="is-vcentered has-text-centered product-quantity">
                                    <input class="input-quantity" name="{{$product['key']}}" type="text" value="{{ $product['quantity'] }}">
                                </td>
                                {{-- <td class="is-vcentered has-text-centered product-subtotal">{{ $product['line_total'] }}</td> --}}
                                {{-- <input type="number" id="quantity_655d1c1a5dccf" class="input-text qty text" name="cart[5ef059938ba799aaa845e1c2e8a762bd][qty]" value="3" aria-label="Product quantity" size="4" min="0" max="" step="1" inputmode="numeric" autocomplete="off"> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table table-total is-bordered is-full-width card">
                    <tbody>
                        <tr class="has-padding-20">
                            <td class="is-vcentered has-text-centered has-padding-20">
                                <button type="submit" class="button is-rounded">Actualizar cotizacion</button>
                            </td>
                            <td class="is-vcentered has-text-centered has-padding-20">
                                <a href="{{home_url('/finalizar-compra')}}" class="button is-rounded is-info">Finalizar cotización</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

@php
  do_action('woocommerce_after_main_content');
  do_action('get_sidebar', 'shop');
  do_action('get_footer', 'shop');
@endphp
@endsection