/**
 * @author BALDE Mamadou - mamoudous2005@yahoo.fr
 * Affiche le bon formulaire par rapport à l'item selectionné dans le menu
 */

if(document.getElementById('add-price-witdth')){
    document.getElementById('add-price-witdth').addEventListener('click', function( event ) {
        // Affiche le compte courant de clics à l'intérieur de la div cliquée
        var nbelement = document.querySelectorAll('#new-bl-heightPrice div'); // le nombre de bloc
        console.log('-------- nbelement: '+nbelement.length);
        if(nbelement.length<=3){
            // creation du bloc taille
            var newbloc = document.createElement('div');
            newbloc.className = "form-group";
            // Ajout du champ taille
            newbloc.innerHTML = '<label for="app_platformbundle_produit_taille'+(nbelement.length+1)+'">Taille</label>'+
               '<select id="app_platformbundle_produit_taille'+(nbelement.length+1)+'" name="app_platformbundle_produit_taille'+(nbelement.length+1)+'" class="form-control taille"><option value="" selected="selected">Selectionner la taille</option><option value="mega">mega</option><option value="senior">senior</option><option value="junior">junior</option></select>';

            var newblocbis = document.createElement('div');
            newblocbis.className = "form-group";
            // Ajout du champ prix
            newblocbis.innerHTML = '<label for="app_platformbundle_produit_prix'+(nbelement.length+1)+'" >Prix</label>'+
               '<input type="text" id="app_platformbundle_produit_prix'+(nbelement.length+1)+'" name="app_platformbundle_produit_prix'+(nbelement.length+1)+'" placeholder="Exemple: 8.92" class="form-control prix">';

            document.getElementById('new-bl-heightPrice').insertBefore(newbloc, document.getElementById("bloc-btn-new-t-p")); // Ajout du nouveau bloc dans le bloc principal
            document.getElementById('new-bl-heightPrice').insertBefore(newblocbis, document.getElementById("bloc-btn-new-t-p")); // Ajout du nouveau bloc dans le bloc principal

            // On desactive le bouton 
            if(nbelement.length==3){
                var elmt = document.getElementById('add-price-witdth');
                elmt.style.display = 'none'; 
            }
        }
    }, false);
}

$(function(){
    // date 
    $('#datetimepicker').datepicker({
            altField: "#datepicker",
            closeText: 'Fermer',
            prevText: 'Précédent',
            nextText: 'Suivant',
            currentText: 'Aujourd\'hui',
            monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
            dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
            dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
            dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
            weekHeader: 'Sem.',
            dateFormat: 'yy-mm-dd'
            
    });
    
    // Gestion du menu dans la page Admin
    switch($('.titre_form').text()){
        case "Ajout Produit":
            $('#products').css('background-color', '#5cb85c');
            $('#products a').css('color', 'white');
            $('#products a').click(function(event){
                event.preventDefault();
            });
            break;
        case "Ajout Promo":
            $('#promos').css('background-color', '#5cb85c');
            $('#promos a').css('color', 'white');
            $('#promos a').click(function(event){
                event.preventDefault();
            });
            break;
    }
});
