Feature: reviewsreject 

As an administrator, 
I want to be able to reject user reviews.

Scenario: reviewsreject
  Given I am on the Admin's Index Review page
  When I click the reject button
  Then the review with id 1 is removed from the database
  And I am redirected to the Admin's Index Review page