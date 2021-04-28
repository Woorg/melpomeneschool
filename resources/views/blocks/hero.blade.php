<section class="hero">
  <div class="hero__container container" data-aos="zoom-in" data-aos-duration="1500">
    <h1 class="hero__title">{{ esc_html($title) }}</h1>
    <div class="hero__text">
      {!! $text !!}
    </div>
  </div>
  <picture class="hero__img-top">
    <source srcset="{{ images_path() }}/general/hero-img-mob.jpg 1x, {{ images_path() }}/general/hero-img-mob@2x.jpg 2x" media="(max-width: 640px) " />
    <source srcset="{{ images_path() }}/general/hero-img-mob.webp 1x, {{ images_path() }}/general/hero-img-mob@2x.webp 2x" media="(max-width: 640px)" />


    <source type="image/webp" srcset="{{ images_path() }}/general/hero-img.webp 1x, {{ images_path() }}/general/hero-img@2x.webp 2x" />
    <img src="{{ images_path() }}/general/hero-img.jpg" srcset="{{ images_path() }}/general/hero-img.jpg 1x, {{ images_path() }}/general/hero-img@2x.jpg 2x" alt="" />
  </picture>


  <picture class="hero__img-bottom">
    <source srcset="{{ images_path() }}/general/hero-img-mob-bottom.jpg 1x, {{ images_path() }}/general/hero-img-mob-bottom@2x.jpg 2x" media="(max-width: 640px) " />
    <source srcset="{{ images_path() }}/general/hero-img-mob-bottom.webp 1x, {{ images_path() }}/general/hero-img-mob-bottom@2x.webp 2x" media="(max-width: 640px)" />

    <img src="{{ images_path() }}/general/hero-img-mob-bottom.jpg" srcset="{{ images_path() }}/general/hero-img-mob-bottom.jpg 1x, {{ images_path() }}/general/hero-img-mob-bottom@2x.jpg 2x" alt="" />

  </picture>

</section>




