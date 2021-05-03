import svg4everybody from 'svg4everybody';
import Swup from 'swup';
import SwupBodyClassPlugin from '@swup/body-class-plugin';
import SwupScrollPlugin from '@swup/scroll-plugin';
// import SwupSlideTheme from '@swup/slide-theme';
import SwupFadeTheme from '@swup/fade-theme';


import Nav from '../../blocks/nav/nav';
// import {pageNavSticky, pageNavMob} from '../../blocks/page-nav/page-nav';
// import heroSlider from '../../blocks/hero/hero';
// import firstSlider from '../../blocks/first/first';

// import tabs from '../../blocks/tabs/tabs';
// import {certificatesGallery, certificatesSlider} from '../../blocks/certificates/certificates';
// import cooperateSlider from '../../blocks/cooperate/cooperate';


(function ($) {

    svg4everybody();


    let styles = [
      'padding: 2px 9px',
      'background: #1b1e64',
      'color: #fff',
      'display: inline-block',
      'box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.2) inset, 0 5px 3px -5px rgba(0, 0, 0, 0.5), 0 -13px 5px -10px rgba(255, 255, 255, 0.4) inset',
      'line-height: 1.52',
      'text-align: left',
      'font-size: 14px',
      'font-weight: 400'
    ].join(';');

    console.log('%c developed by igor gorlov https://gorlov.gq', styles);


    /**
     * Swup
     */

    const swup = new Swup({
      containers: ['#swup'],
      plugins: [
        new SwupBodyClassPlugin(),
        new SwupScrollPlugin({
          animateScroll: true
        }),

        // new SwupSlideTheme(),
        new SwupFadeTheme(),
      ]
    });

    /**
     * Scroll animation
     */

    AOS.init({
      duration: 1200,
      startEvent: 'DOMContentLoaded',
    });


    /**
     * Nav
     */

    const nav = new Nav()

    // function init() {

    //   if (document.querySelector('.my-books')) {
    //     $('.js-to-go').click(function(e){
    //       e.preventDefault();
    //       var target = $($(this).attr('href'));
    //       if(target.length){
    //         var scrollTo = target.offset().top;
    //         $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
    //       }
    //     })
    //   }

    //   if(document.querySelector('.article_archive_book')) {
    //     $('.js-to-go').click(function(e){
    //       e.preventDefault();
    //       var target = $($(this).attr('href'));
    //       if(target.length){
    //         var scrollTo = target.offset().top;
    //         $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
    //       }
    //     })
    //   }

    // }


    // init();

    // swup.on('contentReplaced', init);


})(jQuery);
