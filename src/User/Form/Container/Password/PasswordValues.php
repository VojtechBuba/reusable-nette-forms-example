<?php declare(strict_types = 1);

namespace Src\User\Form\Container\Password;

final class PasswordValues
{

	/**
	 * @var string
	 */
	private $password;

	/**
	 * @var string
	 */
	private $passwordCheck;

	public function __construct(
 		string $password,
		string $passwordCheck
	)
	{
		$this->password = $password;
		$this->passwordCheck = $passwordCheck;
	}


	public function getPassword(): string
	{
		return $this->password;
	}


	public function getPasswordCheck(): string
	{
		return $this->passwordCheck;
	}

}
