Feature: confirmorder

As a user,
I want to checkout so that I can book tickets.

Scenario: confirmorder
  Given I am on checkout page 
  And I see my order and both of my tickets
  When I enter my "John Doe"
  And I enter I enter a "1423546789327514"
  And I enter I select the month "04" 
  And I select the year "24"
  And I enter the cvc "352"
  When I click on Confirm Payment button
  Then I should be redirected to the receipt page
  And I should see my receipt
  And the cart status for my order should be changed to 0 in the database