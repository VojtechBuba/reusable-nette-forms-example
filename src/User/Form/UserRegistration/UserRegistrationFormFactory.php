<?php declare(strict_types = 1);

namespace Src\User\Form\UserRegistration;

class UserRegistrationFormFactory
{

	/**
	 * @var \Src\User\Form\Container\BaseUserInfo\RegistrationUserInfoContainerFactory
	 */
	private $registrationUserInfoContainerFactory;

	public function __construct(
		\Src\User\Form\Container\BaseUserInfo\RegistrationUserInfoContainerFactory $registrationUserInfoContainerFactory
	)
	{
		$this->registrationUserInfoContainerFactory = $registrationUserInfoContainerFactory;
	}


	public function create(): UserRegistration
	{
		return new UserRegistration(
			$this->registrationUserInfoContainerFactory->create(),
			new \Src\User\Form\Container\Password\PasswordContainer(),
			new \Src\User\Form\Container\LoyaltyUser\LoyaltyUserContainer()
		);
	}
}
