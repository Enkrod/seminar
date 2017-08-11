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
 * Event
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * price
     *
     * @var float
     */
    protected $price = 0.0;

    /**
     * amount
     *
     * @var string
     */
    protected $amount = '';

    /**
     * place
     *
     * @var \Streit\Seminar\Domain\Model\Place
     */
    protected $place = null;

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     *
     * @param float $price
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
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Returns the place
     *
     * @return \Streit\Seminar\Domain\Model\Place $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     *
     * @param \Streit\Seminar\Domain\Model\Place $place
     * @return void
     */
    public function setPlace(\Streit\Seminar\Domain\Model\Place $place)
    {
        $this->place = $place;
    }
}
