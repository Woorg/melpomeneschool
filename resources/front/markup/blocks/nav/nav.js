class Nav {
    constructor() {
        this.$header = document.querySelector('.header')
        this.$navTrigger = document.querySelector('.nav__trigger')
        this.$nav = document.querySelector('.nav_primary')
        this.$page = document.querySelector('.page')

        this.events()
        this.navOpen = false
    }

    // events
    events() {

        this.$navTrigger.addEventListener( 'click', (e) => {

            if ( this.navOpen ) {

                // this.navOpen = true
                this.closeNav()

            } else {
                // this.navOpen = false
                this.openNav()
            }

        })

    }

    openNav() {
        this.$header.classList.add('header_nav-open')
        this.$navTrigger.classList.add('nav__trigger_active')
        this.$nav.classList.add('nav_open')
        this.$page.classList.add('page_nav_open')

        this.navOpen = true
        console.log('open')
    }

    closeNav() {
        this.$header.classList.remove('header_nav-open')
        this.$navTrigger.classList.remove('nav__trigger_active')
        this.$nav.classList.remove('nav_open')
        this.$page.classList.remove('page_nav_open')

        this.navOpen = false
        console.log('close')
    }


    // methods




}


export default Nav



// module.exports = () => {

//     // Nav

//     $navPrimary.on('click', function() {
//         $(this).parent().addClass('nav_active');
//     });

//     const $navClose = $('.nav__close');
//     $navClose.on('click', function() {
//        $(this).parent().parent().removeClass('nav_active');

//     });

//     // Panels nav

//     const $panelsNav = $('.panels-nav .panels-nav__trigger');
//     $panelsNav.on('click', function() {
//         $(this).parent().toggleClass('panels-nav_active');
//     });



// }
