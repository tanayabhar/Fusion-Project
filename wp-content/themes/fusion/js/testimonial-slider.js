carousel_slider( 'testimonial-carousel', 'testimonial-carousel-inner', 'testimonial-carousel-item', 'testimonial-carousel-indicators', 3000 );

jQuery(document).ready(function() {
    var totalCount = jQuery(".team-container > div.single-team").length;
    // for(var i = 1; i <= totalCount; i++) {
    //     jQuery(".team-intro-"+i).hover( function() { 
    //         //jQuery(".team-deatils-"+i).toggle(); 
    //         jQuery(".team-detils-"+i).toggle();
    //     } );
    // }
    //jQuery(".team-intro-1").hover( function() { jQuery(".team-deatils-1").toggle(); } );
    //jQuery(".team-intro-2").hover( function() { jQuery(".team-deatils-2").toggle(); } );
    //jQuery(".team-intro").hover( function() { jQuery(".team-deatils").toggle(); } );
    // jQuery("[class*=team-intro-]").click(function(){
    //     $(this).toggle()
    // })
    jQuery("[class*=team-intro-]").hover(function(){
        //jQuery("[class*=team-details-]").toggle()
        jQuery(this).next(".team-details").toggle();
    })
});