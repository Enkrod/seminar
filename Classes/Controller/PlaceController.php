<?php
namespace Streit\Seminar\Controller;

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
 * PlaceController
 */
class PlaceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $places = $this->placeRepository->findAll();
        $this->view->assign('places', $places);
    }

    /**
     * action show
     *
     * @param \Streit\Seminar\Domain\Model\Place $place
     * @return void
     */
    public function showAction(\Streit\Seminar\Domain\Model\Place $place)
    {
        $this->view->assign('place', $place);
    }
}
