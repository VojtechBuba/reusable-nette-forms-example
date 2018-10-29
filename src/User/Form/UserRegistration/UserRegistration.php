<?php declare(strict_types = 1);

namespace Src\User\Form\UserRegistration;

class UserRegistration extends \Nette\Application\UI\Form
{

	private const BASE_USER_INFO_CONTAINER = 'baseUserInfo';
	private const PASSWORD_CONTAINER = 'password';
	private const LOYALTY_CONTAINER = 'loaylty';
	private const BECOME_LOYALTY = 'becomeLoyalty';

	public function __construct(
		\Src\User\Form\Container\BaseUserInfo\BaseUserInfoContainer $baseUserInfoContainer,
		\Src\User\Form\Container\Password\PasswordContainer $passwordContainer,
		\Src\User\Form\Container\LoayltyUser\LoyaltyUserContainer $loyaltyUserContainer
	)
	{
		parent::__construct();
		$this->addComponent($baseUserInfoContainer, self::BASE_USER_INFO_CONTAINER);
		$this->addComponent($passwordContainer, self::PASSWORD_CONTAINER);
		$this->addCheckbox(self::BECOME_LOYALTY, 'Chci vstoupit do věrnostního klubu');
		$this->addComponent($loyaltyUserContainer, self::LOYALTY_CONTAINER);

		$this->getLoyaltyContainer()
			->getBirthDay()
			->addConditionOn($this->getBecomeLoayltyMember(), \Nette\Forms\Form::EQUAL, TRUE)
			->setRequired()
		;
		$this->getLoyaltyContainer()
			->getAddress()
			->addConditionOn($this->getBecomeLoayltyMember(), \Nette\Forms\Form::EQUAL, TRUE)
			->setRequired()
		;
		$this->getLoyaltyContainer()
			->getPostCode()
			->addConditionOn($this->getBecomeLoayltyMember(), \Nette\Forms\Form::EQUAL, TRUE)
			->setRequired()
		;
		$this->getLoyaltyContainer()
			->getCity()
			->addConditionOn($this->getBecomeLoayltyMember(), \Nette\Forms\Form::EQUAL, TRUE)
			->setRequired()
		;

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


	public function getBecomeLoayltyMember(): \Nette\Forms\Controls\Checkbox
	{
		return $this->getComponent(self::BECOME_LOYALTY);
	}


	public function getLoyaltyContainer(): \Src\User\Form\Container\LoayltyUser\LoyaltyUserContainer
	{
		return $this->getComponent(self::LOYALTY_CONTAINER);
	}


	public function getFormValues(): UserRegistrationValues
	{
		return new UserRegistrationValues(
			$this->getBaseUserInfoContainer()->getContainerValues(),
			$this->getPasswordContainer()->getContainerValues(),
			(bool) $this->getBecomeLoayltyMember()->getValue(),
			$this->getBecomeLoayltyMember()->getValue() ? $this->getLoyaltyContainer()->getContainerValues(): NULL
		);
	}
}
