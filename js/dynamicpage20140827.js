$(function() {

    if(Modernizr.history){

    var newHash      = '',
        $mainContent = $('#main-content'),
        $pageWrap    = $('#page-wrap'),
        baseHeight   = 0,
        $el;
        
    $pageWrap.height($pageWrap.height());
    baseHeight = $pageWrap.height() - $mainContent.height();
    
    $('nav').delegate('a', 'click', function() {
        _link = $(this).attr('href');
        history.pushState(null, null, _link);
        loadContent(_link);
        return false;
    });

    $('figure').delegate('a', 'click', function() {
        _link = $(this).attr('href');
        history.pushState(null, null, _link);
        loadContent(_link);
        return false;
    });

    $('ul').delegate('a', 'click', function() {
        _link = $(this).attr('href');
        history.pushState(null, null, _link);
        loadContent(_link);
        return false;
    });

    $('div').delegate('a', 'click', function() {
        _link = $(this).attr('href');
        history.pushState(null, null, _link);
        loadContent(_link);
        return false;
    });

    function loadContent(href){
        $mainContent
                .find('#guts')
                .fadeOut(200, function() {
                    $mainContent.hide().load(href + ' #guts', function() {
                        $mainContent.fadeIn(200, function() {
                            $pageWrap.animate({
                                height: baseHeight + $mainContent.height() + 'px'
                            });
                        });
                        //$mainContent.animate({scrollTop:0}, 600);
						$("html, body").animate({ scrollTop: 0 }, "slow");
                            return false;
                        $('nav a').removeClass('current');
                        console.log(href);
                        $('nav a[href="'+href+'"]').addClass('current');
                    });
                });
    }
    
    $(window).bind('popstate', function(){
       //_link = location.pathname.replace(/^.*[\\\/]/, ''); //get filename only
	   _link = window.location.href.replace(/^.*[\\\/]/, '');
	   console.log(_link);
       loadContent(_link);
    });

} // otherwise, history is not supported, so nothing fancy here.

    
});