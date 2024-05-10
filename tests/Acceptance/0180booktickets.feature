Feature: bookTickets

As a user,
I want to book tickets for a specific movie screening so that I can secure my place in the theatre days before the actual screening.

Scenario: selectSeats
  Given I am on the seatSelection page for Example Movie 2
  And the screening time  is Sunday : 1:00:00,
  And I have selected a seat with id "23"
  When I click on "Book Tickets"
  Then an order should be made with user id corresponding to the email "test@email"
  And I am redirected to Ticket Cart page