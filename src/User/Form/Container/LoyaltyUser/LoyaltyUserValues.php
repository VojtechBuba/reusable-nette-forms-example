<?php declare(strict_types = 1);

namespace Src\User\Form\Container\LoyaltyUser;

final class LoyaltyUserValues
{

	/**
	 * @var string
	 */
	private $birthdate;

	/**
	 * @var bool
	 */
	private $loyaltyAgrement;

	/**
	 * @var string
	 */
	private $address;

	/**
	 * @var string
	 */
	private $city;

	/**
	 * @var string
	 */
	private $postCode;

	public function __construct(
		string $birthdate,
		bool $loyaltyAgrement,
		string $address,
		string $city,
		string $postCode
	)
	{
		$this->birthdate = $birthdate;
		$this->loyaltyAgrement = $loyaltyAgrement;
		$this->address = $address;
		$this->city = $city;
		$this->postCode = $postCode;
	}


	public function getBirthdate(): string
	{
		return $this->birthdate;
	}


	public function isLoyaltyAgrement(): bool
	{
		return $this->loyaltyAgrement;
	}


	public function getAddress(): string
	{
		return $this->address;
	}


	public function getCity(): string
	{
		return $this->city;
	}


	public function getPostCode(): string
	{
		return $this->postCode;
	}

}
