Feature: reviewsreject 

As an administrator, 
I want to be able to reject user reviews.

Scenario: reviewsreject
  Given I am logged in as "admin@email.com"
  And I am on the "Admin Reviews index" page
  And the review description is I really did not enjoy this movie
  When I click on the reject button
  Then the review with description I really did not enjoy this movie gets removed from the "Admin Reviews index" page 
  And the review with title I really did not enjoy this movie gets removed from the database