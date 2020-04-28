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
                method: "POST",
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
                            $('#register').attr("disabled", "disabled");
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
        //If passwords don't match or email is already taken,
        else if (password != confirmPassword)
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
       $('#password').val('');
       $('#passwordError').hide(200);
       $('#login').removeAttr("disabled"); 
    };
});

$('#registerEmail').click(function()
{
    if($('#emailError').is(':visible'))
    {
        //Reset value of email once error message is shown
        $('#registerEmail').val('');
        $('#emailError').hide(200);
        $('#register').removeAttr("disabled");
    }
        
    
});






    /**LOGIN FORM ERROR HANDLING AND FIELD VALIDATION
     * 
     * FUNCTION VALIDATES LOGIN CREDENTIALS AGAINST DB USING AJAX
     * TO PREVENT PAGE RELOAD AND INCREASE UX
     */

    $(document).ready(function(){
        //On login form submission,
        $('#login').click(function()
        {   
            //Store user entered data in vars
            var userEmail = $('#email').val();
            var userPass = $('#password').val();

            //Start ajax call for sending info to be checked against 'user' table in DB
            $.ajax(
                {
                    //Validate user login against database
                    //and set session variables / encode JSON
                    url: "ajax/validateLogin.php",
                    method: "POST",
                    data: {email: userEmail ,password: userPass},
                    success: function(response)
                    {
                        //If a positive response is returned
                       if(response.success)
                       {
                           //From php script. If success = true, send authenticated user
                           //To login_user script. (COMPLETE FORM ACTION)
                           //Submit the form as part of success function
                            $('#loginForm').submit()
                       }
                       else
                       {
                            //Show appropriate error if username and pw are incorrect
                            $('#passwordError').show(400);
                            //Disable submit button
                            console.log(response.error);
                       } 
                       
                    },
                    //If error with ajax call, alert user.
                    error: function(error)
                    {
                        alert(error);
                    }
                }
                )
        });
    });

    




    /********************** UPLOAD UTILITY FUNCTION ********************************
     * AJAX CALL TO PROCESS USER UPLOAD AND CHECK FOR
     * SUCCESS AGAINST DB PRIOR TO REDIRECTING BACK
     * TO IMG GALLERY.
     */

 
     /**$(document).ready(function(){
        $('#upload').click(function()
        {
            //Create FormData Object and load info
            var uploadForm = document.getElementById('uploadForm');
            var formData = new FormData(uploadForm);
            
            /**var uploadInfo = {
                'filename' : $('#file').val(),
                'title'    : $('#title').val(),
                'summary'  : $('#summary').val(),
            };
            console.log(formData);

            $.ajax(
                {
                    url: "ajax/uploadPhoto.php",
                    method: "POST",
                    enctype: 'multipart/form-data',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(response)
                    {
                        console.log(response);
                        if(response.success)
                        {
                            console.log(response.success);
                            console.log(response.message);
                        }
                        else
                        {
                            console.log(response.success);
                            console.log(response.error);
                        }

                    },
                    error: function(error)
                    {
                        alert("Something went wrong");
                    }
                }
            )
        })
     });*/

      $(document).ready(function(){
        $('#uploadForm').submit(function(e)
        {
            e.preventDefault(e);
            //Get form data and store in object
            $.ajax(
                {
                    url: "ajax/uploadPhoto.php",
                    method: "POST",
                    enctype: 'multipart/form-data',
                    dataType: "json",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response)
                    {
                        //If success = true
                        if(response.success)
                        {
                            //Show success modal and offer options
                            $('#uploadSuccess').modal('show');
                        }
                        //If success = false
                        else
                        {
                            $('#uploadFail').modal('show');
                            $('#failMessage').html(response.error);
                        }
                    },
                    error: function(error)
                    {
                        alert("Something went wrong");
                    }
                }
            )
        })

        /**IF CLICK CLOSE BUTTON ON APPROPRIATE MODAL */
        //If staying and close button is clicked,
        $('.close').click(function()
        {   //Reset all fields associated with uploads
            $('#file').val('');
            $('#title').val('');
            $('#summary').val('');
            //Reset image preview source
            $('#preview').attr('src', "https://placehold.it/80x80");
        });

     });

    



     /** PULL PHOTOS AJAX CALL
      * THIS AJAX CALL WILL BE TRIGGERED ON PAGE LOAD FOR 
      * THE GALLERY PAGE. THE CALL WILL PULL VALUES FROM THE 
      * pics TABLE IN THE CITPICS DB AND RESULTS WILL BE OUPUT 
      * TO THE feed.php PAGE
      */

      $(document).ready(function()
      {
          //Gallery trigger function. On click, run ajax call to php script which pulls
          //all values from pics table. Outputs appropriate information. Uses pics file name
          //to search in uploads folder and output appropriate image.
          $('#galleryTrigger').click(function()
            {
                //Create ajax call to call pullPhotos.php script
            $.ajax(
                {
                    url: "ajax/pullPhotos.php",
                    dataType: "json",
                    method: "POST",
                    success: function(data)
                    {      
                        //Loop through all photos and output to DOM
                        $.each(data, function(key, value)
                        {
                        
                            //Declare pics info variables to easily output info
                            var title = value.p_Title;
                            var photo = value.p_Filename;
                            var likes = value.p_Likes;
                            var summary = value.p_Summary;
                            var picId = value.p_ID;

                            //Append required HTML elements for complete post
                            //Include all required pics information
                            $('#postOutput').append(
                                "<div class='col-12 col-sm-6 col-md-4 col-lg-3'>\
                                    <div class='post-entry'>\
                                        <div class='text-center photoTitle'>\
                                            <h4>" + title + "</h4>\
                                        </div>\
                                        <!-- IMAGE SPACE AND LINK TO FULL IMAGE POPUP -->\
                                        <div class='photo'>\
                                            <a href='#' class='d-block mb-4 img' alt='click to blow up'>\
                                                <img src='../../uploads/" + photo + "' alt='Image' class='img-fluid post'>\
                                            </a>\
                                        </div>\
                                        <!-- SOCIAL ROW -->\
                                        <div class='row-fluid justify-content-between align-content-center social'>\
                                        <!-- LIKE BUTTON APERTURE -->\
                                        <div class='col-3 like-button'>\
                                            <button class='like_button' class='text-center' type='submit'><img src='img/empty_aperture.svg' class='img-fluid empty-aperture' data-id='"+ picId +"'alt='like button'/>\
                                            Like</button>\
                                        </div>\
                                        <!-- END LIKES -->\
                                        \
                                        <!-- COMMENT UTILITY LINK -->\
                                        <div class='col-3 comment'>\
                                            <a href='comments.php' class='d-block mb-4 img' alt='click to comment'>\
                                                <img src='img/comment.svg' class='img-fluid comment_button' alt='comment button'/>\
                                            </a>\
                                        </div>\
                                        <!-- END COMMENT UTILITY LINK -->\
                                        \
                                        <!-- LIKES COUNTER -->\
                                            <div class='col-6 likes'>\
                                                <button class='likeCount'><span id='" + picId + "'>" + likes + "</span> likes</button>\
                                            </div>\
                                        <!-- END LIKES COUNTER -->\
                                            </div>\
                                        <!-- IMAGE SUMMARY -->\
                                            <div class='row-fluid align-content-center image-summary'>\
                                            <p class='image_summary'>" + summary + "</p>\
                                            </div>\
                                        <!-- END IMAGE SUMMARY ROW -->\
                                        \
                                        </div>\
                                    </div>"
                            )
                            
                        });
                            
                            
                    },
                    //If error with ajax call, alert user.
                    error: function(data)
                    {
                        alert("Error in pullPhoto ajax call");
                    }
                }
                )
            });
            //Trigger gallery Trigger which is only present in feed.php
          $('#galleryTrigger').trigger('click');  
      });

       /** LIKE UTILITY FUNCTION
      * 
      * FROM A VISUAL STANDPOINT WE WANT TO CHANGE THE PRESENTATION
      * OF THE APERTURE (SITE LOGO) WHEN A PHOTO IS LIKED. LET'S SEE IF
      * WE CAN ACCOMPLISH THIS.
      */
     $(document).ready(function()
     {
         //UPDATE VARIABLE WILL BE USED TO UPDATE LIKES COUNTER
         var update;
         //DECLARE VARIABLE TO STORE LIKES OF 'THIS' CLICKED POST
         var currentLikes;
            //When clicking empty aperture
            $(document).on('click', '.empty-aperture', function(e)
            {
                //Add values to variables based on user's selection
                update = ($(this).attr('data-id'));
                //Get value of unique span, which is picture's DB id and store in variable
                currentLikes = ($('#' + update).html())

                if($(this).attr('src') == 'img/empty_aperture.svg')
                {
                    //Take THIS empty aperture, fade opacity and change to filled aperture. Bring opacity back to 100%
                    $(this).fadeTo('fast', 0.11).fadeIn('slow').attr('src', 'img/badge_logo.svg').fadeTo('fast', 1.0);
                    //Increment current likes and update appropriate total likes counter
                    currentLikes++;
                    $('#' + update).html(currentLikes);
                }
                //OOPS! I LIKED SOMEONE'S PIC ON ACCIDENT (CREEPING ON EXES)
                else if($(this).attr('src') == ('img/badge_logo.svg')) //If like button is filled
                {   //Revert source back to empty aperture
                    $(this).fadeTo('fast', 0.11).fadeIn('slow').attr('src', 'img/empty_aperture.svg').fadeTo('fast', 1.0);
                    //Decrement current likes and update appropriate total likes counter
                    currentLikes--;
                    $('#' + update).html(currentLikes);
                }
                updateNum = parseInt(update);

                //CREATE AJAX CALL TO UPDATE LIKES COUNTER IN DATABASE
                $.ajax(
                    {
                        //Send pic ID and current Likes
                        
                        url: "ajax/updateLikes.php",
                        method: "POST",
                        dataType: "JSON",
                        data: {picID: updateNum ,likes: currentLikes},
                        success: function(response)
                        {
                            //If a positive response is returned
                           if(response.success)
                           {
                                console.log(response.message);
                           }
                           else
                           {
                                console.log(response.error);
                           } 
                           
                        },
                        //If error with ajax call, alert user.
                        error: function(error)
                        {
                            alert("AJAX call malfunction!!!");
                        }
                    }
                    )
                
            });

            
     });