{{--
The Template for displaying product archives, including the main shop page which is a post type archive

This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.

HOWEVER, on occasion WooCommerce will need to update template files and you
(the theme developer) will need to copy the new files to your theme to
maintain compatibility. We try to do this as little as possible, but it does
happen. When this occurs the version of the template file will be bumped and
the readme will list any important changes.

@seehttps://docs.woocommerce.com/document/template-structure/
@packageWooCommerce/Templates
@version3.4.0
--}}

@extends('layouts.app')

@section('content')
@php
  do_action('get_header', 'shop');
  do_action('woocommerce_before_main_content');
@endphp
<div class="woocomerce-shop" data-inertia data-inertia-reveal data-inertia-delay="200">
  <div class="container">
    <div class="section card has-background-primary">
      <div class="woocomerce-box">
        <div class="woocomerce-title has-text-centered has-padding-bottom-40">
          <h1 class="title is-size-1 has-text-weight-bold">Equipamiento tecnológico y sistemas de entrenamiento</h1>
        </div>
        <div class="field is-flex has-padding-bottom-40">
          <div class="control has-icons-left is-full-width">
            <input class="input is-rounded is-borderless is-full-width" type="text" placeholder="Escribe el nombre de un producto o buscar una palabra clave...">
            <span class="icon is-small is-left has-text-info">
              <i data-feather="search"></i>
            </span>
          </div>
        </div>
        <ul class="is-flex woocomerce-explorer is-justify-content-center">
          @php
          do_action('top_level_product_categories_list');
          $terms = get_terms( array(
              'taxonomy' => 'product_cat',
              'hide_empty' => false,
          ) );
            // echo '<ul>';
            foreach ( $terms as $term ) {
              echo '<li class="button is-rounded is-borderless"><a href="' . esc_url( get_term_link( $term ) ) . '">' . $term->name . '</a></li>';
            }
            // echo '</ul>';
          @endphp
          {{-- @if($product)
            <li class="button is-rounded is-borderless">@productcat($product->get_id())</li>
          @else
            <li class="button is-rounded is-borderless">Todo</li>            
          @endif --}}
        </ul>
      </div>
    </div>
  </div>
</div>

@if(woocommerce_product_loop())
  @if(apply_filters('woocommerce_show_page_title', true))
    <div class="container has-margin-top-140 has-margin-bottom-50">
      <div class="columns">
        {{-- <div class="column is-half">
          <h1 data-inertia data-inertia-reveal class="title is-5">
            <span>{!! woocommerce_page_title(false) !!}</span>
            <span>@svg('decorator')</span>
          </h1>
        </div> --}}
        {{-- <div class="column is-half is-flex justify-end">
          @php
            do_action('woocommerce_before_shop_loop');
            woocommerce_product_loop_start();
          @endphp
        </div> --}}
      </div>
    </div>
  @endif
  

  @if(wc_get_loop_prop('total'))
    <div class="container" data-cursor-text="scroll">
      <div class="columns is-multiline">
        @while(have_posts())
          @php
            the_post();
            do_action('woocommerce_shop_loop');
          @endphp
          @global($product)
          <div class="column is-4">
            <x-product-card :product="$product"  />
          </div>
          @endwhile
      </div>
    </div>
  @endif
  @php
    woocommerce_product_loop_end();
    do_action('woocommerce_after_shop_loop');
  @endphp
@else
  @php
    do_action('woocommerce_no_products_found')
  @endphp
@endif

@php
  do_action('woocommerce_after_main_content');
  do_action('get_sidebar', 'shop');
  do_action('get_footer', 'shop');
@endphp

{{-- @include('partials.billboard-list', [
    'billboards' => get_field('billboards_section_1', 81)
    ])

@include('partials.product-slideshow', [
    'title' => __('<b>Productos en esta categoria</b>'),
    'tags' => [],
    'category' => '',
    ]) --}}
@endsection
