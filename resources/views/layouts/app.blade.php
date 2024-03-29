<!doctype html>
<html lang="uk">
  @include('partials.head')
  <body id="top" @php body_class('page') @endphp>
    @php do_action('get_header') @endphp

    <div id="swup" class="transition-fade page__inner">
      @include('partials.header')
      <main class="main ">
        @yield('content')
      </main>

    </div>


    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>
