<?php
namespace Streit\Seminar\Domain\Model;

/***
 *
 * This file is part of the "Seminars" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Sebastian Wolfertz <S.Wolfertz@Streit-Online.de>, Streit GmbH
 *
 ***/

/**
 * Event
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * date
	 *
	 * @var int
	 */
	protected $date = null;


	/**
	 * price
	 *
	 * @var string
	 */
	protected $price = '';

	/**
	 * amount
	 *
	 * @var string
	 */
	protected $amount = '';

	/**
	 * location
	 *
	 * @var \Streit\Seminar\Domain\Model\Location
	 */
	protected $location = null;


	/**
	 * series
	 *
	 * @var \Streit\Seminar\Domain\Model\Series
	 */
	protected $series = null;


	/**
	 * comment
	 *
	 * @var string
	 */
	protected $comment = '';
	
	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 *
	 * @return void
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}


	/**
	 * Returns the comment
	 *
	 * @return string $comment
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * Sets the comment
	 *
	 * @param string $comment
	 *
	 * @return void
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;
	}



	/**
	 * Returns the date
	 *
	 * @return int $date
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * Sets the date
	 *
	 * @param int $date
	 *
	 * @return void
	 */
	public function setDate($date)
	{
		$this->date = $date;
	}



	/**
	 * Returns the price
	 *
	 * @return string $price
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * Sets the price
	 *
	 * @param string $price
	 *
	 * @return void
	 */
	public function setPrice($price)
	{
		$this->price = $price;
	}

	/**
	 * Returns the amount
	 *
	 * @return string $amount
	 */
	public function getAmount()
	{
		return $this->amount;
	}

	/**
	 * Sets the amount
	 *
	 * @param string $amount
	 *
	 * @return void
	 */
	public function setAmount($amount)
	{
		$this->amount = $amount;
	}

	/**
	 * Returns the location
	 *
	 * @return \Streit\Seminar\Domain\Model\Location $location
	 */
	public function getLocation()
	{
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param \Streit\Seminar\Domain\Model\Location $location
	 *
	 * @return void
	 */
	public function setLocation(\Streit\Seminar\Domain\Model\Location $location)
	{
		$this->location = $location;
	}

	/**
	 * Returns the series
	 *
	 * @return \Streit\Seminar\Domain\Model\Series $series
	 */
	public function getSeries()
	{
		return $this->series;
	}
}
