(function($){
    function searchToggle(ele){
        ele.toggleClass('expand');
    }
    function addStyleHeader(header) { 
        
        const $siteLogo = $('#masthead').find('.site-logo').find('img').attr('src');
        const $siteLogoWhite = $siteLogo.replace('inhabitent-logo-tent.svg', 'inhabitent-logo-tent-white.svg');
        let pos_window_top = $(window).scrollTop();

        changeHeader(header, $siteLogo, $siteLogoWhite, pos_window_top)
        
        $(window).on('resize scroll', function(){
            pos_window_top = $(window).scrollTop();
            changeHeader(header, $siteLogo, $siteLogoWhite, pos_window_top)
        });
    }

    function changeHeader(header, $siteLogo, $siteLogoWhite, pos_window_top){
        if ( pos_window_top === 0){
            header.removeClass('hide').addClass('dark-mode');
            $('#masthead').find('.site-logo').find('img').attr('src', $siteLogoWhite);
        } else if ( pos_window_top < $(window).height() ) {
            header.addClass('hide');
        } else {
            header.removeClass('hide dark-mode');
            $('#masthead').find('.site-logo').find('img').attr('src', $siteLogo);
        }
    }
    
    // Toogle the search form in the main navigation
    $('#masthead').find('.search-submit').on('click', function(){
        searchToggle($(this).siblings('.search-field'));
    })
    $('#masthead').find('.search-field').on('blur', function(){
        searchToggle($(this));
    })

    // Add styles of the header to be absolutely positioned with a reverse colour scheme on pages with hero images at the top, and transition to the standard site header once the user has scrolled past the hero image to the rest of the page content
    if ( 
        $('body').hasClass('page-front-page') ||
        $('body').hasClass('page-template-page-about') ||
        $('body').hasClass('single-adventure')
    ){
        addStyleHeader( $('.site-header') );
    }
})(jQuery);
// IIFE