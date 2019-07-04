<?php

/*
	In this exercise, we'll use the 'moviedb' database.
	
	1. First, you have to add an attribut to the 'movies' table.
	Call this attribut 'poster', it'll save the path of the poster (image) file for each movie.
	! alter table movies add poster varchar(500);

	2. Create a page 'index.php'.
	This page will display a nice message like 'Welcome to the freakin movie website' (or whatever)
	Also display the last three movies (ordered by date of release).

	3. Create a page 'movies.php'.
	This page will display all the movies (poster first, then above title and release year).
	
	4. Create a page 'movie.php'.
	This page is a descriptive page for each movie. It'll display the poster, the title, the release year but also the director's name.
	This page will have to use the GET method to get the id of the movie you want to display.
	So in your adress bar it'll look like this : 'localhost/movie.php?id=1'
	
	5. Edit the page 'movies.php'
	Make the title of each movie clickable. It'll redirect to the related descriptive movie page.

	6. You have to add an attribut to the 'directors' table.
	Call this attribut 'picture', it'll save the path of the picture (image) file for each director.
	! alter table directors add picture varchar(500);

	7. Create a page 'directors.php'
	This page will display all the directors (Picture, then First name & last name).
	
	8. Create a page 'director.php'.
	This page is a descriptive page for each director. It'll display the picture, first name, last name of the director.
	It'll also display ALL the movies from this director.
	This page will have to use the GET method to get the id of the director you want to display.
	So in your adress bar it'll look like this : 'localhost/director.php?id=1'

*/
