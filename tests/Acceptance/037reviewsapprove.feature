Feature: reviewsapprove 

As an administrator, 
I want to approve reviews to display them on the movie reviews pages.

Scenario: reviewsapprove
  Given I am logged in as "admin@email.com"
  And I am on the "Admin Reviews index" page
  And the review title is “Best movie I’ve seen in a long time!!!”, 
  When I click on the approve button
  Then the review with description “Best movie I’ve seen in a long time!!!”, " gets removed from the "Admin Reviews index" page 
  And the review with description “Best movie I’ve seen in a long time!!!”,  gets added on the Reviews page for "Movie 1"