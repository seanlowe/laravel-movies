# laravel-movies
A Laravel project based off a prompt I found online

Prompt:

Create a simple app (using the current version of Laravel) that meets these reqs:
	
	1) authenication -> un-auth'd users get sent to login page
	
	2) on login, go to home page showing 5 movies with titles sorting in
	 descending order on release year (a movie released in 2010 will say 
	 "released 10 years ago"). Must be grabbed from a DB

	3) must be able to retrieve entire list in JSON (use a route)

Example:

Movie Title, released in 2010 (10 years ago)
Movie Title 2, released in 2005 (15 years ago)
 .... and so on
