/* SUPPLEMENTS main.js TO ADD SITE FUNCTIONALITY */
//FUNCTIONS OUSTIDE THE SCOPE OF THIS WEB II PROJECT WILL BE NOTED//

//when document is ready
$(document).ready(function(){

    //CHANGE COLOR OF USERNAME TEXT ON SCROLL
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if(scroll >= 1) {
            $('#userName').addClass('alt-color', 400)
        } else {
            $('#userName').removeClass('alt-color', 400);
        }
    });
});

//APPEND COMMENTS TO COMMENT PAGE DYNAMICALLY
$('#post-comment').click(function(e){

    //STOP NORMAL FORM SUBMISSION FOR jQuery HANDLING
    e.preventDefault();

    //GET DATE FUNCTIONS AND ASSIGN TO VARIABLES
    var d = new Date();
 
    var date = d.getDate();
    var month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
    var year = d.getFullYear();
    
    var dateStr = month + "." + date + "." + year;
   

    //POSTS USER COMMENT AND WRAPS COMMENT APPROPRIATELY
    //ASSIGN TEXT AREA CONTENT TO VAR $NEWCOMMENT
    $newComment = $('<p>' + $('#message').val() + '</p>');
    $($newComment).prepend('<div class="meta">' + dateStr + '</div>');
    $($newComment).prepend('<h3 class="userName comment">Username</h3>');
    //APPEND CONTENT OF NEW ELEMENT TO COMMENT LIST
    $('.comment-list').append($newComment);
    $newComment.wrap('<li class="comment"></li>').wrap('<div class="comment-body"></div>'); 
    




    //ADD COMMENT TO END OF COMMENTS LIST
    //$('.comment-list').append('<p>' + $('#message').val() + '</p>');
    
    //RESET TEXT AREA VALUE AFTER SUBMISSION
    $('#message').val('');

});

