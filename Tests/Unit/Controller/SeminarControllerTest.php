<?php
namespace Streit\Seminar\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Sebastian Wolfertz <S.Wolfertz@Streit-Online.de>
 */
class SeminarControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Streit\Seminar\Controller\SeminarController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Streit\Seminar\Controller\SeminarController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSeminarsFromRepositoryAndAssignsThemToView()
    {

        $allSeminars = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $seminarRepository = $this->getMockBuilder(\Streit\Seminar\Domain\Repository\SeminarRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $seminarRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSeminars));
        $this->inject($this->subject, 'seminarRepository', $seminarRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('seminars', $allSeminars);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSeminarToView()
    {
        $seminar = new \Streit\Seminar\Domain\Model\Seminar();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('seminar', $seminar);

        $this->subject->showAction($seminar);
    }
}
