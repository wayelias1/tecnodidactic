<div class="destacados">
    <div class="hero-body">
        <div class="container">
            <h3 class="title is-size-1 has-text-centered"><b>Destacados</b></h3>
            <div class="has-margin-bottom-30"><p class="has-text-centered">{!!get_field('destacado-title', 'options')!!}</p></div>
            <div class="columns" data-inertia data-inertia-reveal data-delay="200" style="height: 100vh">
                <div class="column is-6">
                    <div class="card is-flex flex-column is-full-height is-justify-content-space-between" style="background-image: url({!!get_field('destacado-box-img-1', 'options')!!});">
                        <div class="has-padding-40">
                            <div class="button is-primary is-rounded">Ciencia</div>
                        </div>
                        <div class="section card" style="height: 40%">
                            <div class="is-flex flex-column is-full-height is-justify-content-space-between">
                                <h3 class="subtitle is-size-3 has-text-info">Laboratorios tecnológicos de ciencias, 
                                    biología, química y física.</h3>
                                <p class="is-size-6">Amplia gama de recursos educativos digitales.</p>
                                <button class="button is-rounded is-dark has-margin-top-20 is-align-self-flex-start is-size-6 has-padding-20">Ver productos</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-6">
                    <div class="card is-flex flex-column is-full-height is-justify-content-space-between" style="background-image: url('{!!get_field('destacado-box-img-2', 'options')!!}');">
                        <div class="has-padding-40">
                            <div class="button is-danger is-rounded">Ingenieria</div>
                        </div>
                        <div class="section card" style="height: 40%">
                            <div class="is-flex flex-column is-full-height is-justify-content-space-between">
                                <h3 class="subtitle is-size-3 has-text-info">Maquetas didácticas de entrenamiento 
                                    para enseñanza en áreas de ingeniería.</h3>
                                <p class="is-size-6">Ingeniería industrial, Ingeniería civil, Ingeniería mecánica, Ingeniería en minas, Ingeniería química, Ingeniería ambiental, etc.</p>
                                <button class="button is-rounded is-dark has-margin-top-20 is-align-self-flex-start is-size-6 has-padding-20">Ver productos</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>