@global($product)

<store-actions  data-cursor="-hidden" data-cursor-text=" " class="store-actions columns is-gapless level is-full-width"
x-data="{
    id: {{$product->get_id()}},
    added: false,
    text: '{{__('Añadir a cotizacion', 'sage')}}'
}" >
    <div class="column is-5">
        <a x-on:click="() => {$store.cart.add(id, $event.target); added = true; text = '{{__('Product Added', 'sage')}}'}" class="add-to-cart button is-nude has-text-dark">
            <span :class="{'is-hidden' : !added}" class="icon" >@feather('check')</span>
            <span :class="{'is-hidden' : added}" class="icon">@feather('file-text')</span>
            <span class="has-margin-left-10 is-size-6" x-text="text"></span>
        </a>
    </div>
   <div class="column is-7 has-text-right">
    <span x-show="added == true" data-tooltip="Ver cotización">
        <a href="/cotizacion" class="button is-nude has-text-dark has-padding-right-40">
            <span class="icon is-size-6">@feather('file-text')<span>Cotización</span></span>
        </a>
    </span>
    <a x-on:click="() => {$store.share.share('@title', '@permalink')}" class="button is-nude">
        @feather('share')
    </a>
   </div>
</store-actions>
