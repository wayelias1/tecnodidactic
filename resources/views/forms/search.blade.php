<form role="search" method="get" class="form field has-addons is-flex align-items-center has-padding-bottom-30" action="{{ home_url('/') }}">
  <div class="control has-icons-left is-full-width">
    <span class="icon is-small is-left has-text-info"><i data-feather="search"></i></span>
    <input type="search" class="search input is-rounded is-borderless is-full-width" placeholder="Escribe el nombre de un producto o buscar una palabra clave..." value="{{ get_search_query() }}" name="s">
  </div>
</form>
