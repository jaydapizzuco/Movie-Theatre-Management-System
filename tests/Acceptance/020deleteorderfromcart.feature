Feature: deleteorderfromcart

As a user,
I want to delete orders from the cart to not have to process them

Scenario: deleteorderfromcart
  Given I am on the Cart page
  When I click on the trash can button where the seat displayed is 23
  Then I am redirected to the order delete page
  When I click delete the order gets removed from the database
  And I am redirected to the order history page