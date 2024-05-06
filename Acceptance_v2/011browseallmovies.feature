Feature: browsemovies

As an unauthenticated user, 
I want to browse the movies so that I can be made aware of which movies are currently being screened.


Scenario: browsemovies
	Given I am on the homepage, 
	When I click on Movies in the navigation, 
	Then I should be redirected to the page with all the current movies.