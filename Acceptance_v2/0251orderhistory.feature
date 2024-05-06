Feature: orderhistory

 As a user,
 I want to view my purchase history so that I can see all my past orders and my upcoming orders.

Scenario: orderhistory
  Given I am on my profile page
  And I logged into account "test@email.com"
  When I click on Purchase History
  Then I should be redirected to the purchase hostory page and I should see the order for "Example Movie 2" on "Sunday" at "1:00:00