Feature: selectSeats

As a user,
I want to select seats for a specific movie screening so that I can tickets that do not already belong to someone.

Scenario: selectSeats
  Given I am on the seatSelection page for "Example Movie 2"
  And the screening time "Sunday : 1:00:00",
  When I click on an available seat 
  Then I should be redirected to the selectscreening page
  And the id of the seats I have selected is added to the seat array
  And the icon for this seat becomes the checkmark icon
