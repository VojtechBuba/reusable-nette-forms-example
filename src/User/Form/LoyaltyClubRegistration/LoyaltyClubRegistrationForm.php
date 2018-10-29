<?php declare(strict_types = 1);

namespace Src\User\Form\LoayltyClubRegistration;

class LoyaltyClubRegistrationForm extends \Nette\Application\UI\Form
{

	private const BASE_USER_INFO_CONTAINER = 'baseUserInfo';
	private const PASSWORD_CONTAINER = 'password';
	private const LOYALTY_CONTAINER = 'loaylty';

	public function __construct(
		\Src\User\Form\Container\BaseUserInfo\BaseUserInfoContainer $baseUserInfoContainer,
		\Src\User\Form\Container\Password\PasswordContainer $passwordContainer,
		\Src\User\Form\Container\LoayltyUser\LoyaltyUserContainer $loyaltyUserContainer

	)
	{
		parent::__construct();
		$this->addComponent($baseUserInfoContainer, self::BASE_USER_INFO_CONTAINER);
		$this->addComponent($passwordContainer, self::PASSWORD_CONTAINER);
		$this->addComponent($loyaltyUserContainer, self::LOYALTY_CONTAINER);
		$this->addSubmit('submit', "Registrovat");
	}


	public function getBaseUserInfoContainer(): \Src\User\Form\Container\BaseUserInfo\BaseUserInfoContainer
	{
		return $this->getComponent(self::BASE_USER_INFO_CONTAINER);
	}


	public function getPasswordContainer(): \Src\User\Form\Container\Password\PasswordContainer
	{
		return $this->getComponent(self::PASSWORD_CONTAINER);
	}


	public function getLoyaltyContainer(): \Src\User\Form\Container\LoayltyUser\LoyaltyUserContainer
	{
		return $this->getComponent(self::LOYALTY_CONTAINER);
	}


	public function getFormValues(): LoyaltyClubRegistrationValues
	{
		return new LoyaltyClubRegistrationValues(
			$this->getBaseUserInfoContainer()->getContainerValues(),
			$this->getPasswordContainer()->getContainerValues(),
			$this->getLoyaltyContainer()->getContainerValues()
		);
	}
}
