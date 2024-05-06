Feature: deleteorderfromcart

 As a user,
 I want to delete orders from the cart to not have to process them

Scenario: deleteorderfromcart
  Given I am on the Cart page
  And I am logged in as "Demo User"
  When I click on the trash can button where the seat displayed is 12
  And the day is "Sunday"
  And the time is "1:00:00"
  And the second seat displayed is 13
  And the day is "Sunday"
  And the time is "1:00:00"
  And the total price is "27.58"
  The the order gets removed from the cart 
  And I am redirected to the refreshed cart page