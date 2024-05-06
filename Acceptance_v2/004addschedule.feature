Feature: addschedule

 As an administrator,
 I want to add screening times to movies so that more screening times are available for movies.


Scenario: addschedule
  Given I am on an individual movie page
  And the movie title is “Example Movie”, 
  When I click "Add a new screening time", 
  Then I am redirected to the schedule creation page 
  And I pick "Sunday" as the day
  And I pick "1:00" as the time,
  When I click the "Add" button
  Then a new Movie Schedule where day: "Sunday", time: "1:00" and movie id: ID of "Example Movie" is added to the database 
  And I am redirected to (/Movie/adminIndex).
