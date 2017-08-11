<?php
namespace Streit\Seminar\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Sebastian Wolfertz <S.Wolfertz@Streit-Online.de>
 */
class SeminarTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Streit\Seminar\Domain\Model\Seminar
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Streit\Seminar\Domain\Model\Seminar();
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
    public function getSubtitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubtitle()
        );

    }

    /**
     * @test
     */
    public function setSubtitleForStringSetsSubtitle()
    {
        $this->subject->setSubtitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subtitle',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTeaserReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTeaser()
        );

    }

    /**
     * @test
     */
    public function setTeaserForStringSetsTeaser()
    {
        $this->subject->setTeaser('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'teaser',
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

    /**
     * @test
     */
    public function getStdPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getStdPrice()
        );

    }

    /**
     * @test
     */
    public function setStdPriceForFloatSetsStdPrice()
    {
        $this->subject->setStdPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'stdPrice',
            $this->subject,
            '',
            0.000000001
        );

    }

    /**
     * @test
     */
    public function getStdAmountReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStdAmount()
        );

    }

    /**
     * @test
     */
    public function setStdAmountForStringSetsStdAmount()
    {
        $this->subject->setStdAmount('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'stdAmount',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForType()
    {
        self::assertEquals(
            null,
            $this->subject->getType()
        );

    }

    /**
     * @test
     */
    public function setTypeForTypeSetsType()
    {
        $typeFixture = new \Streit\Seminar\Domain\Model\Type();
        $this->subject->setType($typeFixture);

        self::assertAttributeEquals(
            $typeFixture,
            'type',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getSectionReturnsInitialValueForSection()
    {
        self::assertEquals(
            null,
            $this->subject->getSection()
        );

    }

    /**
     * @test
     */
    public function setSectionForSectionSetsSection()
    {
        $sectionFixture = new \Streit\Seminar\Domain\Model\Section();
        $this->subject->setSection($sectionFixture);

        self::assertAttributeEquals(
            $sectionFixture,
            'section',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory()
    {
        self::assertEquals(
            null,
            $this->subject->getCategory()
        );

    }

    /**
     * @test
     */
    public function setCategoryForCategorySetsCategory()
    {
        $categoryFixture = new \Streit\Seminar\Domain\Model\Category();
        $this->subject->setCategory($categoryFixture);

        self::assertAttributeEquals(
            $categoryFixture,
            'category',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEventsReturnsInitialValueForEvent()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEvents()
        );

    }

    /**
     * @test
     */
    public function setEventsForObjectStorageContainingEventSetsEvents()
    {
        $event = new \Streit\Seminar\Domain\Model\Event();
        $objectStorageHoldingExactlyOneEvents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEvents->attach($event);
        $this->subject->setEvents($objectStorageHoldingExactlyOneEvents);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEvents,
            'events',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addEventToObjectStorageHoldingEvents()
    {
        $event = new \Streit\Seminar\Domain\Model\Event();
        $eventsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $eventsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($event));
        $this->inject($this->subject, 'events', $eventsObjectStorageMock);

        $this->subject->addEvent($event);
    }

    /**
     * @test
     */
    public function removeEventFromObjectStorageHoldingEvents()
    {
        $event = new \Streit\Seminar\Domain\Model\Event();
        $eventsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $eventsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($event));
        $this->inject($this->subject, 'events', $eventsObjectStorageMock);

        $this->subject->removeEvent($event);

    }

    /**
     * @test
     */
    public function getStdPlaceReturnsInitialValueForPlace()
    {
        self::assertEquals(
            null,
            $this->subject->getStdPlace()
        );

    }

    /**
     * @test
     */
    public function setStdPlaceForPlaceSetsStdPlace()
    {
        $stdPlaceFixture = new \Streit\Seminar\Domain\Model\Place();
        $this->subject->setStdPlace($stdPlaceFixture);

        self::assertAttributeEquals(
            $stdPlaceFixture,
            'stdPlace',
            $this->subject
        );

    }
}
