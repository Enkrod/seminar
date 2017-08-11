<?php
namespace Streit\Seminar\Domain\Model;

/***
 *
 * This file is part of the "Seminars" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Sebastian Wolfertz &lt;S.Wolfertz@Streit-Online.de&gt;, Streit GmbH
 *
 ***/

/**
 * Seminar
 */
class Seminar extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * subtitle
     *
     * @var string
     */
    protected $subtitle = '';

    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * stdPrice
     *
     * @var float
     */
    protected $stdPrice = 0.0;

    /**
     * stdAmount
     *
     * @var string
     */
    protected $stdAmount = '';

    /**
     * type
     *
     * @var \Streit\Seminar\Domain\Model\Type
     */
    protected $type = null;

    /**
     * section
     *
     * @var \Streit\Seminar\Domain\Model\Section
     */
    protected $section = null;

    /**
     * category
     *
     * @var \Streit\Seminar\Domain\Model\Category
     */
    protected $category = null;

    /**
     * events
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Streit\Seminar\Domain\Model\Event>
     * @cascade remove
     */
    protected $events = null;

    /**
     * stdPlace
     *
     * @var \Streit\Seminar\Domain\Model\Place
     */
    protected $stdPlace = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->events = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

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
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the subtitle
     *
     * @return string $subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets the subtitle
     *
     * @param string $subtitle
     * @return void
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Returns the teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the stdPrice
     *
     * @return float $stdPrice
     */
    public function getStdPrice()
    {
        return $this->stdPrice;
    }

    /**
     * Sets the stdPrice
     *
     * @param float $stdPrice
     * @return void
     */
    public function setStdPrice($stdPrice)
    {
        $this->stdPrice = $stdPrice;
    }

    /**
     * Returns the stdAmount
     *
     * @return string $stdAmount
     */
    public function getStdAmount()
    {
        return $this->stdAmount;
    }

    /**
     * Sets the stdAmount
     *
     * @param string $stdAmount
     * @return void
     */
    public function setStdAmount($stdAmount)
    {
        $this->stdAmount = $stdAmount;
    }

    /**
     * Returns the type
     *
     * @return \Streit\Seminar\Domain\Model\Type $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \Streit\Seminar\Domain\Model\Type $type
     * @return void
     */
    public function setType(\Streit\Seminar\Domain\Model\Type $type)
    {
        $this->type = $type;
    }

    /**
     * Returns the section
     *
     * @return \Streit\Seminar\Domain\Model\Section $section
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Sets the section
     *
     * @param \Streit\Seminar\Domain\Model\Section $section
     * @return void
     */
    public function setSection(\Streit\Seminar\Domain\Model\Section $section)
    {
        $this->section = $section;
    }

    /**
     * Returns the category
     *
     * @return \Streit\Seminar\Domain\Model\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \Streit\Seminar\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\Streit\Seminar\Domain\Model\Category $category)
    {
        $this->category = $category;
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
     * Returns the events
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Streit\Seminar\Domain\Model\Event> $events
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets the events
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Streit\Seminar\Domain\Model\Event> $events
     * @return void
     */
    public function setEvents(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $events)
    {
        $this->events = $events;
    }

    /**
     * Returns the stdPlace
     *
     * @return \Streit\Seminar\Domain\Model\Place $stdPlace
     */
    public function getStdPlace()
    {
        return $this->stdPlace;
    }

    /**
     * Sets the stdPlace
     *
     * @param \Streit\Seminar\Domain\Model\Place $stdPlace
     * @return void
     */
    public function setStdPlace(\Streit\Seminar\Domain\Model\Place $stdPlace)
    {
        $this->stdPlace = $stdPlace;
    }
}
