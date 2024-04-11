Feature: unauthenticateduserbrowsemovies

As an unauthenticated user, 
I want to browse the movies so that I can be made aware of which movies are currently being screened.


Scenario: browsing movies as a unathenticated user 
	Given I am on the homepage, 
	when I click on the Browse Movies button, 
	then I should be redirected to the page with all the current movies.