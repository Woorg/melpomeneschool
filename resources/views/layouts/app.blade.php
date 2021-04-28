<!doctype html>
<html lang="uk">
  @include('partials.head')
  <body @php body_class('page') @endphp>
    @php do_action('get_header') @endphp

    {{-- @include('partials.hero') --}}
    <main class="page__inner main">
      @include('partials.header')
      @yield('content')
    </main>

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp

  </body>
</html>
