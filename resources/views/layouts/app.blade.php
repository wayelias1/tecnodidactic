<x-loader/>
<div data-inertia-container class="layout">
    <main data-inertia-section class="main has-background-grey is-clipped" id="main">
      <x-navigation/>
      <div data-solar="container" data-solar-namespace="home">
        @yield('content')
        @include('partials.footer')
      </div>
    </main>
</div>
