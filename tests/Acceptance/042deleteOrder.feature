Feature: deleteorder

As a user,
I want to delete orders so that I can be refunded for movies that I can no longer attend

Scenario: deleteorder
  Given I am on the purchase history page
  And I am logged in as "test@email.com"
  When I click on the trash can button where the seats displayed are 12 and 13 
  And the day is "Sunday"
  And the time is "1:00:00"
  And the total price is "27.5777"
  Then I am redirected to the delete Order page for this order
  When I click delete
  Then I am redirected to my purchase history page
  And the order gets removed from my purchase history page 
