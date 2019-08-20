(function($){
    function searchToggle(ele){
        ele.toggleClass('expand');
    }
    
    // Toogle the search form in the main navigation
    $('#masthead').find('.search-submit').on('click', function(){
        searchToggle($(this).siblings('.search-field'));
    })
    $('#masthead').find('.search-field').on('blur', function(){
        searchToggle($(this));
    })
})(jQuery);
// IIFE