Feature: selectseats

As a user,
I want to select seats for my order in order to book them in advance.

Scenario: selectseats
  Given I am on the Seat Selection page
  And the day is "Sunday"
  And the time is "1:00:00"
  And I select seat 12 
  And I select seat 13
  When I click on the "Book Tickets" button
  Then I am redirected to the cart page where the order information is displayed