<?php declare(strict_types = 1);

namespace Src\User\Form\Container\BaseUserInfo;

class BaseUserInfoContainer extends \Nette\Forms\Container
{

	private const FIRST_NAME = 'firstName';
	private const LAST_NAME = 'lastName';
	private const EMAIL = 'email';

	public function __construct()
	{
		parent::__construct();

		$this->addText(self::FIRST_NAME, 'Jméno');
		$this->addText(self::LAST_NAME, 'Příjmení');
		$this->addText(self::EMAIL, 'Email');
	}


	public function getFirstName(): \Nette\Forms\Controls\TextInput
	{
		return $this->getComponent(self::FIRST_NAME);
	}


	public function getLastName(): \Nette\Forms\Controls\TextInput
	{
		return $this->getComponent(self::LAST_NAME);
	}


	public function getEmail(): \Nette\Forms\Controls\TextInput
	{
		return $this->getComponent(self::EMAIL);
	}


	public function getContainerValues(): BaseUserInfoValues
	{
		return new BaseUserInfoValues(
			$this->getFirstName()->getValue(),
			$this->getLastName()->getValue(),
			$this->getEmail()->getValue()
		);
	}
}
