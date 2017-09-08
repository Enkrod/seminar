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
 * Series
 */
class Series extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
	/**
	 * seminar
	 *
	 * @var \Streit\Seminar\Domain\Model\Seminar
	 */
	protected $seminar = null;

	/**
	 * events
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Streit\Seminar\Domain\Model\Event>
	 * @cascade remove
	 */
	protected $events = null;

	/**
	 * registrationDate
	 *
	 * @var int
	 */
	protected $registrationDate = null;


	/**
	 * Returns the seminar
	 *
	 * @return \Streit\Seminar\Domain\Model\Seminar $seminar
	 */
	public function getSeminar()
	{
		return $this->seminar;
	}



	/**
	 * Adds a Event
	 *
	 * @param \Streit\Seminar\Domain\Model\Event $event
	 * @return void
	 */
	public function addEvent(\Streit\Seminar\Domain\Model\Event $event)
	{
		$this->events->attach($event);
	}

	/**
	 * Removes a Event
	 *
	 * @param \Streit\Seminar\Domain\Model\Event $eventToRemove The Event to be removed
	 * @return void
	 */
	public function removeEvent(\Streit\Seminar\Domain\Model\Event $eventToRemove)
	{
		$this->events->detach($eventToRemove);
	}

	/**
	 * Returns the event
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Streit\Seminar\Domain\Model\Event> $events
	 */
	public function getEvents()
	{
		return $this->events;
	}

	/**
	 * Sets the event
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Streit\Seminar\Domain\Model\Event> $event
	 * @return void
	 */
	public function setEvents(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $events)
	{
		$this->events = $events;
	}

	/**
	 * Returns the registrationDate
	 *
	 * @return int $registrationDate
	 */
	public function getRegistrationDate()
	{
		return $this->registrationDate;
	}

	/**
	 * Sets the registrationDate
	 *
	 * @param int $registrationDate
	 *
	 * @return void
	 */
	public function setRegistrationDate($registrationDate)
	{
		$this->registrationDate = $registrationDate;
	}
}
