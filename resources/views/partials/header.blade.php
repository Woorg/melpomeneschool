<header class="header">
  <div class="header__container container">

    <p class="header__slogan"><span>{{ bloginfo('name') }}</span></p>

    <div class="header__w">
      <nav class="header__nav nav nav_primary">
        <button class="nav__trigger">
          <span class="nav__trigger-line"></span>
          <span class="nav__trigger-line"></span>
          <span class="nav__trigger-line"></span>
        </button>

          {!! wp_nav_menu([
            'theme_location'  => 'primary_navigation',
            'container'       => null,
            'menu_class'      => 'nav__list',
          ]) !!}

      </nav>
    </div>
  </div>
</header>





