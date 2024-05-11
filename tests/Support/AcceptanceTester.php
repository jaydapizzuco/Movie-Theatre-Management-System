<?php

declare(strict_types=1);

namespace Tests\Support;
use app\models;
use Codeception\Util\Locator;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    // ----------------------------001 ADMIN LOGIN------------------
      /**
     * @Given I am on the login page
     */
     public function iAmOnTheLoginPage()
     {
         $this->amOnPage("/User/login");
     }

      /**
     * @When I enter email for admin
     */
     public function iEnterEmailForAdmin()
     {
          $this->fillField('email','admin@email.com');
     }

    /**
     * @When I enter password ‘:num1:num2:num3’
     */
     public function iEnterPassword123()
     {
        $this->fillField('password','123');
        $this->click("Login");
     }

    /**
     * @Then I am redirected to the admin’s profile page:num1
     */
     public function iAmRedirectedToTheAdminsProfilePage()
     {
          $this->see("Admin");
     }

      /**
     * @param AcceptanceTester $i
     */

     public function adminLogin(){
        $this->amOnPage("/User/login");
        $this->fillField('email','admin@email.com');
        $this->fillField('password','123');
        $this->click("action");

     }

     /**
     * @param AcceptanceTester $j
     */

     public function testLogin(){
        $this->amOnPage("/User/login");
        $this->fillField('email','test@email.com');
        $this->fillField('password','test123');
        $this->click("action");

     }

     /**
     * @param AcceptanceTester $k
     */

     public function demoLogin(){
        $this->amOnPage("/User/login");
        $this->fillField('email','demo@email.com');
        $this->fillField('password','demo123');
        $this->click("action");

     }

     public function getIdOfExampleMovie(){
        $movieID = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);
        return $movieID;
     }

    // --------------------------002 ADD MOVIE----------------------
    /**
     * @Given I am on the add movie page,
     */
     public function iAmOnTheAddMoviePage()
     {
        $this->adminLogin();
       $this->amOnPage("/Movie/create?");
     }

    /**
     * @When the movie title is “Example Movie”
     */
     public function theMovieTitleIsExampleMovies()
     {
         $this->fillField('title','Example Movie');
     }

      /**
     * @When the source link of the cover image is “Posterjpg”
     */
     public function theSourceLinkOfTheCoverImageIsPosterjpg()
     {
       $this->fillField('image','https://upload:num1wikimedia:num1org/wikipedia/en/b/bc/Abigail_Official_Poster.jpg');
     }

    /**
     * @When the director is “abc”
     */
     public function theDirectorIsabc()
     {
          $this->fillField('director','abc');
     }

    /**
     * @When the movie length is “:num1:num2:num3”
     */
     public function theMovieLengthIs($num1, $num2, $num3)
     {
        $this->fillField('length','123');
     }

    /**
     * @When the description is “This is a movie about horses”
     */
     public function theDescriptionIsThisIsAMovieAboutHorses()
     {
          $this->fillField('description','This is a movie about horses');
     }

      /**
     * @When the link to the trailer is “wwwyoutubecom”
     */
     public function theLinkToTheTrailerIswwwyoutubecom()
     {
           $this->fillField('trailer','www.youtube.com');
     }
     

    /**
     * @When the Screening day is “Sunday”
     */
     public function theScreeningDayIsSunday()
     {
         $this->selectOption('days','Sunday');
     }

    /**
     * @When the Screening time is “:num1::num2:num2”
     */
     public function theScreeningTimeIs($num1, $num2, $num3)
     {
        $this->selectOption('times','1:00');
     }

    /**
     * @When I click Add Movie,
     */
     public function iClickAddMovie()
     {
          $this->click("Add Movie");
     }

    /**
     * @Then I see the “Example Movie”
     */
     public function iSeeTheExampleMovie()
     {
         $this->see("Example Movie");
     }

    // ----------------------003 UPDATE MOVIE-----------------------
    /**
     * @Given I am on the update movie page for “Example Movie”,
     */
     public function iAmOnTheUpdateMoviePageForExampleMovie()
     {
        $this->adminLogin();
        //$this->loadSessionSnapshot('movie');
    
        $id = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);

    
        $this->amOnPage("/Movie/update?id=".$id);
     }

    /**
     * @When I edit “Example Movie’s” information to movie title is “Example Movie :num1” and click Update,
     */
     public function iEditExampleMoviesInformationToMovieTitleIsExampleMovieAndClickUpdate($num1)
     {
        $this->fillField('title','Example Movie '.$num1);
        $this->click('action');
     }

    /**
     * @Then I should be redirected to movie details page with the title “Example Movie :num1”
     */
     public function iShouldBeRedirectedToMovieDetailsPageWithTheTitleExampleMovie($num1)
     {
        $this->see("Example Movie ".$num1);
     }

// -------------------------0041 ADD SCHEDULE--------------------

         /**
     * @Given I am on an individual movie page for example:num1
     */
     public function iAmOnAnIndividualMoviePageForExample($num1)
     {
          $this->adminLogin();    
        $id = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);

        $this->amOnPage("/MovieSchedule/index?id=".$id);
     }

    /**
     * @When I click :arg1 button,
     */
     public function iClickButton($arg1)
     {
          $id = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);
 
        $this->amOnPage('/MovieSchedule/create?id=' .$id);
     }

    /**
     * @Then I pick :arg1 as the day of the screening
     */
     public function iPickAsTheDayOfTheScreening($arg1)
     {
         $this->selectOption('days','Friday');
     }

    /**
     * @Then I pick :arg1 as the time of the screening,
     */
     public function iPickAsTheTimeOfTheScreening($arg1)
     {
        $this->selectOption('times','7:05');
     }

    /**
     * @When I click :arg1 button
     */
     public function iClickButtonn($arg1)
     {
          $this->click('action');
     }

    /**
     * @Then I am redirected to the adminIndex Page
     */
     public function iAmRedirectedToTheAdminIndexPage()
     {
         $this->seeInCurrentUrl("/Movie/adminIndex");
     }

    /**
     * @Then the new screening time was added to database
     */
     public function theNewScreeningTimeWasAddedToDatabase()
     {
          $id = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);
        $this->seeInDatabase('movie_schedule', ['movie_id' => $id, 'day' => 'Sunday', 'time_id' => '1']);
     }

    // -------------------------004 ADD SCHEDULE--------------------

    /**
     * @Given I am on an individual movie page
     */
     public function iAmOnAnIndividualMoviePage()
     {
        $this->adminLogin();    
        $id = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);

        $this->amOnPage("/MovieSchedule/index?id=".$id);
     }

    /**
     * @When I click :arg1,
     */
     public function iClick()
     {
      $id = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);
 
        $this->amOnPage('/MovieSchedule/create?id=' .$id);
     }

    /**
     * @Then I pick :arg1 as the day
     */
     public function iPickAsTheDay($arg1)
     {
        $this->selectOption('days','Sunday');
     }

    /**
     * @Then I pick :arg1 as the time,
     */
     public function iPickAsTheTime($arg2)
     {
        $this->selectOption('times','1:00');
     }

    /**
     * @When I click the :arg1 button
     */
     public function iClickTheButton($arg1)
     {
         $this->click('action');

     }

      /**
     * @Then I am redirected to adminIndex Page
     */
     public function iAmRedirectedToAdminIndexPage()
     {
         $this->seeInCurrentUrl("/Movie/adminIndex");
     }

    /**
     * @Then the new screening time was added to the database
     */
     public function theNewScreeningTimeWasAddedToTheDatabase()
     {
        $id = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);
        $this->seeInDatabase('movie_schedule', ['movie_id' => $id, 'day' => 'Sunday', 'time_id' => '1']);
     }

    // ----------------------005 DELETE SCHEDULE-------------------
    /**
     * @Given the movie title is “Example Movie”,
     */
     public function theMovieTitleIsExampleMovie()
     {
        $id = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);
        $this->amOnPage('/MovieSchedule/index?id=' .$id);
        $this->see("Screening Times for Example Movie");
     }

    /**
     * @When I click the 'delete' screening time button
     */
     public function iClickThedeleteScreeningTimeButton()
     {
        $movieID = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);
        $scheduleID = $this->grabFromDatabase('movie_schedule', 'schedule_id', ['movie_id' => $movieID, 'day' => 'Friday']);
        $this->amOnPage('/MovieSchedule/delete?id=' .$scheduleID);
     }

    /**
     * @When the day is :arg1
     */
     public function theDayIs($arg1)
     {
        $this->see('Friday');
     }

    /**
     * @When the time is :arg1
     */
     public function theTimeIs($arg1)
     {
        $this->see('7:05:00');
     }

     /**
     * @When I click 'Delete'
     */
     public function iClickDeleteSchedule()
     {
        $this->click('action');
     }

    /**
     * @Then I am redirected to AdminIndex page:num1
     */
     public function iAmRedirectedToAdminIndex($num1)
     {
        $this->seeInCurrentUrl("/Movie/adminIndex");
     }

     // ---------------006 MODIFY ABOUT US----------------------- 
    /**
     * @Given I am on the updateAbout page
     */
     public function iAmOnTheUpdateAboutPage()
     {
        $this->amOnPage("/User/updateAbout");
     }

    /**
     * @Given I change the email to :arg1
     */
     public function iChangeTheEmailTo($arg1)
     {
        $this->fillField('email', 'movietheater@email.com');
     }

    /**
     * @Given I change the description to :arg1
     */
     public function iChangeTheDescriptionTo($arg1)
     {
        $this->fillField("//input[@type='text']", 'Welcome! We are a small Movie Theater company catered to all. All the popular new movies can be found on our website.');
     }

    /**
     * @Given I click on the :arg1 button
     */
     public function iClickOnTheButton($arg1)
     {
        $this->click('action');
     }

    /**
     * @Given I am redirected to the profile page
     */
     public function iAmRedirectedToTheProfilePage()
     {
        $this->amOnPage('Admin');
     }

     // -----------------007 ADMIN LOGOUT-------------------------
     /**
     * @Given that I am logged into the user account “Admin”,
     */
     public function thatIAmLoggedIntoTheUserAccountAdmin()
     {
        $this->adminLogin();
     }

    /**
     * @Given userId is :arg1
     */
     public function userIdIs($arg1)
     {
        $userID = $this->grabFromDatabase('user', 'user_id',['email' => 'admin@email.com']);
        $arg1 = $userID;
     }

    /**
     * @Given I'm on the adminProfile page
     */
     public function imOnTheAdminProfilePage()
     {
        $this->amOnPage('/User/adminProfile');
     }

    /**
     * @When I click on the logout option,
     */
     public function iClickOnTheLogoutOption()
     {
        $this->click("Logout");
     }

         /**
     * @Then I should be redirected to the homepage
     */
     public function iShouldBeRedirectedToTheHomepage()
     {
          $this->seeInCurrentUrl("/Main/index"); 
     }

      /**
     * @Then if I click on Account I should be redirected to the login page:num1
     */
     public function ifIClickOnAccountIShouldBeRedirectedToTheLoginPage($num1)
     {
         $this->click('a[name="account"]');
         $this->seeInCurrentUrl("/User/login");
     }

     // ------------008 ACCOUNT CREATION -----------------------

  /**
     * @Given I am on the registration page
     */
     public function iAmOnTheRegistrationPage()
     {
        $this->amOnPage('User/register');
     }

      /**
     * @Given I enter my email
     */
     public function iEnterMyEmail()
     {
        $this->fillField("email","test@email.com");
     }

      /**
     * @Given I enter John Doe
     */
     public function iEnterJohnDoe()
     {
         $this->fillField("name","John Doe");
     }

    /**
     * @When my password is “test:num1:num2:num3”
     */
     public function myPasswordIstest($num1, $num2, $num3)
     {
        $this->fillField("password","test123");
        $this->fillField("confirmpassword","test123");
     }

    /**
     * @When I click the Registration button
     */
     public function iClickTheRegistrationButton()
     {
        $this->click("register");
     }

       /**
     * @Then I am redirected to the login page
     */
     public function iAmRedirectedToTheLoginPage()
     {
         $this->seeInCurrentUrl('/User/login');
     }

    /**
     * @Then the user John Doe is created in the database
     */
     public function theUserJohnDoeIsCreatedInTheDatabase()
     {
         $this->seeInDatabase('user', ['name' => 'John Doe', 'email' => 'test@email.com']);
     }

     //------------------009USERLOGIN-----------------------

         /**
     * @Given I am on the login page (localhost/User/Login)
     */
     public function iAmOnTheLoginPagelocalhostUserLogin()
     {
         $this->amOnPage("/User/login");
     }
         /**
     * @Given the account with test email exists in the database
     */
     public function theAccountWithTestEmailExistsInTheDatabase()
     {
        $this->seeInDatabase('user', ['email' => 'test@email.com']);

     }
     
       /**
     * @When I enter  the email
     */
     public function iEnterTheEmail()
     {
           $this->fillField("email","test@email.com");
      }


    /**
     * @When password “test:num1:num2:num3”
     */
     public function passwordtest($num1, $num2, $num3)
     {
        $this->fillField("password","test123");
     }

    /**
     * @When click on the log in button,
     */
     public function clickOnTheLogInButton()
     {
        $this->click("Login");
     }

    /**
     * @Then I should be redirected to the profile page
     */
     public function iShouldBeRedirectedToTheProfilePage()
     {
        $this->amOnPage("/User/profile");
     }

    /**
     * @Then see “John Doe" as my name
     */
     public function seeJohnDoeAsMyName()
     {
        $this->see("John Doe");
     }

      public function userLogin(){
        $this->amOnPage("/User/login");
        $this->fillField('email','test@email.com');
        $this->fillField('password','test123');
        $this->click("action");

     }

 // ----------------010ACCOUNTUPDATE-------------------

         /**
     * @Given I am logged into the account with the test email
     */
     public function iAmLoggedIntoTheAccountWithTheTestEmail()
     {
        $this->userLogin();
     }

      /**
     * @Given I am on the update profile page
     */
     public function iAmOnTheUpdateProfilePage()
     {
         $this->amOnPage('/User/update?');
     }   
  
   /**
     * @When I update my name to “John Smith”
     */
     public function iUpdateMyNameToJohnSmith()
     {
         $this->fillField('name','John Smith');
     }

      /**
     * @When I enter the password “test:num1:num2:num3”
     */
     public function iEnterThePasswordtest($num1, $num2, $num3)
     {
         $this->fillField('password','test123');
     }


        /**
     * @When I click  Submit
     */
     public function iClickSubmit()
     {
         $this->click("submit");
     }

   /**
     * @Then I should be redirected to my profile page
     */
     public function iShouldBeRedirectedToMyProfilePage()
     {
         $this->amOnPage('/User/profile');
     }

      /**
     * @Then I should see the name as “John Smith”
     */
     public function iShouldSeeTheNameAsJohnSmith()
     {
        $this->see("John Smith");
     }

    /**
     * @Then the name should be updated in the database
     */
     public function theNameShouldBeUpdatedInTheDatabase()
     {
         $this->seeInDatabase('user', ['name' => 'John Smith', 'email' => 'test@email.com']);
     }

     //-----------------------011BROWSEALLMOVIES-----------------

    /**
     * @Given I am on the homepage,
     */
     public function iAmOnTheHomepage()
     {
         $this->amOnPage("/Main/index");
     }

    /**
     * @When I click on Movies in the navigation,
     */
     public function iClickOnMoviesInTheNavigation()
     {
        $this->click('a[name="movies"]');
     }

        /**
     * @Then I should be redirected to the page with all the current movies:num1
     */
     public function iShouldBeRedirectedToThePageWithAllTheCurrentMovies($num1)
     {
         $this->amOnPage("/Movie/index");
     }

      //-----------------------012BROWSEMOVIESINDIVIDUAL-----------------
      /**
     * @Given I am on the movies page,
     */
     public function iAmOnTheMoviesPage()
     {
          $this->amOnPage("/Movie/index");
     }

    /**
     * @Given I am on the movies page (/Movies/index),
     */
     public function iAmOnTheMoviesPageMoviesindex()
     {
         
        $this->amOnPage("/Movie/index");
     }

    /**
     * @When I click on :arg1,
     */
     public function iClickOn($arg1)
     {
         $movieID = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);
         $this->click('a[name="' . $movieID . '"]');
     }

        /**
     * @Then I should be redirected to the movie details page
     */
     public function iShouldBeRedirectedToTheMovieDetailsPage()
     {
          $movieID = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie%']);
         $this->seeInCurrentUrl("Movie/individual?id=".$movieID);
     }

        /**
     * @Then I should see the correct title
     */
     public function iShouldSeeTheCorrectTitle()
     {
         $this->see("Example Movie 2");
     }

     //-----------------------013SEARCHMOVIESTITLE-----------------

      /**
     * @Given I am logged in and on the movies page
     */
     public function iAmLoggedInAndOnTheMoviesPage()
     {
         $this->demoLogin();
        $this->amOnPage("/Movie/index");
     }

    /**
     * @When I enter :arg1 in the search bar
     */
     public function iEnterInTheSearchBar($arg1)
     {
        $this->fillField(['name' => 'search'], 'Example Movie 2');
     }

    /**
     * @When click on the button :arg1,
     */
     public function clickOnTheButton($arg1)
     {
        $this->click('action');
     }

    /**
     * @Then I see :arg1
     */
     public function iSee($arg1)
     {

        $movieID = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie 2%']);
         $this->click('a[name="' . $movieID . '"]');
         $this->see("Example Movie 2");

        // $movieID = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie 2%']);
        // //$this->see(''.$movieID.'', 'a');
        // $this->see('a[name="' . $movieID . '"]');
     }

     //---------------014SEARCHMOVIEDESC-------------
 /**
     * @Given I am logged in
     */
     public function iAmLoggedIn()
     {
        $this->userLogin();
     }

    /**
     * @Given I amon the movies page
     */
     public function iAmonTheMoviesPage2()
     {
         $this->amOnPage('/Movie/index');
     }

    /**
     * @When I enter description in the search bar
     */
     public function iEnterDescriptionInTheSearchBar()
     {
          $this->fillField(['name' => 'search'], 'horses');
     }

       /**
     * @When click I on the search by description button
     */
     public function clickIOnTheSearchByDescriptionButton()
     {
         $this->click("action");
     }

         /**
     * @Then I should be redirected to the search results page
     */
     public function iShouldBeRedirectedToTheSearchResultsPage()
     {
         $this->seeInCurrentUrl('/Movie/search');
     }

      /**
     * @Then I should see the results for example movie :num1
     */
     public function iShouldSeeTheResultsForExampleMovie($num1)
     {
          $movieID = $this->grabFromDatabase('movie', 'movie_id',['description like' => 'This is a movie about horses']);
         $this->click('a[name="' . $movieID . '"]');
         $this->seeInCurrentUrl("Movie/individual?id=".$movieID);
         $this->see("Example Movie 2");

     }
     //---------------015SELECTSCREENING----------------

    /**
     * @Given I am on the selectScreening page for :arg1
     */
     public function iAmOnTheSelectScreeningPageFor($arg1)
     {
        $this->testLogin();
         $movieID = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie 2']);
        $this->amOnPage('/Ticket/selectScreening?id='.$movieID);
     }

    /**
     * @Given I select the screening time :arg1,
     */
     public function iSelectTheScreeningTime($arg1)
     {
        $this->selectOption('screening', 'Sunday:01:00:00');
     }

      /**
     * @When I click Select Screening button,
     */
     public function iClickSelectScreeningButton()
     {
        $this->click('selected');
     }

    /**
     * @Then I am redirected to the seat selection page for :arg1 on :arg2 at :arg3
     */
     public function iAmRedirectedToTheSeatSelectionPageForOnAt($arg1, $arg2, $arg3)
     {
        $this->see('Book Tickets for Example Movie 2');
        $this->see('Sunday : 01:00:00');
     }

// --------------------------- 017SELECTSEATS -----------------------
    /**
     * @Given I am on the seatSelection page for :arg1
     */
     public function iAmOnTheSeatSelectionPageFor($arg1)
     {
        $this->testLogin();
        $movieID = $this->getIdOfExampleMovie();
        $this->amOnPage("/Ticket/selectScreening?id=" .  $movieID);
     }

    /**
     * @Given the screening time :arg1,
     */
     public function theScreeningTime($arg1)
     {
         $this->selectOption('screening','Sunday:01:00:00');
         $this->click("selected");
     }

        /**
     * @Then I should be redirected to the selectscreening page
     */
     public function iShouldBeRedirectedToTheSelectscreeningPage()
     {
      $this->see('Sunday : 1:00:00');
     }


    /**
     * @When I click on an available seat
     */
     public function iClickOnAnAvailableSeat()
     {
         $this->checkOption('#13');
     }

    /**
     * @Then the icon for this seat becomes the checkmark icon
     */
     public function theIconForThisSeatBecomesTheCheckmarkIcon()
     {
        $this->seeCheckboxIsChecked('#13');
     }

     //---------------0180BOOKTICKETS----------------

      /**
     * @Given I am on the seatSelection page for Example Movie :num1
     */
     public function iAmOnTheSeatSelectionPageForExampleMovie($num1)
     {
        $this->testLogin();
         $movieID = $this->getIdOfExampleMovie();
         $this->amOnPage("/Ticket/selectScreening?id=".$movieID);

     }

     /**
     * @Given the screening time  is Sunday : :num1::num2:num2::num2:num2,
     */
     public function theScreeningTimeIsSunday($num1, $num2, $num3, $num4, $num5)
     {
        $this->selectOption('screening', 'Sunday:01:00:00');
         $this->click("selected");
     }

    /**
     * @Given I have selected a seat with id :arg1
     */
     public function iHaveSelectedASeatWithId($arg1)
     {
        $this->checkOption('#13');
        $this->seeCheckboxIsChecked('#13');
        
     }

    /**
     * @When I click on :arg1
     */
     public function iClickOn2($arg1)
     {
        $this->click('selected');
     }

    /**
     * @Then an order should be made with user id corresponding to the email :arg1
     */
     public function anOrderShouldBeMadeWithUserIdCorrespondingToTheEmail($arg1)
     {
         $userId = $this->grabFromDatabase('user', 'user_id',['email like' => 'test@email.com']);
         $this->seeInDatabase('orders', ['user_id' => $userId, 'total_price' => 13.7885, 'number_tickets' => 1]);
         // $dateOrder = $this->grabFromDatabase('orders', 'order_date',['user_id like' => $userId]);

         //$date =  date("Y-m-d");

         //$this->assertEquals($date,$dateOrder);
         //$this->seeDateIsToday($dateOrder);
         //$this->assertTrue(_ParseDate($dateOrder)->isToday());
         //\PHPUnit_Framework_Assert::assertTrue($this->_ParseDate($dateOrder)->isToday());
     }

     /**
     * @Then I am redirected to Ticket Cart page
     */
     public function iAmRedirectedToTicketCartPage()
     {
         $this->see('CART');
         $this->see('Example Movie 2', '.card-title');
    }

     //---------------0190VIEWINCOMPLETECART----------------

         /**
     * @Given I am on my Profile page
     */
     public function iAmOnMyProfilePage()
     {
         $this->testLogin();
         $this->amOnPage("/User/profile");
     }

    /**
     * @When I click on the cart button on top of page
     */
     public function iClickOnTheCartButtonOnTopOfPage()
     {
        $this->click('a[name = "cart"]');
     }

    /**
     * @Then I get redirected to my incomplete cart page
     */
     public function iGetRedirectedToMyIncompleteCartPage()
     {
         $this->amOnPage("/Order/incomplete");
     }

    /**
     * @Then I see my incomplete order
     */
     public function iSeeMyIncompleteOrder()
     {
        $this->see("Cart");
        $this->see("Example Movie 2");
        $this->see('13');
     }

     //----------------------- 020DELETORDERFROMCART---------------------------------------

  /**
     * @Given I am on the Cart page
     */
     public function iAmOnTheCartPage()
     {
         $this->testLogin();
         $this->amOnPage("/Order/incomplete");
     }

    /**
     * @When I click on the trash can button where the seat displayed is :num1:num2
     */
     public function iClickOnTheTrashCanButtonWhereTheSeatDisplayedIs($num1, $num2)
     {
        $userID = $this->grabFromDatabase('user', 'user_id',['email like' => 'test@email.com']);

        $date = date("Y-m-d");

         $orderId = $this->grabFromDatabase('orders', 'order_id',['user_id like' => $userID, 'total_price' => '13.7885', 'order_date' =>$date]);

         $this->click('a[name="' . $orderId . '"]');
     }

    /**
     * @Then I am redirected to the order delete page
     */
     public function iAmRedirectedToTheOrderDeletePage()
     {
        $this->seeInCurrentUrl("/Order/delete");
     }

        /**
     * @When I click delete the order gets removed from the database
     */
     public function iClickDeleteTheOrderGetsRemovedFromTheDatabase()
     {
         $userID = $this->grabFromDatabase('user', 'user_id',['email like' => 'test@email.com']);

        $date = date("Y-m-d");

         $orderId = $this->grabFromDatabase('orders', 'order_id',['user_id like' => $userID, 'total_price' => '13.7885', 'order_date' =>$date]);
         $this->click("delete");
         $this->dontSeeInDatabase('orders', ['order_id' => $orderId]);
     }

    /**
     * @When I am redirected to the order history page
     */
     public function iAmRedirectedToTheOrderHistoryPage()
     {
        $this->amOnPage('User/purchaseHistory');
        $this->dontSee("Example Movie 2");
        $this->dontSee("Sunday");
     }

    /**
     * @Given I am on the Select Schedule page for :arg1
     */
     public function iAmOnTheSelectSchedulePageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Select Schedule page for :arg1` is not defined");
     }

     //-----------------21SELECTSCREENINGTIME---------------------
    /**
     * @Given I am on the Select Schedule page for Example Movie :num1
     */
     public function iAmOnTheSelectSchedulePageForExampleMovie($num1)
     {
          $this->testLogin();
         $movieID = $this->grabFromDatabase('movie', 'movie_id',['title like' => 'Example Movie 2']);
        $this->amOnPage('/Ticket/selectScreening?id='.$movieID);
     }

    /**
     * @Given I select :arg1
     */
     public function iSelect($arg1)
     {
         $this->selectOption('screening', 'Sunday:01:00:00');
     }

    /**
     * @Then I am redirected to the seat selection page for :arg1
     */
     public function iAmRedirectedToTheSeatSelectionPageFor($arg1)
     {
        $this->see('Book Tickets for Example Movie 2');
        $this->see('Sunday : 01:00:00');
     }
     //-------------------023BOOKTICKETS----------------------

    /**
     * @Given I have selected seat with the id :num1:num2
     */
     public function iHaveSelectedSeatWithTheId($num1, $num2)
     {
         $this->checkOption('#12');
        $this->seeCheckboxIsChecked('#12');
     }

    /**
     * @Given I have selected seat with the id of :num1:num2
     */
     public function iHaveSelectedSeatWithTheIdOf($num1, $num2)
     {
         $this->checkOption('#13');
        $this->seeCheckboxIsChecked('#13');
     }

    /**
     * @Then an order should be made with user id corresponding to the email :arg1 with both seats
     */
     public function anOrderShouldBeMadeWithUserIdCorrespondingToTheEmailWithBothSeats($arg1)
     {
        $userId = $this->grabFromDatabase('user', 'user_id',['email like' => 'test@email.com']);

        $date = date("Y-m-d");
         $this->seeInDatabase('orders', ['user_id' => $userId, 'total_price' => 27.577, 'number_tickets' => 2, 'order_date' => $date]);

        $this->seeInDatabase('ticket', ['movie_day' => "Sunday", 'movie_time' => "01:00:00", 'seat_id' => 13]);
        $this->seeInDatabase('ticket', ['movie_day' => "Sunday", 'movie_time' => "01:00:00", 'seat_id' => 12]);
     }


    /**
     * @Then I am redirected to Ticket Cart page with the correct order
     */
     public function iAmRedirectedToTicketCartPageWithTheCorrectOrder()
     {
         $this->see('CART');
         $this->see('Example Movie 2', '.card-title');
         $this->see('Sunday : 01:00:00');
         $this->see('Seat Number: 12');
         $this->see('Seat Number: 13');
     }

    //----------------------0250CONFIRMORDER------------------------

    /**
     * @Given I am on checkout page
     */
     public function iAmOnCheckoutPage()
     {
        $this->testLogin();
         $orderid = $this->grabFromDatabase('ticket', 'order_id', ['movie_day' => "Sunday", 'movie_time' => "01:00:00", 'seat_id' => 13]);
         $this->amOnPage("/Order/checkout?id=".$orderid);
     }

        /**
     * @Given I see my order and both of my tickets
     */
     public function iSeeMyOrderAndBothOfMyTickets()
     {
        $this->see("Example Movie 2");
         $this->see("Sunday : 01:00:00");
         $this->see("Seat number: 12");
         $this->see("Seat number: 13");
     }

    /**
     * @When I enter my :arg1
     */
     public function iEnterMy($arg1)
     {
        $this->fillField("cardholder_name", "John");
     }

    /**
     * @When I enter I enter a :arg1
     */
     public function iEnterIEnterA($arg1)
     {
         $this->fillField("card_no","1927139734687129");
     }

    /**
     * @When I enter I select the month :arg1
     */
     public function iEnterISelectTheMonth($arg1)
     {
         $this->selectOption("months","04");
     }

    /**
     * @When I select the year :arg1
     */
     public function iSelectTheYear($arg1)
     {
         $this->selectOption("years","25");
     }

    /**
     * @When I enter the cvc :arg1
     */
     public function iEnterTheCvc($arg1)
     {
        $this->fillField("security_no","869");
     }
    /**
     * @When I click on Confirm Payment button
     */
     public function iClickOnConfirmPaymentButton()
     {
        $this->click("pay");
     }

      /**
     * @Then I should be redirected to the receipt page
     */
     public function iShouldBeRedirectedToTheReceiptPage()
     {
        $this->see("Booking Successful");
     }

    /**
     * @Then I should see my receipt
     */
     public function iShouldSeeMyReceipt()
     {
         $this->see("Receipt");
         $this->see("Seats: 12, 13,");
     }

    /**
     * @Then the cart status for my order should be changed to :num1 in the database
     */
     public function theCartStatusForMyOrderShouldBeChangedToInTheDatabase($num1)
     {
         $orderid = $this->grabFromDatabase('ticket', 'order_id', ['movie_day' => "Sunday", 'movie_time' => "01:00:00", 'seat_id' => 13]);

         $userId = $this->grabFromDatabase('user', 'user_id',['email like' => 'test@email.com']);

         $this->seeInDatabase('orders', ['order_id' => $orderid,'user_id' => $userId, 'cart_status'=> 0]);
       
     }

     //-------------------------026ORDERHISTORY------------------------

    /**
     * @Given I am on my profile page
     */
     public function iAmOnMyProfilePage2()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on my profile page` is not defined");
     }

    /**
     * @Given I logged into account :arg1
     */
     public function iLoggedIntoAccount($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I logged into account :arg1` is not defined");
     }

    /**
     * @When I click on Purchase History
     */
     public function iClickOnPurchaseHistory()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on Purchase History` is not defined");
     }

    /**
     * @Then I should be redirected to the purchase hostory page and I should see the order for :arg1 on :arg2 at ":num2::num3:num3::num3:num3
     */
     public function iShouldBeRedirectedToThePurchaseHostoryPageAndIShouldSeeTheOrderForOnAt($num1, $num2, $num3, $num4, $num5, $num6, $arg1, $arg2)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the purchase hostory page and I should see the order for :arg1 on :arg2 at :num2::num3:num3::num3:num3` is not defined");
     }

    /**
     * @Given that I am logged into the user account “John Smith”
     */
     public function thatIAmLoggedIntoTheUserAccountJohnSmith()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `that I am logged into the user account “John Smith”` is not defined");
     }

    /**
     * @Given my userId is :arg1
     */
     public function myUserIdIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my userId is :arg1` is not defined");
     }

    /**
     * @Given the account with email “demo@email:num1com”
     */
     public function theAccountWithEmaildemoemailcom($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the account with email “demo@email:num1com”` is not defined");
     }

    /**
     * @Given password “demo:num1:num2:num3” exists in the database,
     */
     public function passworddemoExistsInTheDatabase($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password “demo:num1:num2:num3” exists in the database,` is not defined");
     }

    /**
     * @When I enter  the email “demo@email:num1com”
     */
     public function iEnterTheEmaildemoemailcom($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter  the email “demo@email:num1com”` is not defined");
     }

    /**
     * @When password “demo:num1:num2:num3”
     */
     public function passworddemo($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password “demo:num1:num2:num3”` is not defined");
     }

    /**
     * @Then see :arg1 as my name
     */
     public function seeAsMyName($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `see :arg1 as my name` is not defined");
     }

    /**
     * @Given I am on the profile page
     */
     public function iAmOnTheProfilePage2()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the profile page` is not defined");
     }

    /**
     * @When I click on Home Page
     */
     public function iClickOnHomePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on Home Page` is not defined");
     }

    /**
     * @Then I am redirected to the Home page
     */
     public function iAmRedirectedToTheHomePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the Home page` is not defined");
     }

    /**
     * @Then the first movie displayed is Money Man
     */
     public function theFirstMovieDisplayedIsMoneyMan()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the first movie displayed is Money Man` is not defined");
     }

    /**
     * @Given I am logged into the account :arg1
     */
     public function iAmLoggedIntoTheAccount($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into the account :arg1` is not defined");
     }

    /**
     * @Given I am on the individual page of :arg1
     */
     public function iAmOnTheIndividualPageOf($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the individual page of :arg1` is not defined");
     }

    /**
     * @Then I am redirected to the reviews page of the movie with all the reviews associated to the movie:num1
     */
     public function iAmRedirectedToTheReviewsPageOfTheMovieWithAllTheReviewsAssociatedToTheMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the reviews page of the movie with all the reviews associated to the movie:num1` is not defined");
     }

    /**
     * @Given I am on the profile page,
     */
     public function iAmOnTheProfilePage3()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the profile page,` is not defined");
     }

    /**
     * @When I click on :arg1 in the navigation bar
     */
     public function iClickOnInTheNavigationBar($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on :arg1 in the navigation bar` is not defined");
     }

    /**
     * @Then I am redirected to the reviews history page with all the reviews associated with the user ID of :arg1
     */
     public function iAmRedirectedToTheReviewsHistoryPageWithAllTheReviewsAssociatedWithTheUserIDOf($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the reviews history page with all the reviews associated with the user ID of :arg1` is not defined");
     }

    /**
     * @Given I am logged into “Demo User”
     */
     public function iAmLoggedIntoDemoUser()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into “Demo User”` is not defined");
     }

    /**
     * @Given I am on the reviews history page for my profile
     */
     public function iAmOnTheReviewsHistoryPageForMyProfile()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the reviews history page for my profile` is not defined");
     }

    /**
     * @Given the title of the review is “Good Movie!”
     */
     public function theTitleOfTheReviewIsGoodMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the title of the review is “Good Movie!”` is not defined");
     }

    /**
     * @Given the message is “hello”,
     */
     public function theMessageIshello()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the message is “hello”,` is not defined");
     }

    /**
     * @When I edit the review to say “changed”
     */
     public function iEditTheReviewToSaychanged()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I edit the review to say “changed”` is not defined");
     }

    /**
     * @When click Submit the review
     */
     public function clickSubmitTheReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `click Submit the review` is not defined");
     }

    /**
     * @Then my review with title “Good Movie”
     */
     public function myReviewWithTitleGoodMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `my review with title “Good Movie”` is not defined");
     }

    /**
     * @Then message “hello” is changed in the database to have the message as “changed”
     */
     public function messagehelloIsChangedInTheDatabaseToHaveTheMessageAschanged()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `message “hello” is changed in the database to have the message as “changed”` is not defined");
     }

    /**
     * @Then I should be redirected to the reviews history page:num1
     */
     public function iShouldBeRedirectedToTheReviewsHistoryPage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the reviews history page:num1` is not defined");
     }

    /**
     * @Given I am on the Home page
     */
     public function iAmOnTheHomePage2()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Home page` is not defined");
     }

    /**
     * @When I click on About us in the navigation bar
     */
     public function iClickOnAboutUsInTheNavigationBar()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on About us in the navigation bar` is not defined");
     }

    /**
     * @Then I am redirected to the about us page
     */
     public function iAmRedirectedToTheAboutUsPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the about us page` is not defined");
     }

    /**
     * @Then the email displayed is :arg1
     */
     public function theEmailDisplayedIs($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the email displayed is :arg1` is not defined");
     }

    /**
     * @Given I am logged into the account User:num1
     */
     public function iAmLoggedIntoTheAccountUser($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am logged into the account User:num1` is not defined");
     }

    /**
     * @Given I am on the reviews history page
     */
     public function iAmOnTheReviewsHistoryPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the reviews history page` is not defined");
     }

    /**
     * @When I click on the delete button for the review for Movie:num1 with the title “Excellent Movie”,
     */
     public function iClickOnTheDeleteButtonForTheReviewForMovieWithTheTitleExcellentMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the delete button for the review for Movie:num1 with the title “Excellent Movie”,` is not defined");
     }

    /**
     * @Then the review for Movie:num1 with the title “Excellent Movie” is deleted from the database and my profile
     */
     public function theReviewForMovieWithTheTitleExcellentMovieIsDeletedFromTheDatabaseAndMyProfile($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review for Movie:num1 with the title “Excellent Movie” is deleted from the database and my profile` is not defined");
     }

    /**
     * @Then I am redirected to the reviews history page:num1
     */
     public function iAmRedirectedToTheReviewsHistoryPage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the reviews history page:num1` is not defined");
     }

    /**
     * @Given I am on the individual page for “Movie :num1”
     */
     public function iAmOnTheIndividualPageForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the individual page for “Movie :num1”` is not defined");
     }

    /**
     * @Given “Movie :num1” is found in my order history,
     */
     public function movieIsFoundInMyOrderHistory($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `“Movie :num1” is found in my order history,` is not defined");
     }

    /**
     * @When I click write a review for “Movie :num1”
     */
     public function iClickWriteAReviewForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click write a review for “Movie :num1”` is not defined");
     }

    /**
     * @Then I am redirected ti the create review page for Movie :num1
     */
     public function iAmRedirectedTiTheCreateReviewPageForMovie($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected ti the create review page for Movie :num1` is not defined");
     }

    /**
     * @Then the message I write is “Best movie I’ve seen in a long time!!!”,
     */
     public function theMessageIWriteIsBestMovieIveSeenInALongTime()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the message I write is “Best movie I’ve seen in a long time!!!”,` is not defined");
     }

    /**
     * @When I click on submit review
     */
     public function iClickOnSubmitReview()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on submit review` is not defined");
     }

    /**
     * @Then I am redirected to review submitted page
     */
     public function iAmRedirectedToReviewSubmittedPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to review submitted page` is not defined");
     }

    /**
     * @Then I see my review with the message “Best movie I’ve seen in a long time!!!”
     */
     public function iSeeMyReviewWithTheMessageBestMovieIveSeenInALongTime()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see my review with the message “Best movie I’ve seen in a long time!!!”` is not defined");
     }

    /**
     * @Then this review is added to the database
     */
     public function thisReviewIsAddedToTheDatabase()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `this review is added to the database` is not defined");
     }

    /**
     * @Then the message I write is “I really did not enjoy this movie”,
     */
     public function theMessageIWriteIsIReallyDidNotEnjoyThisMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the message I write is “I really did not enjoy this movie”,` is not defined");
     }

    /**
     * @Then I see my review with the message “I really did not enjoy this movie”
     */
     public function iSeeMyReviewWithTheMessageIReallyDidNotEnjoyThisMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I see my review with the message “I really did not enjoy this movie”` is not defined");
     }

    /**
     * @Given I am on the :arg1 page
     */
     public function iAmOnThePage($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the :arg1 page` is not defined");
     }

    /**
     * @Given the review title is “Best movie I’ve seen in a long time!!!”,
     */
     public function theReviewTitleIsBestMovieIveSeenInALongTime()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review title is “Best movie I’ve seen in a long time!!!”,` is not defined");
     }

    /**
     * @When I click on the approve button
     */
     public function iClickOnTheApproveButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the approve button` is not defined");
     }

    /**
     * @Then the review with description “Best movie I’ve seen in a long time!!!”, :arg1Admin Reviews index" page
     */
     public function theReviewWithDescriptionBestMovieIveSeenInALongTimeAdminReviewsIndexPage($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with description Best movie I’ve seen in a long time!!!, :arg1Admin Reviews index page` is not defined");
     }

    /**
     * @Then the review with description “Best movie I’ve seen in a long time!!!”,  gets added on the Reviews page for :arg1
     */
     public function theReviewWithDescriptionBestMovieIveSeenInALongTimeGetsAddedOnTheReviewsPageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step the review with description Best movie I’ve seen in a long time!!!,  gets added on the Reviews page for :arg1 is not defined");
     }

    /**
     * @Given I am on the Admin's Index Review page
     */
     public function iAmOnTheAdminsIndexReviewPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the Admin's Index Review page` is not defined");
     }

    /**
     * @When I click the reject button
     */
     public function iClickTheRejectButton()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click the reject button` is not defined");
     }

    /**
     * @Then the review with id :num1 is removed from the database
     */
     public function theReviewWithIdIsRemovedFromTheDatabase($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with id :num1 is removed from the database` is not defined");
     }

    /**
     * @Then I am redirected to the Admin's Index Review page
     */
     public function iAmRedirectedToTheAdminsIndexReviewPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the Admin's Index Review page` is not defined");
     }

    /**
     * @Given the review description is I really did not enjoy this movie”
     */
     public function theReviewDescriptionIsIReallyDidNotEnjoyThisMovie()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review description is I really did not enjoy this movie”` is not defined");
     }

    /**
     * @Then the review with description I really did not enjoy this movie” gets removed from the :arg1 page
     */
     public function theReviewWithDescriptionIReallyDidNotEnjoyThisMovieGetsRemovedFromThePage($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with description I really did not enjoy this movie” gets removed from the :arg1 page` is not defined");
     }

    /**
     * @Then the review with title I really did not enjoy this movie” gets removed from the database
     */
     public function theReviewWithTitleIReallyDidNotEnjoyThisMovieGetsRemovedFromTheDatabase()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the review with title I really did not enjoy this movie” gets removed from the database` is not defined");
     }

    /**
     * @Given I am on admin index movie page
     */
     public function iAmOnAdminIndexMoviePage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on admin index movie page` is not defined");
     }

    /**
     * @When I click on the cash icon associated with :arg1
     */
     public function iClickOnTheCashIconAssociatedWith($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the cash icon associated with :arg1` is not defined");
     }

    /**
     * @Then I should be redirected to the revenue page for :arg1
     */
     public function iShouldBeRedirectedToTheRevenuePageFor($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I should be redirected to the revenue page for :arg1` is not defined");
     }

    /**
     * @Then the total ticket revenue for this movie should be :arg1
     */
     public function theTotalTicketRevenueForThisMovieShouldBe($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the total ticket revenue for this movie should be :arg1` is not defined");
     }

    /**
     * @Then see “John Smith" as my name
     */
     public function seeJohnSmithAsMyName()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `see “John Smith as my name` is not defined");
     }

    /**
     * @Given I am on the purchase history page
     */
     public function iAmOnThePurchaseHistoryPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the purchase history page` is not defined");
     }

    /**
     * @When I click on the trash can button where the seats displayed are :num:num:num4:num2 and :num:num:num4:num4
     */
     public function iClickOnTheTrashCanButtonWhereTheSeatsDisplayedAreAnd($num1, $num2, $num3, $num4)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click on the trash can button where the seats displayed are :num:num:num4:num2 and :num:num:num4:num4` is not defined");
     }

    /**
     * @Then I am redirected to the delete Order page for this order
     */
     public function iAmRedirectedToTheDeleteOrderPageForThisOrder()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the delete Order page for this order` is not defined");
     }

    /**
     * @When I click delete
     */
     public function iClickDelete()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I click delete` is not defined");
     }

    /**
     * @Then I am redirected to my purchase history page
     */
     public function iAmRedirectedToMyPurchaseHistoryPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to my purchase history page` is not defined");
     }

    /**
     * @Then the order gets removed from my purchase history page
     */
     public function theOrderGetsRemovedFromMyPurchaseHistoryPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `the order gets removed from my purchase history page` is not defined");
     }
}