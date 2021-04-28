<section class="gallery">
  <div class="gallery__container container">
    <div class="gallery__text">
      {!! $text !!}
    </div>

    @if ($gallery)
    <ul class="gallery__grid">
      @foreach ($gallery as $item)
        @php
          $caption = $item['gallery_caption'];
          $images  = $item['gallery_images'];

          $full_class = count( $images ) > 1 ? 'gallery__item_full' : 'gallery__item';
        @endphp

      <li class="gallery__item {{ $full_class }}" data-aos="zoom-in" data-aos-duration="1500">
        <div class="gallery__item-w">
          @if ($images)
          <div class="gallery__pictures">
            @foreach ($images as $image)
              @php
                $image_id = $image['gallery_image'];
              @endphp
            <div class="gallery__picture">

              {!! wp_get_attachment_image($image_id, 'full', ['class' => 'gallery__image']) !!}

            </div>
            @endforeach
          </div>
          @endif

          <div class="gallery__caption-w">
            <span class="gallery__caption">{!! $caption !!}</span>
          </div>

        </div>
      </li>
      @endforeach
    </ul>
    @endif

  </div>
</section>
