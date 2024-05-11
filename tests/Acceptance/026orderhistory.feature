Feature: orderhistory

As a user,
I want to view my purchase history so that I can see all my past orders and my upcoming orders.

Scenario: orderhistory
  Given I am on the profile page for "test@email.com"
  When I click on Purchase History
  Then I should be redirected to the purchase history page 
  And I should see my order for Example Movie 2