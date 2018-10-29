<?php declare(strict_types = 1);

namespace Src\User\Form\LoayltyClubRegistration;

class LoyaltyClubRegistrationFormFactory
{
	/**
	 * @var \Src\User\Form\Container\BaseUserInfo\RegistrationUserInfoContainerFactory
	 */
	private $registrationUserInfoContainerFactory;

	/**
	 * @var \Src\User\Form\Container\LoyaltyUser\RequiredLoyaltyUserContainerFactory
	 */
	private $requiredLoyaltyUserContainerFactory;

	public function __construct(
		\Src\User\Form\Container\BaseUserInfo\RegistrationUserInfoContainerFactory $registrationUserInfoContainerFactory,
		\Src\User\Form\Container\LoyaltyUser\RequiredLoyaltyUserContainerFactory $requiredLoyaltyUserContainerFactory
	)
	{
		$this->registrationUserInfoContainerFactory = $registrationUserInfoContainerFactory;
		$this->requiredLoyaltyUserContainerFactory = $requiredLoyaltyUserContainerFactory;
	}


	public function create(): LoyaltyClubRegistrationForm
	{
		$form = new LoyaltyClubRegistrationForm(
			$this->registrationUserInfoContainerFactory->create(),
			new \Src\User\Form\Container\Password\PasswordContainer(),
			$this->requiredLoyaltyUserContainerFactory->create()
		);

		return $form;
	}
}
