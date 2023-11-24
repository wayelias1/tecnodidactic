@extends('layouts.app')

@section('content')
@action('get_header', 'shop')
<div class="container has-padding-top-50 has-padding-bottom-50 has-padding-20-touch">
  @while(have_posts())
  {{the_post()}}
  @global($product)
  @set($gallery, App\single_product_gallery())
  @set($categories, get_the_terms($product->get_id(),'product_cat'))
  
  <div class="columns is-relative">
    <div class="column is-half">
      <div class="columns is-multiline gallery">
        @foreach ($gallery as $image)
        <div class="column is-half gallery-image-container">
          <div class="product-card box has-background-light is-shadowless is-flex justify-center is-full-height">
            <img src="{{$image}}" alt="">
          </div>
        </div>
        @endforeach
      </div>
      @foreach ($categories as $cat)
        @if($cat->name !== 'Sin categorizar')
          @set($color, get_field('colors_per_category', 'product_cat_'.$cat->term_id))
          @set($categoria, $cat->name)
            <span class="is-size-6 tag is-rounded {{$color}} is-light">
              <a class="has-text-dark" href="/categoria-producto/{{$cat->slug}}">{{$cat->name}}</a>
            </span><br>
        @endif
      @endforeach
    </div>
    <div class="column">
      <div class="content" style="position: sticky; top: 120px; bottom: 40px;">
        @action('woocommerce_before_main_content')
        <h3 class="title is-size-3 has-text-weight-bold">
          @title
        </h3>
        <p>
          @excerpt
        </p>
        <div class="box has-background-light is-shadowless">
          <x-store-actions/>
        </div>
        @content
        @action('woocommerce_after_main_content')
      </div>
    </div>
  </div>
@endwhile
</div>

@include('partials.billboard-list', [
    'billboards' => get_field('billboards_section_1', 81)
    ])

@include('partials.product-slideshow', [
    'title' => __('<b>Productos en esta categoria</b>'),
    'tags' => [],
    'category' => $categoria,
    ])
@action('get_sidebar', 'shop')
@action('get_footer', 'shop')
@endsection

