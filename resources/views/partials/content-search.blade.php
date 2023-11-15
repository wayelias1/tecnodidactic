@if (get_post_type() === 'post')
  @include('components.card')
@elseif(get_post_type() === 'product')
  @set($product , get_the_ID())
  <x-product-card :product="$product"/>
@else
  @include('components.category-card')
@endif

