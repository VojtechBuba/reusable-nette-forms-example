<?php declare(strict_types = 1);

namespace App\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{

	/**
	 * @var \Src\User\Form\UserRegistration\UserRegistrationFormFactory
	 */
	private $userRegistrationFormFactory;

	/**
	 * @var \Src\User\Form\LoayltyClubRegistration\LoyaltyClubRegistrationFormFactory
	 */
	private $loyaltyClubRegistrationFormFactory;

	public function __construct(
		\Src\User\Form\UserRegistration\UserRegistrationFormFactory $userRegistrationFormFactory,
		\Src\User\Form\LoayltyClubRegistration\LoyaltyClubRegistrationFormFactory $loyaltyClubRegistrationFormFactory
	)
	{
		parent::__construct();
		$this->userRegistrationFormFactory = $userRegistrationFormFactory;
		$this->loyaltyClubRegistrationFormFactory = $loyaltyClubRegistrationFormFactory;
	}


	public function createComponentRegistrationForm(): \Src\User\Form\UserRegistration\UserRegistration
	{
		return $this->userRegistrationFormFactory->create();
	}


	public function createComponentLoyaltyClubRegistration(): \Src\User\Form\LoayltyClubRegistration\LoyaltyClubRegistrationForm
	{
		return $this->loyaltyClubRegistrationFormFactory->create();
	}
}
