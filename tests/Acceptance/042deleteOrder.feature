Feature: deleteorder

As a user,
I want to delete orders so that I can be refunded for movies that I can no longer attend

Scenario: deleteorder
  Given I am logged in as a user
  And I am on the purchase history page
  When I click on the trash can button where the movie is example movie 2
  Then I am redirected to the delete Order page for this order
  When I click delete
  Then I am redirected to my purchase history page
  And the order gets removed from my purchase history page 
