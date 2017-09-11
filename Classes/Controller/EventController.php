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
 * EventController
 */
class EventController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * seminarRepository
	 *
	 * @var \Streit\Seminar\Domain\Repository\EventRepository
	 * @inject
	 */
	protected $eventRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $events = $this->eventRepository->findAll();
        $this->view->assign('events', $events);
    }
}
