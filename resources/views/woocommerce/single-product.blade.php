@extends('layouts.app')

@section('content')
@action('get_header', 'shop')
<div class="container has-padding-top-50 has-padding-bottom-50">
  @while(have_posts())
  {{the_post()}}
  @global($product)
  @set($gallery, App\single_product_gallery())
  @set($categories, get_the_terms($product->get_id(),'product_cat'))
  
  <div class="columns is-relative">
    <div class="column is-two-thirds">
      <div class="columns is-multiline gallery">
        @foreach ($gallery as $image)
        <div class="column is-half gallery-image-container">
          <div class="product-card box has-background-light is-shadowless">
            <img src="{{$image}}" alt="">
          </div>
        </div>
        @endforeach
      </div>
      @foreach ($categories as $cat)
            @if($cat->name !== 'Sin categorizar')
              @set($color, get_field('colors_per_category', 'product_cat_'.$cat->term_id))
              @set($categoria, $cat->name)
                <span class="is-size-6 tag is-rounded {{$color}}">
                  <b><a class="has-text-light" href="/categoria-producto/{{$cat->slug}}">{{$cat->name}}</a></b>
                </span><br>
            @endif
          @endforeach
    </div>
    <div class="column">
      <div class="content" style="position: sticky; top: 120px; bottom: 40px;">
        @action('woocommerce_before_main_content')
        <h1 class="title is-1 has-text-weight-bold">
          @title
        </h1>
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

