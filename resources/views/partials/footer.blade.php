@php
    $copyright = carbon_get_theme_option( 'copyright' );
@endphp


<footer class="footer">
  <div class="footer__container container">
    <small class="footer__copyright">{{ date('Y') }} {{ $copyright }}</small>

  </div>
</footer>
