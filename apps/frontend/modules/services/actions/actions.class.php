<?php

/**
 * services actions.
 *
 * @package    simde
 * @subpackage services
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class servicesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  public function executeShow(sfWebRequest $request){
      $this->services = ServiceTable::getInstance()->getServicesList()->execute();
  } 
  
   public function executeFollow(sfWebRequest $request)
  {
    $service = $this->getRoute()->getObject();
    if($this->getUser()->getGuardUser()->isFollowerService($service))
    {
      $this->getUser()->setFlash('error', 'Vous avez déjà mis en favori ce service.');
      $this->redirect('services/show');
    }
    $service->addFollower($this->getUser()->getGuardUser(), $service);
    $this->getUser()->setFlash('success', 'Vous avez maintenant ajouté ce service dans vos favoris.');
    $this->redirect('services/show');
  }

  public function executeUnfollow(sfWebRequest $request)
  {
    $service = $this->getRoute()->getObject();
    
    if(!$this->getUser()->getGuardUser()->isFollowerService($service))
    {
      $this->getUser()->setFlash('error', 'Vous n\'avez pas en favori ce service.');
      $this->redirect('services/show');
    }
    $service->removeFollower($this->getUser()->getGuardUser(), $service);
    $this->getUser()->setFlash('success', 'Vous n\'avez plus en favori ce service.');
    $this->redirect('services/show');
  }

}