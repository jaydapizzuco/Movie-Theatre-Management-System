Feature: addmovie

 As an administrator,
 I want to add movies to the website so that users can see new movies 


Scenario: addmovie
  Given I am on the add movie page, 
  When the movie title is “Example Movie”
  And the movie duration is “1:45:23”
  And the description is “This is a movie about horses”
  And the release date is “10/03/2024”
  And the movie information is not null and does not already exist in the database, 
  When I click Add Movie, 
  Then I am redirected to the movie page
  And I see the “Example Movie”
  And  a movie with title “Example Movie” , duration: “1:45:23”,  description: “This is a movie about horses” and release date: “10/03/2024” is added to the database. 
