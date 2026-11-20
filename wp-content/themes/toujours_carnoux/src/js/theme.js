import 'bootstrap/dist/js/bootstrap.bundle'
import '@splidejs/splide/dist/js/splide.min'
import '@fancyapps/fancybox/dist/jquery.fancybox'
import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

jQuery(document).ready(function($){

    // Sticky menu & autohide on scroll
    var header = $('header.autohide');

    if ( header || verticalmenu ) {
        var last_scroll_top = 0;

        window.addEventListener('scroll', function () {

            let scroll_top = window.scrollY;

            if (scroll_top === 0) {
                header.removeClass('scrolled-up scrolled-down');
            } else if (scroll_top < last_scroll_top) {
                header.removeClass('scrolled-down').addClass('scrolled-up');
            } else {
                header.removeClass('scrolled-up').addClass('scrolled-down');
            }

            last_scroll_top = scroll_top;

        });
    }

    if ( $('.cta-menu').length != 0 ) {
        var height = $('.cta-menu').outerHeight();
        $('.navbar-collapse').css('--cta-menu-height', height + 'px');
    }

    $('div.navbar-collapse').on('show.bs.collapse', function () {
        $('#header_wrapper').addClass('show');
    });
    $('div.navbar-collapse').on('hide.bs.collapse', function () {
        $('#header_wrapper').removeClass('show');
    });

    /* Carroussel .component-actualites */
    if ($('.component-actualites.splide').length !== 0) {
        $('.component-actualites.splide').each(function () {
            var $root = $(this);
        
            var args = {
                updateOnMove: true,
                perMove: 1,
                perPage: 4,
                type: 'slide',
                pagination: false,
                gap: 'var(--bs-gutter-x)',
                focus: 0,
                breakpoints: {
                    576:  { perPage: 2, padding: { left: 0, right: '2rem' }, gap: 'calc(var(--bs-gutter-x) / 2)', arrows: false },
                    768:  { perPage: 3, arrows: false },
                    990:  { perPage: 2, arrows: false },
                    1199: { perPage: 3, gap: 'calc(var(--bs-gutter-x) / 2)' }
                }
            };
    
            args.arrows = $root.hasClass('splide-arrows');
    
            var splide = new Splide(this, args);
            splide.mount();
        });
    }
    
    /* Carroussel .component-team */
    if ($('.component-team.splide').length !== 0) {
        $('.component-team.splide').each(function () {
            var $root = $(this);
        
            var args = {
                updateOnMove: true,
                perMove: 1,
                perPage: 5,
                type: 'loop',
                pagination: false,
                gap: 'var(--bs-gutter-x)',
                focus: 0,
                padding: 'calc(((100vw - var(--container-width)) / 2) + (var(--bs-gutter-x) / 2))',
                breakpoints: {
                    576:  { perPage: 2, gap: 'calc(var(--bs-gutter-x) / 2)', arrows: false },
                    768:  { perPage: 2, arrows: false },
                    990:  { perPage: 3, arrows: false },
                    1199: { perPage: 4 }
                }
            };
    
            args.arrows = $root.hasClass('splide-arrows');
    
            var splide = new Splide(this, args);
            splide.mount();
        });
    }

    $(".dropdown-toggle").click(function(){
        window.location.href = $(this).attr("href");
    })

    $(".mobile-toggler").click(function(){
        $(".dropdown-toggle").not($(this).parent().find(".dropdown-toggle")).removeClass("show")
        $(this).parent().find(".dropdown-toggle").toggleClass("show")
    })

    /* Contact Form 7 (CF7) Floating Labels by addClass active to parent wrapper div */
    $(".wpcf7 .form-floating .wpcf7-form-control").focus(function(){
        $(this).addClass('active');
        $(this).parent().parent().addClass('active');
    }).blur(function(){
        var cval = $(this).val()
        if(cval.length < 1) {
            $(this).removeClass('active');
            $(this).parent().parent().removeClass('active');
        }
    });

    /* Bootstrap's .accordion handler */
    $(document).on('show.bs.collapse', function(e) {
        var $currentAccordion = $(e.target).closest('.accordion-item');
        var parentId = $currentAccordion.closest('[data-bs-parent]').attr('id');
            $(`[data-bs-parent="#${parentId}"] .accordion-item`).removeClass('active');
        $currentAccordion.addClass('active');
    });
    $(document).on('hide.bs.collapse', function(e) {
        var $currentAccordion = $(e.target).closest('.accordion-item');
        $currentAccordion.removeClass('active');
    });

    $('#primary-menu .navbar-nav span.mobile-toggler').click( function(e) {

        var $navbarNav = $('#primary-menu .navbar-nav '),
            $dropdownMenu = $(this).next('ul.dropdown-menu'),
            $classes = $dropdownMenu[0].className.split(' '),
            $depthClass = $classes.find( cls => cls.startsWith('depth_') );

        $navbarNav.removeClass(function(index, className) {
            return (className.match(/(^|\s)depth_\S+-active/g) || []).join(' ');
        });

        if ( $depthClass ) {
            $navbarNav.addClass( $depthClass + '-active' );
            $dropdownMenu.addClass('show').children('.return-toggler').attr('aria-expanded', 'true');
        }

    });
    
    $('#primary-menu .navbar-nav span.return-toggler').click( function(e) {

        var $navbarNav = $('#primary-menu .navbar-nav '),
            $dropdownMenu = $(this).parent('ul.dropdown-menu'),
            $classes = $dropdownMenu[0].className.split(' '),
            $depthClass = $classes.find( cls => cls.startsWith('depth_') );

        $navbarNav.removeClass(function(index, className) {
            return (className.match(/(^|\s)depth_\S+-active/g) || []).join(' ');
        });
        $dropdownMenu.removeClass('show');
            
        if ( $depthClass && $(this).attr('aria-expanded') == 'true' ) {

            var $depthNumber = parseInt($depthClass.replace('depth_', '')),
                $adjustedDepth = $depthNumber >= 1 ? $depthNumber - 1 : $depthNumber,
                $activeClass = 'depth_' + $adjustedDepth + '-active';
            
            if ( $depthNumber == 0 ) {
                $navbarNav.removeClass('depth_0-active');
            } else {
                $navbarNav.addClass($activeClass);
            }
            $(this).attr('aria-expanded', 'false');

        }
        
    });

    // Fermer le menu dès qu'on clique sur un lien "réel" (href != '#')
    $('#primary-menu .navbar-nav a').on('click', function (e) {

        var href = $(this).attr('href');

        if (!href || href === '#') {
            return;
        }

        var $navbarNav = $('#primary-menu .navbar-nav');

        $navbarNav.removeClass(function (index, className) {
            return (className.match(/(^|\s)depth_\S+-active/g) || []).join(' ');
        });

        $navbarNav
            .find('ul.dropdown-menu.show')
            .removeClass('show')
            .find('.return-toggler')
            .attr('aria-expanded', 'false');

        $('.navbar-collapse').collapse('hide');
    });
    
});