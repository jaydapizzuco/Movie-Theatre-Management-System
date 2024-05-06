Feature: addschedule

 As an administrator,
 I want to add screening times to movies so that more screening times are available for movies.


Scenario: addschedule
  Given I am on the add movie page, 
  When the movie title is “Example Movie”
  And the source link of the cover image is “https://upload.wikimedia.org/wikipedia/en/b/bc/Abigail_Official_Poster.jpg”
  And the director is “abc”
  And the movie length is “105”
  And the description is “This is a movie about horses”
  And the release date is “2024-03-10”
  And the link to the trailer is “2024-03-10”
  And the Screening day is “Sunday”
  And the Screening time is “1:00”
  And the movie information is not null and does not already exist in the database, 
  When I click Add Movie, 
  Then I am redirected to the movie page
  And I see the “Example Movie”
  And  a movie with title “Example Movie”,source link of the cover image: "https://upload.wikimedia.org/wikipedia/en/b/bc/Abigail_Official_Poster.jpg", director: "abc",  length: “105”,  description: “This is a movie about horses”, release date: “2024-03-10” and link to trailer: "https://www.youtube.com/watch?v=3PsP8MFH8p0" is added to the database. 
