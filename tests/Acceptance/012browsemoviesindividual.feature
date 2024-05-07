Feature: userbrowseindividualmovies

As a user
I want to browse  the movies that are currently being shown so that I can make a decision about which movie I want to watch

Scenario: userbrowseindividualmovies
	Given I am on the movies page (/Movies/index),
	When I click on "Example Movie 2", 
	Then I should be redirected to the movie details page. 