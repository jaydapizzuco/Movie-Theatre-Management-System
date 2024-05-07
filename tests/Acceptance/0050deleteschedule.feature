Feature: deleteschedule

 As an administrator,
 I want to delete screening times from movies so that unavailable screening times are not shown to users.

Scenario: deleteschedule
  Given I am on an individual movie page
  And the movie title is “Example Movie”, 
  When I click to delete the screening time
  And the day is "Sunday" 
  And the time is "1:00" 
  Then I am redirected to the deletion confirmation page
  When I click the "Delete" button
  Then the Movie Schedule where day: "Sunday", time: "1:00" and movie id: ID of "Example Movie" is deleted to the database 
  And I am redirected to (/Movie/adminIndex).
