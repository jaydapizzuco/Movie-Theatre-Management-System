<?php

declare(strict_types=1);

namespace Tests\Support;

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

	    /**
     * @Given I am on the login page
     */
     public function iAmOnTheLoginPage()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am on the login page` is not defined");
     }

    /**
     * @When I enter username admin
     */
     public function iEnterUsernameAdmin()
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter username admin` is not defined");
     }

    /**
     * @When password admin:num1:num2:num3
     */
     public function passwordAdmin($num1, $num2, $num3)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password admin:num1:num2:num3` is not defined");
     }

    /**
     * @Then I am redirected to the admin's profile page:num1
     */
     public function iAmRedirectedToTheAdminsProfilePage($num1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I am redirected to the admin's profile page:num1` is not defined");
     }
	 /**
     * @When I enter username :arg1
     */
     public function iEnterUsername($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `I enter username :arg1` is not defined");
     }

    /**
     * @When password :arg1
     */
     public function password($arg1)
     {
         throw new \PHPUnit\Framework\IncompleteTestError("Step `password :arg1` is not defined");
     }
}
