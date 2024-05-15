Feature: reviewsapprove 

As an administrator, 
I want to approve reviews to display them on the movie reviews pages.

Scenario: reviewsapprove
  Given I am on the "Admin Reviews index" page
  When I click on the approve button for the review with text changed
  Then the review with text changed, gets removed from the Admin Reviews index page 
  And the review with text changed,  gets added on the Reviews page for Abigail