Feature: viewincompletecart

As a user,
I want to view incomplete orders from my cart so I can either complete or delete them.

Scenario: viewincompletecart
  Given I am on my Profile page
  When I click on the cart button on top of page
  Then I get redirected to my incomplete cart page 
  And I see my incomplete order