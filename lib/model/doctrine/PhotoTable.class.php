<?php

/**
 * PhotoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PhotoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PhotoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Photo');
    }

    public function getPhotosList ($galerie_id){
    	$q = $this->createQuery('g')
    		->select('g.*')
    		->where("g.galeriePhoto_id = ?", $galerie_id)
    		->orderBy('g.id ASC');

		return $q;
    }

    public function getPhotosPublicList ($galerie_id){
    	$q = $this->createQuery('g')
    		->select('g.*')
    		->where("g.galeriePhoto_id = ?", $galerie_id)
    		->andWhere("g.is_public = ?", 1)
    		->orderBy('g.id ASC');

		return $q;
    }
    public function deletePhotosFromGallery($galerie_id){
        $q = $this->createQuery('g')
          ->delete()
          ->where("g.galeriePhoto_id = ?", $galerie_id)
          ->execute();        
    }
}