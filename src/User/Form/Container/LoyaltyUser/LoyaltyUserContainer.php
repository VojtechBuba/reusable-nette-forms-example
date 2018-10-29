<?php declare(strict_types = 1);

namespace Src\User\Form\Container\LoyaltyUser;

class LoyaltyUserContainer extends \Nette\Forms\Container
{

	private const BIRTH_DAY = 'birthDay';
	private const LOAYLTY_AGREEMENT = 'loyaltyAgreement';
	private const ADDRESS = 'address';
	private const CITY = 'city';
	private const POST_CODE = 'postCode';

	public function __construct()
	{
		parent::__construct();
		$this->addText(self::BIRTH_DAY, 'Datum narození');
		$this->addCheckbox(self::LOAYLTY_AGREEMENT, 'Souhlas s podmínkami pro vstup do věrnostního klubu');
		$this->addText(self::ADDRESS, 'Ulice a číslo popisné');
		$this->addText(self::CITY, 'Město');
		$this->addText(self::POST_CODE, 'PSČ');
	}


	public function getBirthDay(): \Nette\Forms\Controls\TextInput
	{
		return $this->getComponent(self::BIRTH_DAY);
	}


	public function getLoyaltyAgreement(): \Nette\Forms\Controls\Checkbox
	{
		return $this->getComponent(self::LOAYLTY_AGREEMENT);
	}


	public function getAddress(): \Nette\Forms\Controls\TextInput
	{
		return $this->getComponent(self::ADDRESS);
	}


	public function getCity(): \Nette\Forms\Controls\TextInput
	{
		return $this->getComponent(self::CITY);
	}


	public function getPostCode(): \Nette\Forms\Controls\TextInput
	{
		return $this->getComponent(self::POST_CODE);
	}


	public function getContainerValues(): LoyaltyUserValues
	{
		return new LoyaltyUserValues(
			$this->getBirthDay()->getValue(),
			(bool) $this->getLoyaltyAgreement()->getValue(),
			$this->getAddress()->getValue(),
			$this->getCity()->getValue(),
			$this->getPostCode()->getValue()
		);
	}
}
