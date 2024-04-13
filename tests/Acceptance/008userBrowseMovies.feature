Feature: userbrowsemovies

As a user
I want to browse  the movies that are currently being shown so that I can make a decision about which movie I want to watch


Scenario: userbrowsemovies
	Given I am on the movies page (/Movies/Browse),
	When I click on "Example Movie", 
	Then I should be redirected to the movie details page. 