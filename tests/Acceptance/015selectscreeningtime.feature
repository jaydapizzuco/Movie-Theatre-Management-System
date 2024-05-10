Feature: selectScreeningTime

As a user,
I want to select a screening time for a movie so that I can select seats, book tickets and place an order.

Scenario: selectScreeningTime
  Given I am on the selectScreening page for "Example Movie 2"
  And I select the screening time "Sunday : 1:00:00", 
  When I click Select Screening button, 
  Then I am redirected to the seat selection page for "Example Movie" on "Sunday" at "1:00:00" 