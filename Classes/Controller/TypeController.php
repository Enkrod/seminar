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
 * TypeController
 */
class TypeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $types = $this->typeRepository->findAll();
        $this->view->assign('types', $types);
    }

    /**
     * action show
     *
     * @param \Streit\Seminar\Domain\Model\Type $type
     * @return void
     */
    public function showAction(\Streit\Seminar\Domain\Model\Type $type)
    {
        $this->view->assign('type', $type);
    }
}
