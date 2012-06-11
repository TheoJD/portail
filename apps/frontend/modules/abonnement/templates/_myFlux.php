<?php use_helper('Thumb') ?>
<div id="my_flux">
  <h1>Mon Flux</h1>
  <?php if($abonnements && $abonnements->count() > 0): ?>
    <?php foreach ($abonnements as $abonnement):?>
     <div class="all_abonnements">
     <b>  <a href="<?php echo url_for('article/show?id='.$abonnement['id']) ?>"><?php echo $abonnement['assoName'].' : '.$abonnement['name'] ?></b>
        <?php echo $abonnement['summary'] ?>
        <div class="barre"> </div>
   </div>
  <div class="events_abonnements">
    <?php if($abonnement['article'] == 'event'): ?>   
     <b>  <a href="<?php echo url_for('article/show?id='.$abonnement['id']) ?>"><?php echo $abonnement['assoName'].' : '.$abonnement['name'] ?></b>
        <?php echo $abonnement['summary'] ?>
        <div class="barre"> </div>
     <?php endif; ?>  
     </div> 
     
       <div class="articles_abonnements">
    <?php if($abonnement['article'] == 'article'): ?>   
     <b>  <a href="<?php echo url_for('article/show?id='.$abonnement['id']) ?>"><?php echo $abonnement['assoName'].' : '.$abonnement['name'] ?></b>
        <?php echo $abonnement['summary'] ?>
        <div class="barre"> </div>
     <?php endif; ?>  
     </div> 
    <?php endforeach; ?>
  <?php else: ?>
    Vous ne suivez aucune association.
  <?php endif; ?>
</div>

