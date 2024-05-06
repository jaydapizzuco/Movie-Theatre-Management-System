Feature: reviewsapprove 

As an administrator, 
I want to approve reviews to display them on the movie reviews pages.

Scenario: reviewsapprove
  Given I am logged in as "admin@email.com"
  And I am on the "Admin Reviews index" page
  And the review title is “Great Movie!”
  When I click on the approve button
  Then the review with title "Great Movie!" gets removed from the "Admin Reviews index" page 
  And the review with title "Great Movie!" gets added on the page of "Movie 1"