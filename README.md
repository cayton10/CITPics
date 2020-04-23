# CITPics


## Project Description:
CITPics is a photo sharing application where users can like and comment other photos. This project is the culmination of everything that's been covered in CIT313: Web Programming II. It serves as a rudimentary instagram clone. Given that the stack is jQuery, php, and Bootstrap, this application is built for mobile to desktop responsive design. 

##### The project specifics and requirements from the course syllabus are listed below:
Semester Project – Photo Sharing/Commenting Application (350 points)
OK, this one is big.  The previous projects should help you get started, and combining the projects and our in-class examples, you should have readily available code that can be manipulated to satisfy all of the requirements of this project.  Please note what this says.  You should have snippets available to you for roughly 95% of this project.  It is how you apply these snippets to the requirements below that is important.  This project brings together everything you have learned this semester to create our web-based Photo Sharing/Commenting Application (CITPics). This system can be used by anyone who registers for an account to upload their pictures (MUST keep uploads clean) and receive likes and comments from other users on their photos. The system will also contain an admin page to allow an admin to remove questionable images from the system.

 

You will implement the CITPics application using a combination of jQuery and PHP along with a predeveloped mySQL database.  You will need to develop your code with appropriate standards (jQuery calls when appropriate, Object-Oriented PHP where appropriate).  You will also use the Bootstrap framework that you developed earlier in the semester as a basis for your code.  Your code should be placed in your folder on the CIT server (http://cit.marshall.edu/CIT313/<yourusername>, but the images will have to be uploaded to: http://cit.marshall.edu/CIT313/uploads/.

 

Specifically, you will create the following:

 

Home Page

Contains information about your application (be creative)
Provides links to Register/Login
If a person is already logged in, goes to the photo browsing page

Registration Screen

Users of CITPics must register for an account before they are able to login and upload photos.
All registrants will be normal users (0 for value of u_isAdmin)
Registration should ask the user for:
First name
Last name
E-mail
Password
Geographic Location (zip code)

Login Screen

After registration, a user must login
This page will present the user with a login in screen.
There will be one user (admin) already in the database:
Username: admin@citpics.com, Password: adminofPics, 1 for u_isAdmin
Logging in as the admin will take the user directly to the admin page

Photo Viewing Page

Once logged in, users who are not admins will arrive at this page
This page should show the user their own name
This page will also show the user all photos uploaded by all users (making this easy on everyone)
Specific information shown for each image:
Title
Image itself (thumbnail image)
Summary
# of Likes
Link to Comments for that photo
Clicking an image will bring up the full size version of the image
HINT: You should use a jQuery plugin for this

Photo Upload Utility

This page will allow the user to upload a new pic to the system
When uploading, the user must complete a form with the following fields:
Title for this image (128 characters or less)
Summary for this image (can be paragraphs of data)
The upload form must be validated, meaning a file and the two fields above must be present before proceeding
You can use HTML or jQuery validation
When uploading, values for all fields in the database table for pics should be populated
You will have to upload your images to http://cit.marshall.edu/CIT313/uploads/ (NOTE this folder’s location in relation to your own folder for the class.  This is very important).
 

Photo Commenting Utility

When a user wishes to view the comments for a pic, all comments will be provided in a list, sorted by the date the comment was made (Descending order)
At the bottom of the list of comments, the user should be able to add a new comment for that particular pic.
When adding a new comment, you must use AJAX to send the new comment to a page for database processing and also dynamically update the list of comments shown for the image to include the new comment at the top of the list.

Photo Like Utility

Must provide a way for a user to like an image and when an image is liked, if it has not already been liked by that user (see below), increment the number of likes for that particular image in the database.
When an image is liked, if it is allowed (see below), use AJAX to update the database and also jQuery to update the # of likes for that particular pic
NOTE:  You must be able to limit the liking of an individual photo to one time per user per computer.  HINT:  Think cookies.

Admin Page

From here, the admin should see a list of all users in the system. 
Clicking on a user’s name should present all images uploaded by that particular user.
This page also needs to allow an admin to remove (delete) an offending image from the system.

Extra Credit Opportunities

Photo Viewing Page
At a minimum you must be able to view all photos and scroll through the uploads
Extra credit if you filter by the uploader (user) of the photo
Additional extra credit if you filter by month of upload
SEVERAL points if you can find and implement a search to filter by zip code and photos uploaded within a customizable mile radius of the zip code you are searching for (See Facebook Marketplace for an example).  We did not cover this one in class.
Assumptions/Questions

Always ask for clarification if you are confused on a requirement.  Never assume.
Ask questions early and ask often
START now… Literally. Do not wait until the end of the semester, or chances are, you will not complete this project.
 

Database Structure for Project


username:       citpics
password:       c1tp1csDBPa55
DB:                  citpics

Tables/Structure:

user
            u_ID: integer                                                                                       PK (auto-increment)
            u_FName: varchar(100)
            u_LName: varchar(100)
            u_Email: varchar(100)
            u_Password: varchar(128) – md5’ed
            u_Location: varchar(5)
            u_isAdmin: boolean
           

pic
            p_ID: integer                                                                                       PK (auto-increment)
            p_Filename: varchar(100)
            p_Title: varchar(128)
            p_Summary: mediumtext
            p_Upload: timestamp             (default: CURRENT_TIMESTAMP)
            p_Likes: integer                      (default: 0)
            u_ID: integer                                                                                       FK to user

 

comment
            c_ID: integer                                                                                       PK (auto-increment)
            c_Text: mediumtext
            c_Date: timestamp                 (default: CURRENT_TIMESTAMP)      
            p_ID: integer                                                                                       FK to pic

## Development Environment:

I'm using a 2012 MacBook Pro on a wireless connection, so building files and pushing them to a remote server isn't ideal for development as upload times are lengthy.

### MAMP

For local development, I set up a MAMP suite and have become familiar with changing the server and php settings to give the most streamlined development environment I can for myself.

### phpMyAdmin

The application connects to a database on the remote server that I'll be pushing the final product to. In order to facilitate local development and test database connections, I used phpMyAdmin within the MAMP suite to replicate the same database structure as outlined in the project description above. 

## Database Connection:
4.22.2020
This is the first application I've built utilizing DB functionality. Setting up a local DB Server with the credentials expected to be used on our "production" server threw me for a loop. It took some time and digging around to understand how configs are structured locally and where to find the information I needed to get things working. 

Have successfully entered registration information for users and adding rows to the 'user' table in the DB.... A satisfying feeling. Next is to create the ajax calls required to test input values against the DB for error handling. Once that's done, login and registration should be a breeze to finish. 

### Registration Form
4.23.2020 
Used jQuery to test password values and display appropriate error handling

