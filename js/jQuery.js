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

    /****************** HIDE ERROR HANDLING FOR PW CONFIRMATION */
    $('#passwordError').hide();
});

/* ------------------------- APPEND COMMENT FUNCTION ------------------------ */

$('#post-comment').click(function(e){

    //STOP NORMAL FORM SUBMISSION FOR jQuery HANDLING
    e.preventDefault();

    //CREATE ARRAY OF LONG MONTH NAMES 
    var monthLong = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    //GET DATE FUNCTIONS AND ASSIGN TO VARIABLES
    var d = new Date();
 
    //GET LONG MONTH NAME FROM D.GETMONTH
    var month = monthLong[d.getMonth()];
    var date = d.getDate();
    var year = d.getFullYear();
    //STORE LONG MONTH, DAY, YEAR
    var dateStr = month + "." + date + "." + year;
   

    //POSTS USER COMMENT AND WRAPS COMMENT APPROPRIATELY
    //ASSIGN TEXT AREA CONTENT TO VAR $NEWCOMMENT
    $newComment = $('<p>' + $('#message').val() + '</p>');
    //PREPEND DATE
    $($newComment).prepend('<div class="meta">' + dateStr + '</div>');
    //PREPEND USERNAME
    $($newComment).prepend('<h3 class="userName comment">Username</h3>');
    //APPEND CONTENT OF NEW ELEMENT TO COMMENT LIST
    $('.comment-list').append($newComment.hide());

    $newComment.wrap('<li class="comment"></li>').wrap('<div class="comment-body"></div>'); 
        //ANIMATE COMMENT POSTING *THANKS BRIAN*
        $newComment.show(400);

    
    //RESET TEXT AREA VALUE AFTER SUBMISSION
    $('#message').val('');

});


/** 
 * USE THIS FUNCTION TO CHECK VALUE OF BOTH PW FIELDS
 * HELPS ELIMINATE USER ERRORS IN CREATING ACCOUNTS AND FORGETTING
 * OR ENTERING AN 'OFF THE WALL' PASSWORD. STOPS FORM SUBMISSION IF
 * PW INPUT FIELD VALUES DO NOT MATCH. IF MATCH IS FOUND, CONTINUE WITH DEFAULT
 * FORM ACTION
 */

/** ************** CHECK VALUE OF CONFIRM PASSWORD *********** */

$('#registrationForm').submit(function(e){
    //Store password values
    var password = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();
    //If match is found
    if(password == confirmPassword)
    {
        //Proceed with normal function... run php
        return true;
    }
    else
    {
        //Prevent form from submitting
        e.preventDefault(e);
        //Show error div
        $('#passwordError').show(400);
        //Remove values if incorrect
        $('#password').val('');
        $('#confirmPassword').val('');
        return false;
    }
});

/** ******** HIDE ERROR ON PW FIELD CLICK ******************** */

$('#password').click(function()
{
    if($('#passwordError').is(':visible'))
    {
       $('#passwordError').hide(200); 
    };
});

