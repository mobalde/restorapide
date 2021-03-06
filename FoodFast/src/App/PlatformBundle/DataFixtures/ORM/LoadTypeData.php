<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\PlatformBundle\Entity\type_produit;

/**
 * Description of LoadTypeData
 * Cette class peuple la BD
 * @author balde
 */
class LoadTypeData implements FixtureInterface{
    public function load(ObjectManager $manager)
    {
        // Table type_produit
        $produitsType = array(
            'pizzas',
            'tex mex',
            'pates',
            'salades',
            'escalopes',
            'desserts',
            'boissons',
            'menu midi',
            'panizzas'
            
        );
        foreach($produitsType as $value){
            $type = new type_produit();
            $type->setNomType($value);
            $manager->persist($type);
        }
        
        // Table produit (type_id, nom_produit, ingrediens, taille, prix)
        /*$produit = array(
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
            array(5, 'Escalopes', 'milanaise', '', 'escalope de dinde panée', 8.5),
            array(5, 'Escalopes', 'bolognaise', '', 'escalope de dinde, jambon, mozzarella, gratin´s;e au four', 9.5),
            array(5, 'Escalopes', 'normande', '', 'escalope de dinde, crême fraîche, champignons', 9.5),
            array(5, 'Escalopes', 'furantina', '', 'escalope de dinde, crême fraîche, épinards, mozzarella, gratin´s;e au four', 10.5),
            array(6, 'Desserts brownie', '', '', 2.5),
            array(6, 'Desserts tarte au citron', '', '', 2.5),
            array(6, 'Desserts tarte aux pommes', '', '', 2.5),
            array(6, 'Desserts tarte au normande', '', '', 2.5),
            array(6, 'Desserts tiramisu', '', '', 2.5),
            array(6, 'Desserts haggen dazs', '', '100ml', 3),
            array(6, 'Desserts haggen dazs', '', '500ml', 6.5),
            array(6, 'Desserts', 'tarte du daim', '', '', 2.5),
            array(38, 'Menu midis', 'salade', '', '1 Salade au choix_+1 Boisson 33cl_+1 Dessert_*Sauf Glace', 8),
            array(39, 'Menu midis', 'pizza', '', '1 Pizza junior au choix_+1 Boisson 33cl_+1 Dessert_*Sauf Glace', 8),
            array(40, 'Menu midis', 'panini', '', '1 Panini au choix_+1 Boisson 33cl_+1 Dessert_/Sauf Glace', 8),
            array(41, 'Menu midis', 'tex mex', '', '8 Wings ou 8 Nuggets_+1 Boisson 33cl_+1 Dessert_*Sauf Glace', 8),
            array(42, 'Menu midis', 'pates', '', '1 Pâte au choix_+1 Boisson 33cl_+1 Dessert_*Sauf Glace', 8),
            array(1, 'Pizzas reine', 'Tomate, mozzarella, jambon, champignon', 'senior', 13),
            array(1, 'Pizzas reine', 'Tomate, mozzarella, jambon, champignon', 'mega', 19),
            array(1, 'Pizzas marguerita', 'Tomate, mozzarella, origan', 'junior', 7),
            array(1, 'Pizzas marguerita', 'Tomate, mozzarella, origan', 'senior', 9.5),
            array(1, 'Pizzas marguerita', 'Tomate, mozzarella, origan', 'mega', 14.5),
            array(1, 'Pizzas reine', 'Tomate, mozzarella, jambon, champignon', 'junior', 'mega',  8),
            array(1, 'Pizzas calzone', 'Tomate, mozzarella, oeuf, champignon, jambon ou viande hachée ou thon','senior',  13),
            array(1, 'Pizzas calzone', 'Tomate, mozzarella, oeuf, champignon, jambon ou viande hachée ou thon', 'junior',  8),
            array(1, 'Pizzas vegetarienne', "Tomate, mozzarella, poivron, coeur d''artichouts, oignon, olive, champignon, tomate cerise", 'mega', 14.5),
            array(1, 'Pizzas vegetarienne', "Tomate, mozzarella, poivron, coeur d''artichouts, oignon, olive, champignon, tomate cerise", 'senior',  9.5),
            array(1, 'Pizzas', 'vegetarienne', "Tomate, mozzarella, poivron, coeur d''artichouts, oignon, olive, champignon, tomate cerise", 'junior',  7),
            array(1, 'Pizzas printaniere', "Tomate, mozzarella, oignon, aubergine, tomate cerise, parmesan, huile d''olive, origan", 'mega',  20),
            array(1, 'Pizzas', 'printaniere', 'senior', 'Tomate, mozzarella, oignon, aubergine, tomate cerise, parmesan, huile d''olive, origan', 13.5),
            array(1, 'Pizzas', 'printaniere', 'junior', 'Tomate, mozzarella, oignon, aubergine, tomate cerise, parmesan, huile d''olive, origan', 8.5),
            array(1, 'Pizzas', 'paysanne', 'mega', 'Tomate, mozzarella, lardon, reblochon, oeuf', 20),
            array(1, 'Pizzas', 'paysanne', 'senior', 'Tomate, mozzarella, lardon, reblochon, oeuf', 13.5),
            array(1, 'Pizzas', 'paysanne', 'junior', 'Tomate, mozzarella, lardon, reblochon, oeuf', 8.5),
            array(1, 'Pizzas', 'pecheur', 'mega', 'Tomate, mozzarella, fruit de mer, sauce ail basilic', 20),
            array(1, 'Pizzas', 'pecheur', 'senior', 'Tomate, mozzarella, fruit de mer, sauce ail basilic', 13.5),
            array(1, 'Pizzas', 'pecheur', 'junior', 'Tomate, mozzarella, fruit de mer, sauce ail basilic', 8.5),
            array(1, 'Pizzas', '4saison', 'mega', 'Tomate, mozzarella, jambon, artichauts, champignon, poivron, olive', 20),
            array(1, 'Pizzas', '4saison', 'senior', 'Tomate, mozzarella, jambon, artichauts, champignon, poivron, olive', 13.5),
            array(1, 'Pizzas', '4saison', 'junior', 'Tomate, mozzarella, jambon, artichauts, champignon, poivron, olive', 8.5),
            array(1, 'Pizzas', 'cheddar', 'mega', 'Tomate, mozzarella, poulet, bacon, poivron, cheddar', 21),
            array(1, 'Pizzas', 'cheddar', 'senior', 'Tomate, mozzarella, poulet, bacon, poivron, cheddar', 14.5),
            array(1, 'Pizzas', 'cheddar', 'junior', 'Tomate, mozzarella, poulet, bacon, poivron, cheddar', 9),
            array(1, 'Pizzas', 'tonarella', 'mega', 'Tomate, mozzarella, thon, oeuf, olive, origan, poivron', 20),
            array(1, 'Pizzas', 'tonarella', 'senior', 'Tomate, mozzarella, thon, oeuf, olive, origan, poivron', 13.5),
            array(1, 'Pizzas', 'tonarella', 'junior', 'Tomate, mozzarella, thon, oeuf, olive, origan, poivron', 8.5),
            array(1, 'Pizzas', 'casa', 'mega', 'Tomate, mozzarella, oeuf, poulet, merguez, olive', 20),
            array(1, 'Pizzas', 'casa', 'senior', 'Tomate, mozzarella, oeuf, poulet, merguez, olive', 13.5),
            array(1, 'Pizzas', 'casa', 'junior', 'Tomate, mozzarella, oeuf, poulet, merguez, olive', 8.5),
            array(1, 'Pizzas', 'bolognaise', 'mega', 'Tomate, mozzarella, viande hachée, poivron, pomme de terre, oignon', 20),
            array(1, 'Pizzas', 'bolognaise', 'senior', 'Tomate, mozzarella, viande hachée, poivron, pomme de terre, oignon', 13.5),
            array(1, 'Pizzas', 'bolognaise', 'junior', 'Tomate, mozzarella, viande hachée, poivron, pomme de terre, oignon', 8.5),
            array(1, 'Pizzas', 'spicy', 'mega', 'Tomate, mozzarella, viande hachée, merguez, piment fort, poivron', 20.5),
            array(1, 'Pizzas', 'spicy', 'senior', 'Tomate, mozzarella, viande hachée, merguez, piment fort, poivron', 14.5),
            array(1, 'Pizzas', 'spicy', 'junior', 'Tomate, mozzarella, viande hachée, merguez, piment fort, poivron', 9),
            array(1, 'Pizzas', 'orientale', 'mega', 'Tomate, mozzarella, poivron, double merguez, oignon, oeuf, olive', 20),
            array(1, 'Pizzas', 'orientale', 'senior', 'Tomate, mozzarella, poivron, double merguez, oignon, oeuf, olive', 13.5),
            array(1, 'Pizzas', 'orientale', 'junior', 'Tomate, mozzarella, poivron, double merguez, oignon, oeuf, olive', 8.5),
            array(1, 'Pizzas', 'napolitaine', 'mega', 'Tomate, mozzarella, anchois, câpres, olive', 19),
            array(1, 'Pizzas', 'napolitaine', 'senior', 'Tomate, mozzarella, anchois, câpres, olive', 13),
            array(1, 'Pizzas', 'napolitaine', 'junior', 'Tomate, mozzarella, anchois, câpres, olive', 8),
            array(1, 'Pizzas', 'texas', 'mega', 'Sauce barbecue; mozzarella, boeuf épicé, chorizo, oignon', 21),
            array(1, 'Pizzas', 'texas', 'senior', 'Sauce barbecue; mozzarella, boeuf épicé, chorizo, oignon', 14.5),
            array(1, 'Pizzas', 'texas', 'junior', 'Sauce barbecue; mozzarella, boeuf épicé, chorizo, oignon', 9),
            array(1, 'Pizzas', 'raclette', 'mega', 'Crème fraîche, mozzarella, jambon, pomme de terre, raclette', 21),
            array(1, 'Pizzas', 'raclette', 'senior', 'Crème fraîche, mozzarella, jambon, pomme de terre, raclette', 14.5),
            array(1, 'Pizzas', 'raclette', 'junior', 'Crème fraîche, mozzarella, jambon, pomme de terre, raclette', 9),
            array(1, 'Pizzas', 'tartiflette', 'mega', 'Crème fraîche, mozzarella, lardon, pomme de terre, reblochon', 21),
            array(1, 'Pizzas', 'tartiflette', 'senior', 'Crème fraîche, mozzarella, lardon, pomme de terre, reblochon', 14.5),
            array(1, 'Pizzas', 'tartiflette', 'junior', 'Crème fraîche, mozzarella, lardon, pomme de terre, reblochon', 9),
            array(1, 'Pizzas', 'boursin', 'mega', 'Crème fraîche, mozzarella, viande hachée, pomme de terre, oignon, boursin', 21),
            array(1, 'Pizzas', 'boursin', 'senior', 'Crème fraîche, mozzarella, viande hachée, pomme de terre, oignon, boursin', 14.5),
            array(1, 'Pizzas', 'boursin', 'junior', 'Crème fraîche, mozzarella, viande hachée, pomme de terre, oignon, boursin', 9),
            array(1, 'Pizzas', 'fermiere', 'mega', 'Crème fraîche, mozzarella, champignon, jambon, pomme de terre, oeuf', 21),
            array(1, 'Pizzas', 'fermiere', 'senior', 'Crème fraîche, mozzarella, champignon, jambon, pomme de terre, oeuf', 14.5),
            array(1, 'Pizzas', 'fermiere', 'junior', 'Crème fraîche, mozzarella, champignon, jambon, pomme de terre, oeuf', 9),
            array(1, 'Pizzas', 'venezia', 'mega', 'Crème fraîche, mozzarella, saumon fum´ citron', 21),
            array(1, 'Pizzas', 'venezia', 'senior', 'Crème fraîche, mozzarella, saumon fum´ citron', 14.5),
            array(1, 'Pizzas', 'venezia', 'junior', 'Crème fraîche, mozzarella, saumon fum´ citron', 9),
            array(1, 'Pizzas', 'chevre miel', 'mega', 'Crème fraîche, mozzarella, chevre, miel', 21),
            array(1, 'Pizzas', 'chevre miel', 'senior', 'Crème fraîche, mozzarella, chevre, miel', 14.5),
            array(1, 'Pizzas', 'chevre miel', 'junior', 'Crème fraîche, mozzarella, chevre, miel', 9),
            array(1, 'Pizzas', 'world', 'mega', 'NC', 21),
            array(1, 'Pizzas', 'world', 'senior', 'NC', 14.5),
            array(1, 'Pizzas', 'world', 'junior', 'NC', 9),
            array(1, 'Pizzas', 'campionne', 'mega', 'Tomate, mozzarella, oeuf, champignon, viande hachée', 19),
            array(1, 'Pizzas', 'campionne', 'senior', 'Tomate, mozzarella, oeuf, champignon, viande hachée', 13),
            array(1, 'Pizzas', 'campionne', 'junior', 'Tomate, mozzarella, oeuf, champignon, viande hachée', 8),
            array(1, 'Pizzas', '4fromage', 'mega', 'Tomate, mozzarella, brie chevre, bleu', 20),
            array(1, 'Pizzas', '4fromage', 'senior', 'Tomate, mozzarella, brie chevre, bleu', 13.5),
            array(1, 'Pizzas', '4fromage', 'junior', 'Tomate, mozzarella, brie chevre, bleu', 8.5),
            array(1, 'Pizzas', '4jambon', 'mega', 'Tomate, mozzarella, bacon, jambon, chorizo, lardon', 20),
            array(1, 'Pizzas', '4jambon', 'senior', 'Tomate, mozzarella, bacon, jambon, chorizo, lardon', 13.5),
            array(1, 'Pizzas', '4jambon', 'junior', 'Tomate, mozzarella, bacon, jambon, chorizo, lardon', 8.5),
            array(1, 'Pizzas', 'cannibal', 'mega', 'Tomate, mozzarella, viande hachée, merguez, chorizo, jambon', 20.5),
            array(1, 'Pizzas', 'cannibal', 'senior', 'Tomate, mozzarella, viande hachée, merguez, chorizo, jambon', 14.5),
            array(1, 'Pizzas', 'cannibal', 'junior', 'Tomate, mozzarella, viande hachée, merguez, chorizo, jambon', 9),
            array(1, 'Pizzas', 'moussaka', 'mega', 'Tomate, mozzarella, viande hachée, aubergine', 20.5),
            array(1, 'Pizzas', 'moussaka', 'senior', 'Tomate, mozzarella, viande hachée, aubergine', 14.5),
            array(1, 'Pizzas', 'moussaka', 'junior', 'Tomate, mozzarella, viande hachée, aubergine', 9),
            array(1, 'Pizzas', 'chicken', 'mega', 'Crème fraîche, mozzarella, poulet, pomme de terre, oignon', 21),
            array(1, 'Pizzas', 'chicken', 'senior', 'Crème fraîche, mozzarella, poulet, pomme de terre, oignon', 14.5),
            array(1, 'Pizzas', 'chicken', 'junior', 'Crème fraîche, mozzarella, poulet, pomme de terre, oignon', 9),
            array(1, 'Pizzas', 'indienne', 'mega', 'Crème fraîche, mozzarella, sauce curry, poulet, poivron, oignon', 21),
            array(1, 'Pizzas', 'indienne', 'senior', 'Crème fraîche, mozzarella, sauce curry, poulet, poivron, oignon', 14.5),
            array(1, 'Boisson', 'fanta', '', 'NC', 1.2),
            array(1, 'Pizzas', 'indienne', 'junior', 'Crème fraîche, mozzarella, sauce curry, poulet, poivron, oignon', 9),
            (154, 'Boisson', '7up', '', 'NC', 1.2),
            (155, 'Boisson', 'coca_cherry', '', 'NC', 1.2),
            (156, 'Boisson', 'fanta_15', '', 'NC', 2.8),
            (157, 'Boisson', 'coca_15', '', 'NC', 2.8),
            (158, 'Boisson', 'lipton', '', 'NC', 1.2),
            (159, 'Boisson', 'oasis_tropical', '', 'NC', 1.2),
            (160, 'Boisson', 'coca_zero', '', 'NC', 1.2),
            (161, 'Boisson', 'cristalline_fraise_15', '', 'NC', 2.8),
            (162, 'Boisson', 'cristalline_peche_15', '', 'NC', 2.8),
            (163, 'Boisson', 'dada_lychee', '', 'NC', 1.2),
            (164, 'Boisson', 'fanta_peche', '', 'NC', 1.2),
            (165, 'Boisson', 'fanta_tropical', '', 'NC', 1.2),
            (166, 'Boisson', 'dada_fraise', '', 'NC', 1.2),
            (167, 'Boisson', 'dada_melon', '', 'NC', 1.2),
            (168, 'Boisson', 'oasis_pomme_cassis', '', 'NC', 1.2),
            (169, 'Boisson', 'dada_peche', '', 'NC', 1.2),
            (170, 'Pizzas', 'reine', 'senior', 'NC', 19.9),
            (171, 'Pizzas', 'marguerita', 'senior', 'NC', 19.9),
            (172, 'Pizzas', 'calzone', 'senior', 'NC', 19.9),
            (173, 'Pizzas', 'vegetarienne', 'senior', 'NC', 19.9),
            (174, 'Pizzas', 'printaniere', 'senior', 'NC', 19.9),
            (175, 'Pizzas', 'paysanne', 'senior', 'NC', 19.9),
            (176, 'Pizzas', 'pecheur', 'senior', 'NC', 19.9),
            (177, 'Pizzas', '4saison', 'senior', 'NC', 19.9),
            (178, 'Pizzas', 'cheddar', 'senior', 'NC', 19.9),
            (179, 'Pizzas', 'tonarella', 'senior', 'NC', 19.9),
            (180, 'Pizzas', 'casa', 'senior', 'NC', 19.9),
            (181, 'Pizzas', 'bolognaise', 'senior', 'NC', 19.9),
            (182, 'Pizzas', 'spicy', 'senior', 'NC', 19.9),
            (183, 'Pizzas', 'orientale', 'senior', 'NC', 19.9),
            (184, 'Pizzas', 'napolitaine', 'senior', 'NC', 19.9),
            (185, 'Pizzas', 'texas', 'senior', 'NC', 19.9),
            (186, 'Pizzas', 'raclette', 'senior', 'NC', 19.9),
            (187, 'Pizzas', 'tartiflette', 'senior', 'NC', 19.9),
            (188, 'Pizzas', 'boursin', 'senior', 'NC', 19.9),
            (189, 'Pizzas', 'fermiere', 'senior', 'NC', 19.9),
            (190, 'Pizzas', 'venezia', 'senior', 'NC', 19.9),
            (191, 'Pizzas', 'chevre miel', 'senior', 'NC', 19.9),
            (192, 'Pizzas', 'world', 'senior', 'NC', 19.9),
            (193, 'Pizzas', 'campionne', 'senior', 'NC', 19.9),
            (194, 'Pizzas', '4fromage', 'senior', 'NC', 19.9),
            (195, 'Pizzas', '4jambon', 'senior', 'NC', 19.9),
            (196, 'Pizzas', 'cannibal', 'senior', 'NC', 19.9),
            (197, 'Pizzas', 'moussaka', 'senior', 'NC', 19.9),
            (198, 'Pizzas', 'chicken', 'senior', 'NC', 19.9),
            (199, 'Pizzas', 'indienne', 'senior', 'NC', 19.9),
            (200, 'Pizzas', 'reine', 'junior', 'NC', 21),
            (201, 'Pizzas', 'marguerita', 'junior', 'NC', 21),
            (202, 'Pizzas', 'calzone', 'junior', 'NC', 21),
            (203, 'Pizzas', 'vegetarienne', 'junior', 'NC', 21),
            (204, 'Pizzas', 'printaniere', 'junior', 'NC', 21),
            (205, 'Pizzas', 'paysanne', 'junior', 'NC', 21),
            (206, 'Pizzas', 'pecheur', 'junior', 'NC', 21),
            (207, 'Pizzas', '4saison', 'junior', 'NC', 21),
            (208, 'Pizzas', 'cheddar', 'junior', 'NC', 21),
            (209, 'Pizzas', 'tonarella', 'junior', 'NC', 21),
            (210, 'Pizzas', 'casa', 'junior', 'NC', 21),
            (211, 'Pizzas', 'bolognaise', 'junior', 'NC', 21),
            (212, 'Pizzas', 'spicy', 'junior', 'NC', 21),
            (213, 'Pizzas', 'orientale', 'junior', 'NC', 21),
            (214, 'Pizzas', 'napolitaine', 'junior', 'NC', 21),
            (215, 'Pizzas', 'texas', 'junior', 'NC', 21),
            (216, 'Pizzas', 'raclette', 'junior', 'NC', 21),
            (217, 'Pizzas', 'tartiflette', 'junior', 'NC', 21),
            (218, 'Pizzas', 'boursin', 'junior', 'NC', 21),
            (219, 'Pizzas', 'fermiere', 'junior', 'NC', 21),
            (220, 'Pizzas', 'venezia', 'junior', 'NC', 21),
            (221, 'Pizzas', 'chevre miel', 'junior', 'NC', 21),
            (222, 'Pizzas', 'world', 'junior', 'NC', 21),
            (223, 'Pizzas', 'campionne', 'junior', 'NC', 21),
            (224, 'Pizzas', '4fromage', 'junior', 'NC', 21),
            (225, 'Pizzas', '4jambon', 'junior', 'NC', 21),
            (226, 'Pizzas', 'cannibal', 'junior', 'NC', 21),
            (227, 'Pizzas', 'moussaka', 'junior', 'NC', 21),
            (228, 'Pizzas', 'chicken', 'junior', 'NC', 21),
            (229, 'Pizzas', 'indienne', 'junior', 'NC', 21),
            (230, 'Pizzas', 'reine', 'mega', 'NC', 29.9),
            (231, 'Pizzas', 'marguerita', 'mega', 'NC', 29.9),
            (232, 'Pizzas', 'calzone', 'mega', 'NC', 29.9),
            (233, 'Pizzas', 'vegetarienne', 'mega', 'NC', 29.9),
            (234, 'Pizzas', 'printaniere', 'mega', 'NC', 29.9),
            (235, 'Pizzas', 'paysanne', 'mega', 'NC', 29.9),
            (236, 'Pizzas', 'pecheur', 'mega', 'NC', 29.9),
            (237, 'Pizzas', '4saison', 'mega', 'NC', 29.9),
            (238, 'Pizzas', 'cheddar', 'mega', 'NC', 29.9),
            (239, 'Pizzas', 'tonarella', 'mega', 'NC', 29.9),
            (240, 'Pizzas', 'casa', 'mega', 'NC', 29.9),
            (241, 'Pizzas', 'bolognaise', 'mega', 'NC', 29.9),
            (242, 'Pizzas', 'spicy', 'mega', 'NC', 29.9),
            (243, 'Pizzas', 'orientale', 'mega', 'NC', 29.9),
            (244, 'Pizzas', 'napolitaine', 'mega', 'NC', 29.9),
            (245, 'Pizzas', 'texas', 'mega', 'NC', 29.9),
            (246, 'Pizzas', 'raclette', 'mega', 'NC', 29.9),
            (247, 'Pizzas', 'tartiflette', 'mega', 'NC', 29.9),
            (248, 'Pizzas', 'boursin', 'mega', 'NC', 29.9),
            (249, 'Pizzas', 'fermiere', 'mega', 'NC', 29.9),
            (250, 'Pizzas', 'venezia', 'mega', 'NC', 29.9),
            (251, 'Pizzas', 'chevre miel', 'mega', 'NC', 29.9),
            (252, 'Pizzas', 'world', 'mega', 'NC', 29.9),
            (253, 'Pizzas', 'campionne', 'mega', 'NC', 29.9),
            (254, 'Pizzas', '4fromage', 'mega', 'NC', 29.9),
            (255, 'Pizzas', '4jambon', 'mega', 'NC', 29.9),
            (256, 'Pizzas', 'cannibal', 'mega', 'NC', 29.9),
            (257, 'Pizzas', 'moussaka', 'mega', 'NC', 29.9),
            (258, 'Pizzas', 'chicken', 'mega', 'NC', 29.9),
            (259, 'Pizzas', 'indienne', 'mega', 'NC', 29.9)
        );*/
        
        $manager->flush();
    }
}
