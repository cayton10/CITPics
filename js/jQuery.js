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
    $('#emailError').hide();
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







    /**REGISTRATION FORM ERROR HANDLING AND FIELD VALIDATION
     * 
     * 
     * FUNCTION CHECKS USER ENTERED EMAIL TO VALIDATE AGAINST WHAT'S
     * ALREADY BEEN REGISTERED IN DB. IF USER'S EMAIL ALREADY EXISTS,
     * NOTIFIES USER W/ APPROPRIATE ERROR.
     * 
     * FUNCTION DOUBLES TO CHECK VALIDITY OF PASSWORD CONFIRMATION
     * IF PASSWORDS DO NOT MATCH, SHOW APPROPRIATE ERROR DIV */
    
$(document).ready(function(){
    /**CHECK EMAIL AVAILABILITY FUNCTION USING AJAX ON
     * EMAIL INPUT FIELD CHANGE. 
     */
    $('#registerEmail').on('change', function()
    {
        var userEmail = $('#registerEmail').val();
        //Start ajax call to look at all emails on form submission
        $.ajax(
            {
                url: "ajax/pullEmail.php",
                dataType: "json",
                success: function(data)
                {
                    //On success, loop through all emails
                    $.each(data, function(key, value)
                    {
                        //Test user's entered email value from input field
                        if(userEmail == value.email)
                        {
                            $('#emailError').show(400);
                            existingEmail = value.email;
                            return false;
                        }
                    });
                },
                //If error with ajax call, alert user.
                error: function(data)
                {
                    alert("Error in registration ajax call");
                }
            }
            )
    });
    /** CHECK PASSWORD CONFIRM PASSWORD VALIDITY FUNCTION */

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
        else if (password != confirmPassword || $('#emailError').is(':visible'))
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
});

/** HIDE ERROR FIELDS ON CLICKING  */

$('#password').click(function()
{
    if($('#passwordError').is(':visible'))
    {
       $('#passwordError').hide(200); 
    };
});

$('#registerEmail').click(function()
{
    if($('#emailError').is(':visible'))
    {
        //Reset value of email once error message is shown
        $('#emailError').val('');
        $('#emailError').hide(200);
    }
});
