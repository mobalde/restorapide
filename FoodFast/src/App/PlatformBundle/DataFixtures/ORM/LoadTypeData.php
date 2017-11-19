<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\PlatformBundle\Entity\type_produit;
use App\PlatformBundle\Entity\produit;

/**
 * Description of LoadTypeData
 * Cette class peuple la BD
 * @author balde
 */
class LoadTypeData implements FixtureInterface{
    public function load(ObjectManager $manager)
    {
        // Table produit (type_id, nom_produit, ingrediens, taille, prix)
        $produit = array(
	            array(2, 'Tex mex nuggetsx10', '', '', 7.5),
	            array(2, 'Tex mex wingsx10', "Jaune d''oeuf, lardons, Crème fraîche", '', 7.5),
	            array(2, 'Tex mex bouchees chevres', 'Crème fraîche, chèvre, parmesan, brie, bleu', '', 7.5),
	            array(2, 'Tex mex bouchees mozzarella', 'Crème fraîche, saumon fumé', '', 7.5),
	            array(9, 'Panizzas jambon', '', '', 6),
	            array(9, 'Panizzas 3fromages', '', '', 6),
	            array(9, 'Panizzas viande hachee', '', '', 6),
	            array(9, 'Panizzas thon', '', '', 6),
	            array(9, 'Panizzas poulet', '', '', 6),
	            array(3, 'Pates bolognaise', 'Sauce tomate, viande hachée', '', 6),
	            array(3, 'Pates carbonara', "Jaune d''oeuf, lardons, Crème fraîche", '', 6),
	            array(3, 'Pates 4fromage', 'Crème fraîche, chèvre, parmesan, brie, bleu', '', 6),
	            array(3, 'Pates saumon', 'Crème fraîche, saumon fumé', '', 6),
	            array(3, 'Pates orientale', 'Sauce tomate, harissa, merguez, oignons', '', 6),
	            array(4, 'Salades chevre chaud', 'salade, tomates, champignons, crottin de chèvre sur toasts', '', 6),
	            array(4, 'Salades nordique', 'salade, tomates cerises, saumon fumé, olives', '', 6),
	            array(4, 'Salades fermiere', 'salade, tomates cerises, pommes de terre, poulet', '', 7.5),
	            array(4, 'Salades vegetarienne', 'salade, tomates cerises, pommes de terre, poulet', '', 7.5),
	            array(4, 'Salades nicoise', 'salade, tomates cerises, pommes de terre, thon, oeuf, maïs, olives', '', 7.5),
	            array(5, 'Escalopes milanaise', 'escalope de dinde panée', '', 8.5),
	            array(5, 'Escalopes bolognaise', 'escalope de dinde, jambon, mozzarella, gratin´s;e au four', '', 9.5),
	            array(5, 'Escalopes normande', 'escalope de dinde, crême fraîche, champignons', '', 9.5),
	            array(5, 'Escalopes furantina', 'escalope de dinde, crême fraîche, épinards, mozzarella, gratins au four', '', 10.5),
	            array(6, 'Desserts brownie', '', '', 2.5),
	            array(6, 'Desserts tarte au citron', '', '', 2.5),
	            array(6, 'Desserts tarte aux pommes', '', '', 2.5),
	            array(6, 'Desserts tarte au normande', '', '', 2.5),
	            array(6, 'Desserts tiramisu', '', '', 2.5),
	            array(6, 'Desserts haggen dazs', '', '100ml', 3),
	            array(6, 'Desserts haggen dazs', '', '500ml', 6.5),
	            array(6, 'Desserts tarte du daim', '', '', 2.5),
	            array(8, 'Menu midis salade', '1 Salade au choix_+1 Boisson 33cl_+1 Dessert_*Sauf Glace', '', 8),
	            array(8, 'Menu midis pizza', '1 Pizza junior au choix_+1 Boisson 33cl_+1 Dessert_*Sauf Glace', '', 8),
	            array(8, 'Menu midis panini', '1 Panini au choix_+1 Boisson 33cl_+1 Dessert_/Sauf Glace', '', 8),
	            array(8, 'Menu midis tex mex', '8 Wings ou 8 Nuggets_+1 Boisson 33cl_+1 Dessert_*Sauf Glace', '', 8),
	            array(8, 'Menu midis pates', '1 Pâte au choix_+1 Boisson 33cl_+1 Dessert_*Sauf Glace', '', 8),
	            
        		array(1, 'Pizzas reine', 'Tomate, mozzarella, jambon, champignon', 'senior', 13),
	            array(1, 'Pizzas reine', 'Tomate, mozzarella, jambon, champignon', 'mega', 19),
	        	array(1, 'Pizzas reine', 'Tomate, mozzarella, jambon, champignon', 'junior',  8),
	            
        		array(1, 'Pizzas marguerita', 'Tomate, mozzarella, origan', 'junior', 7),
	            array(1, 'Pizzas marguerita', 'Tomate, mozzarella, origan', 'senior', 9.5),
	            array(1, 'Pizzas marguerita', 'Tomate, mozzarella, origan', 'mega', 14.5),
	            
	            array(1, 'Pizzas calzone', 'Tomate, mozzarella, oeuf, champignon, jambon ou viande hachée ou thon','senior', 13),
        		array(1, 'Pizzas calzone', 'Tomate, mozzarella, oeuf, champignon, jambon ou viande hachée ou thon', 'junior', 8),
	        	array(1, 'Pizzas calzone',  'Tomate, mozzarella, oeuf, champignon, jambon ou viande hachée ou thon', 'mega', 19.9),
	        		
	        	array(1, 'Pizzas vegetarienne', "Tomate, mozzarella, poivron, coeur d''artichouts, oignon, olive, champignon, tomate cerise", 'mega', 14.5),
	            array(1, 'Pizzas vegetarienne', "Tomate, mozzarella, poivron, coeur d''artichouts, oignon, olive, champignon, tomate cerise", 'senior',  9.5),
	            array(1, 'Pizzas vegetarienne', "Tomate, mozzarella, poivron, coeur d''artichouts, oignon, olive, champignon, tomate cerise", 'junior',  7),
	           
        		array(1, 'Pizzas printaniere', "Tomate, mozzarella, oignon, aubergine, tomate cerise, parmesan, huile d''olive, origan", 'mega',  20),
	            array(1, 'Pizzas printaniere', "Tomate, mozzarella, oignon, aubergine, tomate cerise, parmesan, huile d''olive, origan", 'senior', 13.5),
	            array(1, 'Pizzas printaniere', "Tomate, mozzarella, oignon, aubergine, tomate cerise, parmesan, huile d''olive, origan", 'junior', 8.5),
	            
        		array(1, 'Pizzas paysanne', 'Tomate, mozzarella, lardon, reblochon, oeuf', 'mega',20),
	            array(1, 'Pizzas paysanne', 'Tomate, mozzarella, lardon, reblochon, oeuf', 'senior', 13.5),
	            array(1, 'Pizzas paysanne', 'Tomate, mozzarella, lardon, reblochon, oeuf', 'junior', 8.5),
	            
        		array(1, 'Pizzas pecheur', 'Tomate, mozzarella, fruit de mer, sauce ail basilic', 'mega', 20),
	            array(1, 'Pizzas pecheur', 'Tomate, mozzarella, fruit de mer, sauce ail basilic', 'senior', 13.5),
	            array(1, 'Pizzas pecheur', 'Tomate, mozzarella, fruit de mer, sauce ail basilic', 'junior', 8.5),
	            
        		array(1, 'Pizzas 4saison', 'Tomate, mozzarella, jambon, artichauts, champignon, poivron, olive', 'mega', 20),
	            array(1, 'Pizzas 4saison', 'Tomate, mozzarella, jambon, artichauts, champignon, poivron, olive', 'senior', 13.5),
	            array(1, 'Pizzas 4saison', 'Tomate, mozzarella, jambon, artichauts, champignon, poivron, olive', 'junior', 8.5),
	            
        		array(1, 'Pizzas cheddar', 'Tomate, mozzarella, poulet, bacon, poivron, cheddar', 'mega', 21),
	            array(1, 'Pizzas cheddar', 'Tomate, mozzarella, poulet, bacon, poivron, cheddar', 'senior', 14.5),
	            array(1, 'Pizzas cheddar', 'Tomate, mozzarella, poulet, bacon, poivron, cheddar', 'junior', 9),
	            
        		array(1, 'Pizzas tonarella', 'Tomate, mozzarella, thon, oeuf, olive, origan, poivron', 'mega', 20),
	            array(1, 'Pizzas tonarella', 'Tomate, mozzarella, thon, oeuf, olive, origan, poivron', 'senior', 13.5),
	            array(1, 'Pizzas tonarella', 'Tomate, mozzarella, thon, oeuf, olive, origan, poivron', 'junior', 8.5),
	            
        		array(1, 'Pizzas casa', 'Tomate, mozzarella, oeuf, poulet, merguez, olive', 'mega', 20),
	            array(1, 'Pizzas casa', 'Tomate, mozzarella, oeuf, poulet, merguez, olive', 'senior', 13.5),
        		array(1, 'Pizzas casa', 'Tomate, mozzarella, oeuf, poulet, merguez, olive', 'junior', 8.5),
	            
        		array(1, 'Pizzas bolognaise', 'Tomate, mozzarella, viande hachée, poivron, pomme de terre, oignon', 'mega', 20),
	            array(1, 'Pizzas bolognaise', 'Tomate, mozzarella, viande hachée, poivron, pomme de terre, oignon', 'senior', 13.5),
	            array(1, 'Pizzas bolognaise', 'Tomate, mozzarella, viande hachée, poivron, pomme de terre, oignon', 'junior', 8.5),
	            
        		array(1, 'Pizzas spicy', 'Tomate, mozzarella, viande hachée, merguez, piment fort, poivron', 'mega', 20.5),
	            array(1, 'Pizzas spicy', 'Tomate, mozzarella, viande hachée, merguez, piment fort, poivron', 'senior', 14.5),
	            array(1, 'Pizzas spicy', 'Tomate, mozzarella, viande hachée, merguez, piment fort, poivron', 'junior', 9),
	            
        		array(1, 'Pizzas orientale', 'Tomate, mozzarella, poivron, double merguez, oignon, oeuf, olive', 'mega', 20),
	            array(1, 'Pizzas orientale', 'Tomate, mozzarella, poivron, double merguez, oignon, oeuf, olive', 'senior', 13.5),
	            array(1, 'Pizzas orientale', 'Tomate, mozzarella, poivron, double merguez, oignon, oeuf, olive', 'junior', 8.5),
	            
        		array(1, 'Pizzas napolitaine', 'Tomate, mozzarella, anchois, câpres, olive', 'mega', 19),
	            array(1, 'Pizzas napolitaine', 'Tomate, mozzarella, anchois, câpres, olive', 'senior', 13),
	            array(1, 'Pizzas napolitaine', 'Tomate, mozzarella, anchois, câpres, olive', 'junior', 8),
	            
        		array(1, 'Pizzas texas', 'Sauce barbecue; mozzarella, boeuf épicé, chorizo, oignon', 'mega', 21),
	            array(1, 'Pizzas texas', 'Sauce barbecue; mozzarella, boeuf épicé, chorizo, oignon', 'senior', 14.5),
	            array(1, 'Pizzas texas', 'Sauce barbecue; mozzarella, boeuf épicé, chorizo, oignon', 'junior', 9),
	            
        		array(1, 'Pizzas raclette', 'Crème fraîche, mozzarella, jambon, pomme de terre, raclette', 'mega', 21),
	            array(1, 'Pizzas raclette', 'Crème fraîche, mozzarella, jambon, pomme de terre, raclette', 'senior', 14.5),
	            array(1, 'Pizzas raclette', 'Crème fraîche, mozzarella, jambon, pomme de terre, raclette', 'junior', 9),
	            
        		array(1, 'Pizzas tartiflette', 'Crème fraîche, mozzarella, lardon, pomme de terre, reblochon', 'mega', 21),
	            array(1, 'Pizzas tartiflette', 'Crème fraîche, mozzarella, lardon, pomme de terre, reblochon', 'senior', 14.5),
	            array(1, 'Pizzas tartiflette', 'Crème fraîche, mozzarella, lardon, pomme de terre, reblochon', 'junior', 9),
	            
        		array(1, 'Pizzas boursin', 'Crème fraîche, mozzarella, viande hachée, pomme de terre, oignon, boursin', 'mega', 21),
	            array(1, 'Pizzas boursin', 'Crème fraîche, mozzarella, viande hachée, pomme de terre, oignon, boursin', 'senior', 14.5),
	            array(1, 'Pizzas boursin', 'Crème fraîche, mozzarella, viande hachée, pomme de terre, oignon, boursin', 'junior', 9),
	            
        		array(1, 'Pizzas fermiere', 'Crème fraîche, mozzarella, champignon, jambon, pomme de terre, oeuf', 'mega', 21),
	            array(1, 'Pizzas fermiere', 'Crème fraîche, mozzarella, champignon, jambon, pomme de terre, oeuf', 'senior', 14.5),
	            array(1, 'Pizzas fermiere', 'Crème fraîche, mozzarella, champignon, jambon, pomme de terre, oeuf', 'junior', 9),
	            
        		array(1, 'Pizzas venezia', 'Crème fraîche, mozzarella, saumon fum´ citron', 'mega', 21),
	            array(1, 'Pizzas venezia', 'Crème fraîche, mozzarella, saumon fum´ citron', 'senior', 14.5),
	            array(1, 'Pizzas venezia', 'Crème fraîche, mozzarella, saumon fum´ citron', 'junior', 9),
	            
        		array(1, 'Pizzas chevre miel', 'Crème fraîche, mozzarella, chevre, miel', 'mega', 21),
	            array(1, 'Pizzas chevre miel', 'Crème fraîche, mozzarella, chevre, miel', 'senior', 14.5),
        		array(1, 'Pizzas chevre miel', 'Crème fraîche, mozzarella, chevre, miel', 'junior', 9),
	            
        		array(1, 'Pizzas world', '', 'mega', 21),
        		array(1, 'Pizzas world', '', 'senior', 14.5),
        		array(1, 'Pizzas world', '', 'junior', 9),
	            
        		array(1, 'Pizzas campionne', 'Tomate, mozzarella, oeuf, champignon, viande hachée', 'mega', 19),
        		array(1, 'Pizzas campionne', 'Tomate, mozzarella, oeuf, champignon, viande hachée', 'senior', 13),
        		array(1, 'Pizzas campionne', 'Tomate, mozzarella, oeuf, champignon, viande hachée', 'junior',8),
	            
        		array(1, 'Pizzas 4fromage', 'Tomate, mozzarella, brie chevre, bleu', 'mega', 20),
        		array(1, 'Pizzas 4fromage', 'Tomate, mozzarella, brie chevre, bleu', 'senior', 13.5),
        		array(1, 'Pizzas 4fromage', 'Tomate, mozzarella, brie chevre, bleu', 'junior', 8.5),
	            
        		array(1, 'Pizzas 4jambon', 'Tomate, mozzarella, bacon, jambon, chorizo, lardon', 'mega', 20),
        		array(1, 'Pizzas 4jambon', 'Tomate, mozzarella, bacon, jambon, chorizo, lardon', 'senior', 13.5),
        		array(1, 'Pizzas 4jambon', 'Tomate, mozzarella, bacon, jambon, chorizo, lardon', 'junior', 8.5),
	            
        		array(1, 'Pizzas cannibal', 'Tomate, mozzarella, viande hachée, merguez, chorizo, jambon', 'mega', 20.5),
        		array(1, 'Pizzas cannibal', 'Tomate, mozzarella, viande hachée, merguez, chorizo, jambon', 'senior', 14.5),
        		array(1, 'Pizzas cannibal', 'Tomate, mozzarella, viande hachée, merguez, chorizo, jambon', 'junior', 9),
	            
        		array(1, 'Pizzas moussaka', 'Tomate, mozzarella, viande hachée, aubergine', 'mega', 20.5),
        		array(1, 'Pizzas moussaka', 'Tomate, mozzarella, viande hachée, aubergine', 'senior', 14.5),
        		array(1, 'Pizzas moussaka', 'Tomate, mozzarella, viande hachée, aubergine', 'junior', 9),
	            
        		array(1, 'Pizzas chicken', 'Crème fraîche, mozzarella, poulet, pomme de terre, oignon', 'mega', 21),
        		array(1, 'Pizzas chicken', 'Crème fraîche, mozzarella, poulet, pomme de terre, oignon', 'senior', 14.5),
        		array(1, 'Pizzas chicken', 'Crème fraîche, mozzarella, poulet, pomme de terre, oignon', 'junior', 9),
	            
        		array(1, 'Pizzas indienne', 'Crème fraîche, mozzarella, sauce curry, poulet, poivron, oignon', 'mega', 21),
        		array(1, 'Pizzas indienne', 'Crème fraîche, mozzarella, sauce curry, poulet, poivron, oignon', 'senior', 14.5),
        		array(1, 'Pizzas indienne', 'Crème fraîche, mozzarella, sauce curry, poulet, poivron, oignon', 'junior', 9),
        		
	        	array(7, 'Boisson fanta', '', '', 1.2),
	        	array(7, 'Boisson 7up', '', '', 1.2),
	        	array(7, 'Boisson coca_cherry', '', '', 1.2),
	        	array(7, 'Boisson fanta_15', '', '', 2.8),
	        	array(7, 'Boisson coca_15', '', '', 2.8),
	        	array(7, 'Boisson lipton', '', '', 1.2),
	        	array(7, 'Boisson oasis_tropical', '', '', 1.2),
	        	array(7, 'Boisson coca_zero', '', '', 1.2),
	        	array(7, 'Boisson cristalline_fraise_15', '', '', 2.8),
	        	array(7, 'Boisson cristalline_peche_15', '', '', 2.8),
	        	array(7, 'Boisson dada_lychee', '', '', 1.2),
	        	array(7, 'Boisson fanta_peche', '', '', 1.2),
	        	array(7, 'Boisson fanta_tropical', '', '', 1.2),
	        	array(7, 'Boisson dada_fraise', '', '', 1.2),
	        	array(7, 'Boisson dada_melon', '', '', 1.2),
	        	array(7, 'Boisson oasis_pomme_cassis', '', '', 1.2),
	        	array(7, 'Boisson dada_peche', '', '', 1.2)
        );
        
        // produit (type_id, nom_produit, ingrediens, taille, prix)
        $typeProduitInsert = array();
        $typeProd = '';
        foreach($produit as $value){
        	switch ($value[0]){
        		case 1:
        			$typeProd = 'pizzas';
        			break;
        		case 2:
        			$typeProd = 'tex mex';
        			break;
        		case 3:
        			$typeProd = 'pates';
        			break;
        		case 4:
        			$typeProd = 'salades';
        			break;
        		case 5:
        			$typeProd = 'escalopes';
        			break;
        		case 6:
        			$typeProd = 'desserts';
        			break;
        		case 7:
        			$typeProd = 'boissons';
        			break;
        		case 8:
        			$typeProd = 'menu midi';
        			break;
        		case 9:
        			$typeProd = 'panizzas';
        			break;
        	}
        	$produit = new produit();
        	if(array_key_exists($typeProd, $typeProduitInsert)){
        		$produit->setType($typeProduitInsert[$typeProd]);
        	}
        	else{
        		$type = new type_produit();
        		$type->setNomType($typeProd);
        		$manager->persist($type);
        		$manager->flush();
        		$typeProduitInsert[$typeProd] = $type;
        		$produit->setType($type);
        	}
        	$produit->setNomProduit($value[1]);
        	$produit->setIngrediens($value[2]);
        	$produit->setTaille($value[3]);
        	$produit->setPrix($value[4]);
        	
        	
        	$manager->persist($produit);
        }
        
        $manager->flush();
    }
}
