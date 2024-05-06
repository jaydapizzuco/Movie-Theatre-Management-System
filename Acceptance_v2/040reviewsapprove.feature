Feature: reviewsapprove 

As an administrator, 
I want to be able to approve user reviews.

Scenario: reviewsapprove
  Given I am on the Admin's Index Review page
  When I click the approve button 
  Then the review status for the review with id 1 is set to 1
  And I am redirected to the Admin's Index Review page