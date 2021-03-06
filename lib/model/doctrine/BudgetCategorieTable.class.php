<?php

/**
 * BudgetCategorieTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class BudgetCategorieTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object BudgetCategorieTable
     */

    public function getCategories($asso_id)
    {
      $q = $this->createQuery('q')
                ->where('q.asso_id = ?', $asso_id);
      return $q;
    }

    public function getActiveCategories($asso_id)
    {
      $q = $this->getCategories($asso_id)->andWhere('q.deleted_at IS NULL');
      return $q;
    }

    public static function getInstance()
    {
        return Doctrine_Core::getTable('BudgetCategorie');
    }

    public function getCategoriesForBudget($budget)
    {
      $q = $this->createQuery('q');
      // sous requête pour associer à chaque requête le total du montant de ses postes 
      $subq = $q->createSubquery()->select('SUM(BudgetPoste.prix_unitaire*BudgetPoste.nombre)')->from('BudgetPoste')
                ->where('BudgetPoste.budget_categorie_id=q.id')
                ->andWhere('BudgetPoste.budget_id=?', $budget->getPrimaryKey())
                ->andWhere('BudgetPoste.deleted_at IS NULL');
      // on sélectionne les budgets de l'asso
      $q->select('q.*, ('.$subq->getDql().') as MontantTotal')
          ->andWhere('q.asso_id = ?', $budget->getAssoId())
          ->andWhere('q.deleted_at IS NULL');
      return $q;
    }

    public function getAllForAsso($asso)
    {
        $q = $this->createQuery('q')->where('q.asso_id=?',$asso->getPrimaryKey())->andWhere('q.deleted_at IS NULL');
        return $q;
    }

}