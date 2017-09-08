<?php
namespace Streit\Seminar\Controller;

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
 * SeminarController
 */
class SeminarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * seminarRepository
     *
     * @var \Streit\Seminar\Domain\Repository\SeminarRepository
     * @inject
     */
    protected $seminarRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $seminars = $this->seminarRepository->findAll();
        $this->view->assign('seminars', $seminars);
    }

    /**
     * action show
     *
     * @param \Streit\Seminar\Domain\Model\Seminar $seminar
     * @return void
     */
    public function showAction(\Streit\Seminar\Domain\Model\Seminar $seminar)
    {
        $this->view->assign('seminar', $seminar);
    }
}
