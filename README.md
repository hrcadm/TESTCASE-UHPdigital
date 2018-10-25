# uhp-test

1. Clone the app
2. run "composer install"
3. run "npm install" / "npm run dev"
4. mv .env.example .env ()
5. run "php artisan key:generate"
6. run "php artisan migrate --seed"
7. Configure apache VH *optional*

Haven't made time spent on website. Managed to set start time but failed to do the same for end time (to compare).
Planned to implement google maps and pin up user location based on geolocation service latitude and longitude, but setting up API key etc. took too much time for this test and its timeframe. I was thinkg of implementing some entertainment third party APIs based on user-data also.
Not much to see basically, but I hope the project is well structured and organised.

## TEST TASK

“User tracking software:
Create application which will track visits to some page (example: homepage). 
Content of homepage is option (it can be blank page also). 
Whenever user visits that page save as much data as you can about user and present those data in "admin area".
App functionalities:
	on each visit of page save as much data you can about user who visited webpage
	also track user time on webpage
	In "admin area" we should have table where we can see all visitors with all details about it
	also we want number of visits per each of this users
	data should be saved in database
	needs to be done in OOP
	in admin area data is shown with data-tables or own implementation of data tables and pagination and search
--------
You’ve got 10 hours to do it! :)”
