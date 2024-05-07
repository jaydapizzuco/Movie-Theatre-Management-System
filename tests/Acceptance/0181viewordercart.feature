Feature: viewordercart

As a user,
I want to view my cart with all the pending orders to be able to finish or cancel my orders

Scenario: viewordercart
  Given I am on the Profile page
  And I am logged in as "test@email.com"
  When I click on the cart button
  Then I am redirected to the cart page
  And all my unprocessed orders are displayed