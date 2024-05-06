Feature: viewincompletecart

As a user,
I want to view incomplete orders from my cart so I can either complete or delete them.

Scenario: viewincompletecart
  Given I am on the Profile page
  And I am logged in as "test@email.com"
  When I click on the cart button 
  Then I get redirected to the cart page 
  Where the seat displayed has an id of 23
  And the day is "Sunday"
  And the time is "1:00:00"
  And the total price is "13.7885"