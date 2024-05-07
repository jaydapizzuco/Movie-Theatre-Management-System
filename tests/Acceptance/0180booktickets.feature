Feature: bookTickets

As a user,
I want to book tickets for a specific movie screening so that I can secure my place in the theatre days before the actual screening.

Scenario: selectSeats
  Given I am on the seatSelection page for "Example Movie 2"
  And the screening time "Sunday : 1:00:00",
  And I have selected a seat with id "23"
  When I click on "Book Tickets"
  Then an order should be made with user id corresponding to the email "test@email"
  And the order_date should be the current date
  And the total price should be "13.7885"
  And the cart status should be 1
  And the order status should be one
  And one ticket associated with the order should be created
  And the movie id should be the movie id for "Example Movie"
  And the movie_day should be "Sunday"
  And the movie_time should be "1:00:00"
  And the seat_id should be "23" 