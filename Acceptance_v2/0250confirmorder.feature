Feature: confirmorder

As a user,
I want to checkout so that I can book tickets.

Scenario: confirmorder
  Given I am on checkout page 
  And I have an order containing two tickets with seat ids 12 and 13 for "Example Movie 2" on "Sunday at 1:00:00"
  When I enter my "John Doe"
  And I enter I enter a "1423546789327514"
  And I enter I select the month "04" 
  And I select the year "24"
  And I enter the cvc "352"
  When I click on "Confirm Payment"
  Then I should be redirected to the receipt page