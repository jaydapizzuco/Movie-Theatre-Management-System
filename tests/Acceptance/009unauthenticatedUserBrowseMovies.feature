Feature: unauthenticateduserbrowsemovies

As an unauthenticated user, 
I want to browse the movies so that I can be made aware of which movies are currently being screened.


Scenario: unauthenticateduserbrowsemovies
	Given I am on the homepage, 
	When I click on the Browse Movies button, 
	Then I should be redirected to the page with all the current movies.