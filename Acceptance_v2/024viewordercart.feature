Feature: viewordercart

 As a user,
 I want to view the order and complete the transaction for this order.

Scenario: viewordercart
  Given I am on the cart page 
  And the screening time "Sunday : 1:00:00",
  And I have selected a seat with id "12" and a seat with id "13"
  And the total price is "27.5778"
  When I click on "Checkout"
  Then I am redirected to the checkout page 
  And the title should be "Example Movie 2"