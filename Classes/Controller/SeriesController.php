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
 * SeriesController
 */
class SeriesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * seriesRepository
	 *
	 * @var \Streit\Seminar\Domain\Repository\SeriesRepository
	 * @inject
	 */
	protected $seriesRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $series = $this->seriesRepository->findAll();
        $this->view->assign('series', $series);
    }
}
