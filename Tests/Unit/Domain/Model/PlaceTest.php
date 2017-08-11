<?php
namespace Streit\Seminar\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Sebastian Wolfertz <S.Wolfertz@Streit-Online.de>
 */
class PlaceTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Streit\Seminar\Domain\Model\Place
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Streit\Seminar\Domain\Model\Place();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );

    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );

    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStreet()
        );

    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet()
    {
        $this->subject->setStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'street',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPostalCodeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPostalCode()
        );

    }

    /**
     * @test
     */
    public function setPostalCodeForStringSetsPostalCode()
    {
        $this->subject->setPostalCode('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'postalCode',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLocalityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocality()
        );

    }

    /**
     * @test
     */
    public function setLocalityForStringSetsLocality()
    {
        $this->subject->setLocality('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'locality',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );

    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );

    }
}
