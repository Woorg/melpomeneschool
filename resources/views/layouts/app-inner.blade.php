<!doctype html>
<html lang="uk">
  @include('partials.head')
  <body id="top" @php body_class('page page_inner') @endphp>
    @php do_action('get_header') @endphp

    <div id="swup" class="transition-fade page__inner">
      @include('partials.header-inner')
      <main class="page__main main  container">
        @yield('content')
      </main>
    </div>

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>


