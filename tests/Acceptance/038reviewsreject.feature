Feature: reviewsreject 

As an administrator, 
I want to be able to reject user reviews.

Scenario: reviewsreject
  Given I am on the Admin's Index Review page
  When I click the reject button
  Then the review with id 1 is removed from the database
  And I am redirected to the Admin's Index Review page

   Given I am logged in as "admin@email.com"
  And I am on the "Admin Reviews index" page
  And the review description is I really did not enjoy this movie”
  When I click on the approve button
  Then the review with description I really did not enjoy this movie” gets removed from the "Admin Reviews index" page 
  And the review with title I really did not enjoy this movie” gets removed from the database