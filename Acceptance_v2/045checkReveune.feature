Feature: checkRevenue 

As an administrator, 
I want to be able to check a movie's revenue to see how much money the thtre has earned from this movie's ticket sales.

Scenario: checkRevenue
  Given I am on admin index movie page
  When I click on the cash icon associated with "Example Movie 2"
  Then I should be redirected to the revenue page for "Example Movie 2"
  And the total ticket revenue for this movie should be "0" 