<?php declare(strict_types = 1);

namespace Src\User\Form\Container\Password;

class PasswordContainer extends \Nette\Forms\Container
{

	private const PASSWORD = 'password';
	private const PASSWORD_CHECK = 'passwordCheck';

	public function __construct()
	{
		parent::__construct();
		$this
			->addPassword(self::PASSWORD, "Heslo")
			->setRequired(TRUE)
			->addRule(\Nette\Forms\Form::MIN_LENGTH, 'Heslo musí mít alespoň %d znaků', 5)
		;
		$this
			->addPassword(self::PASSWORD_CHECK, "Heslo pro kontrolu")
			->setRequired(TRUE)
			->addRule(
				\Nette\Forms\Form::EQUAL,
				'Hesla nejsou stejná',
				$this->getPassword()
			)
		;
	}


	public function getPassword(): \Nette\Forms\Controls\TextInput
	{
		return $this->getComponent(self::PASSWORD);
	}


	public function getPasswordCheck(): \Nette\Forms\Controls\TextInput
	{
		return $this->getComponent(self::PASSWORD_CHECK);
	}


	public function getContainerValues(): PasswordValues
	{
		return new PasswordValues(
			$this->getPassword()->getValue(),
			$this->getPasswordCheck()->getValue()
		);
	}
}
