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
	 * @var \Src\User\Form\Container\LoyaltyUser\LoyaltyUserValues
	 */
	private $loyaltyUserValues;

	public function __construct(
		\Src\User\Form\Container\BaseUserInfo\BaseUserInfoValues $baseUserInfoValues,
		\Src\User\Form\Container\Password\PasswordValues $passwordValues,
		\Src\User\Form\Container\LoyaltyUser\LoyaltyUserValues $loyaltyUserValues
	)
	{
		$this->baseUserInfoValues = $baseUserInfoValues;
		$this->passwordValues = $passwordValues;
		$this->loyaltyUserValues = $loyaltyUserValues;
	}


	public function getBaseUserInfoValues(): \Src\User\Form\Container\BaseUserInfo\BaseUserInfoValues
	{
		return $this->baseUserInfoValues;
	}


	public function getPasswordValues(): \Src\User\Form\Container\Password\PasswordValues
	{
		return $this->passwordValues;
	}


	public function getLoyaltyUserValues(): \Src\User\Form\Container\LoyaltyUser\LoyaltyUserValues
	{
		return $this->loyaltyUserValues;
	}

}
