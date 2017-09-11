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
     * @var string
     */
    protected $stdPrice = 0.0;

    /**
     * stdAmount
     *
     * @var string
     */
    protected $stdAmount = '';

	/**
	 * stdLocation
	 *
	 * @var \Streit\Seminar\Domain\Model\Location
	 */
	protected $stdLocation = null;

	/**
	 * form
	 *
	 * @var \Streit\Seminar\Domain\Model\Form
	 */
	protected $form = null;

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
     * series
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Streit\Seminar\Domain\Model\Series>
     * @cascade remove
     */
    protected $series = null;


	/**
	 * contents
	 *
	 * @var string
	 */
	protected $contents = '';

	/**
	 * methods
	 *
	 * @var string
	 */
	protected $methods = '';


	/**
	 * instructor
	 *
	 * @var string
	 */
	protected $instructor = '';

	/**
	 * audience
	 *
	 * @var string
	 */
	protected $audience = '';

	/**
	 * educationalCredentialAwarded
	 *
	 * @var string
	 */
	protected $educationalCredentialAwarded = '';





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
        $this->series = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * @return string $stdPrice
     */
    public function getStdPrice()
    {
        return $this->stdPrice;
    }

    /**
     * Sets the stdPrice
     *
     * @param string $stdPrice
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
     * Adds a Series
     *
     * @param \Streit\Seminar\Domain\Model\Series $series
     * @return void
     */
    public function addSeries(\Streit\Seminar\Domain\Model\Series $series)
    {
        $this->series->attach($series);
    }

    /**
     * Removes a Series
     *
     * @param \Streit\Seminar\Domain\Model\Series $seriesToRemove The Series to be removed
     * @return void
     */
    public function removeSeries(\Streit\Seminar\Domain\Model\Series $seriesToRemove)
    {
        $this->series->detach($seriesToRemove);
    }

    /**
     * Returns the series
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Streit\Seminar\Domain\Model\Series> $series
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Sets the series
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Streit\Seminar\Domain\Model\Series> $series
     * @return void
     */
    public function setSeries(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $series)
    {
        $this->series = $series;
    }

    /**
     * Returns the stdLocation
     *
     * @return \Streit\Seminar\Domain\Model\Location $stdLocation
     */
    public function getStdLocation()
    {
        return $this->stdLocation;
    }

    /**
     * Sets the stdLocation
     *
     * @param \Streit\Seminar\Domain\Model\Location $stdLocation
     * @return void
     */
    public function setStdLocation(\Streit\Seminar\Domain\Model\Location $stdLocation)
    {
        $this->stdLocation = $stdLocation;
    }
	/**
	 * Returns the form
	 *
	 * @return \Streit\Seminar\Domain\Model\Form $form
	 */
	public function getForm()
	{
		return $this->form;
	}

	/**
	 * Sets the form
	 *
	 * @param \Streit\Seminar\Domain\Model\Form $form
	 * @return void
	 */
	public function setForm(\Streit\Seminar\Domain\Model\Form $form)
	{
		$this->form = $form;
	}



	/**
	 * Returns the contents
	 *
	 * @return string $contents
	 */
	public function getContents()
	{
		return $this->contents;
	}

	/**
	 * Sets the contents
	 *
	 * @param string $contents
	 * @return void
	 */
	public function setContents($contents)
	{
		$this->contents = $contents;
	}



	/**
	 * Returns the methods
	 *
	 * @return string $methods
	 */
	public function getMethods()
	{
		return $this->methods;
	}

	/**
	 * Sets the methods
	 *
	 * @param string $methods
	 * @return void
	 */
	public function setMethods($methods)
	{
		$this->methods = $methods;
	}



	/**
	 * Returns the instructor
	 *
	 * @return string $instructor
	 */
	public function getInstructor()
	{
		return $this->instructor;
	}

	/**
	 * Sets the instructor
	 *
	 * @param string $instructor
	 * @return void
	 */
	public function setInstructor($instructor)
	{
		$this->instructor = $instructor;
	}



	/**
	 * Returns the audience
	 *
	 * @return string $audience
	 */
	public function getAudience()
	{
		return $this->audience;
	}

	/**
	 * Sets the audience
	 *
	 * @param string $audience
	 * @return void
	 */
	public function setAudience($audience)
	{
		$this->audience = $audience;
	}


	/**
	 * Returns the educationalCredentialAwarded
	 *
	 * @return string $educationalCredentialAwarded
	 */
	public function getEducationalCredentialAwarded()
	{
		return $this->educationalCredentialAwarded;
	}

	/**
	 * Sets the educationalCredentialAwarded
	 *
	 * @param string $educationalCredentialAwarded
	 * @return void
	 */
	public function setEducationalCredentialAwarded($educationalCredentialAwarded)
	{
		$this->educationalCredentialAwarded = $educationalCredentialAwarded;
	}


}
