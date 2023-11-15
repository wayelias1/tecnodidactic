<div class="hero is-fullheight">
    <div class="hero-body is-align-items-flex-start">
        <div class="container">
          <div class="columns is-multiline" data-inertia data-inertia-reveal data-delay="200">
            <div class="column is-5 has-background-primary card">
              <div class="section is-medium m-0">
                <h1 class="title is-1">{!!get_field('hero-title', 'options')!!}</h1>
              </div>
            </div>
            <div class="column is-7 has-background-info card p-0">
              <div class="is-flex flex-column is-full-height section p-0" style="min-height: 600px">
                <div class="tile is-ancestor has-padding-bottom-30 is-flex-mobile" style="padding: 3rem">
                  <div class="tile is-parent is-flex-mobile" data-inertia data-inertia-reveal data-delay="200">
                      <div class="tile is-child box" style="background-image: url({!!get_field('hero-img-1', 'options')!!});background-size:cover"></div>
                  </div>
                  <div class="tile is-parent is-4 is-vertical is-flex-mobile" data-inertia data-inertia-reveal data-delay="200">
                      <div class="tile is-child box is-full-height" style="background-image: url({!!get_field('hero-img-2', 'options')!!});background-size:cover"></div>
                      <div class="tile is-child box is-full-height" style="background-image: url({!!get_field('hero-img-3', 'options')!!});background-size:cover"></div>
                  </div>
                </div>
                <div class="carrusel-container splide">
                    <div class="carrusel is-flex">
                      <div class="carrusel-box button is-rounded is-borderless is-danger">{!!get_field('hero-content-1', 'options')!!}</div>
                      <div class="carrusel-box button is-rounded is-borderless is-primary">{!!get_field('hero-content-2', 'options')!!}</div>
                      <div class="carrusel-box button is-rounded is-borderless is-success">{!!get_field('hero-content-3', 'options')!!}</div>
                      <div class="carrusel-box button is-rounded is-borderless is-grey">{!!get_field('hero-content-4', 'options')!!}</div>
                      <div class="carrusel-box button is-rounded is-borderless is-danger">{!!get_field('hero-content-1', 'options')!!}</div>
                      <div class="carrusel-box button is-rounded is-borderless is-primary">{!!get_field('hero-content-2', 'options')!!}</div>
                      <div class="carrusel-box button is-rounded is-borderless is-success">{!!get_field('hero-content-3', 'options')!!}</div>
                      <div class="carrusel-box button is-rounded is-borderless is-grey">{!!get_field('hero-content-4', 'options')!!}</div>
                    </div>
                </div>
              </div>
            </div>
            <div class="column is-12 has-background-light card">
              <div class="has-padding-20">
                <div class="navbar has-padding-20">
                  <div class="navbar-start">
                    <div class="navbar-item is-size-6 button is-borderless"><a class="is-flex is-align-items-center" href="{{home_url('/tienda')}}"><i class="has-margin-right-10" data-feather="circle" width="16px" height="16px"></i>Explorar todo</a></div>
                  </div>
                  <div class="navbar-end">
                    <div class="navbar-item is-size-6 button is-borderless"><a class="is-flex is-align-items-center" href="{{home_url('/cotizacion')}}"><div>Cotización<i class="has-margin-left-5" data-feather="file-text" width="16px" height="16px"></i></a></div></div>
                  </div>
                </div>
                <div class="columns has-padding-20">
                  <div class="column is-3">
                    <div class="is-flex is-align-items-center">
                      <figure class="is-half-width" data-inertia data-inertia-reveal data-delay="200">
                        <img src="{!!get_field('explorer-img-1', 'options')!!}" alt="kit acustico imagen">
                      </figure>
                      <p class="subtitle is-size-6">Kit didáctico de acústica</p>
                    </div>
                  </div>
                  <div class="column is-3">
                    <div class="is-flex is-align-items-center">
                      <figure class="is-half-width" data-inertia data-inertia-reveal data-delay="200">
                        <img src="{!!get_field('explorer-img-2', 'options')!!}" alt="kit optica imagen">
                      </figure>
                      <p class="subtitle is-size-6">Kit de Optica</p>
                    </div>
                  </div>
                  <div class="column is-3">
                    <div class="is-flex is-align-items-center">
                      <figure class="is-half-width" data-inertia data-inertia-reveal data-delay="200">
                        <img src="{!!get_field('explorer-img-3', 'options')!!}" alt="kit mecanica imagen">
                      </figure>
                      <p class="subtitle is-size-6">Kit de Mecánica</p>
                    </div>
                  </div>
                  <div class="column is-3">
                    <div class="is-flex is-align-items-center">
                      <figure class="is-half-width" data-inertia data-inertia-reveal data-delay="200">
                        <img src="{!!get_field('explorer-img-4', 'options')!!}" alt="kit energia solar imagen">
                      </figure>
                      <p class="subtitle is-size-6">Kit de energia solar</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
