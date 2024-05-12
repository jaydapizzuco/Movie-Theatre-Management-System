Feature: bookTickets

As a user,
I want to book tickets for a specific movie screening so that I can secure my place in the theatre days before the actual screening.

Scenario: selectSeats
  Given I am on the seatSelection page for "Example Movie 2"
  And the screening time "Sunday : 1:00:00",
  And I have selected seat with the id 13
  And I have selected seat with the id of 12
  When I click on Book Tickets button
  Then an order should be made with user id corresponding to the email "test@email" with both seats
  And I am redirected to Ticket Cart page with the correct order