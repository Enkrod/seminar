<?php
namespace Streit\Seminar\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Sebastian Wolfertz <S.Wolfertz@Streit-Online.de>
 */
class EventTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Streit\Seminar\Domain\Model\Event
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Streit\Seminar\Domain\Model\Event();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );

    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );

    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getAmountReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAmount()
        );

    }

    /**
     * @test
     */
    public function setAmountForStringSetsAmount()
    {
        $this->subject->setAmount('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'amount',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForPlace()
    {
        self::assertEquals(
            null,
            $this->subject->getPlace()
        );

    }

    /**
     * @test
     */
    public function setPlaceForPlaceSetsPlace()
    {
        $placeFixture = new \Streit\Seminar\Domain\Model\Place();
        $this->subject->setPlace($placeFixture);

        self::assertAttributeEquals(
            $placeFixture,
            'place',
            $this->subject
        );

    }
}
