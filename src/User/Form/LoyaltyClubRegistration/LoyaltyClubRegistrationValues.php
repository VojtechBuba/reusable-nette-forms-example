<?php declare(strict_types = 1);

namespace Src\User\Form\LoayltyClubRegistration;

final class LoyaltyClubRegistrationValues
{

	/**
	 * @var \Src\User\Form\Container\BaseUserInfo\BaseUserInfoValues
	 */
	private $baseUserInfoValues;

	/**
	 * @var \Src\User\Form\Container\Password\PasswordValues
	 */
	private $passwordValues;

	/**
	 * @var LoyaltyClubRegistrationValues
	 */
	private $loayltyClubRegistrationValues;

	public function __construct(
		\Src\User\Form\Container\BaseUserInfo\BaseUserInfoValues $baseUserInfoValues,
		\Src\User\Form\Container\Password\PasswordValues $passwordValues,
		LoyaltyClubRegistrationValues $loayltyClubRegistrationValues
	)
	{
		$this->baseUserInfoValues = $baseUserInfoValues;
		$this->passwordValues = $passwordValues;
		$this->loayltyClubRegistrationValues = $loayltyClubRegistrationValues;
	}


	public function getBaseUserInfoValues(): \Src\User\Form\Container\BaseUserInfo\BaseUserInfoValues
	{
		return $this->baseUserInfoValues;
	}


	public function getPasswordValues(): \Src\User\Form\Container\Password\PasswordValues
	{
		return $this->passwordValues;
	}


	public function getLoayltyClubRegistrationValues(): LoyaltyClubRegistrationValues
	{
		return $this->loayltyClubRegistrationValues;
	}

}
