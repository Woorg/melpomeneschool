<section class="feedback">
  <div class="feedback__container container">
    <div class="feedback__col">
      <h2 class="feedback__title">{{ $title }}</h2>
      <div class="feedback__text">{!! $text !!}</div>

    </div>
    <div class="feedback__col">
      <div class="feedback__form">
        {!! do_shortcode($form_shortcode) !!}
      </div>
    </div>

  </div>
</section>



