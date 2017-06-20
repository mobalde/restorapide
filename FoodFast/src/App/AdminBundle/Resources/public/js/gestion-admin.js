/**
 * @author BALDE Mamadou - mamoudous2005@yahoo.fr
 * Affiche le bon formulaire par rapport à l'item selectionné dans le menu
 */

document.getElementById('add-price-witdth').addEventListener('click', function( event ) {
    // Affiche le compte courant de clics à l'intérieur de la div cliquée
    var nbelement = document.querySelectorAll('#new-bl-heightPrice div'); // le nombre de bloc
    console.log('-------- nbelement: '+nbelement.length);
    if(nbelement.length<=2){
        // creation du bloc
        var newbloc = document.createElement('div');
        newbloc.className = "form-group";
        newbloc.innerHTML = '<label for="app_platformbundle_produit_taille'+(nbelement.length+1)+'" class="required">Taille *</label>'+
           '<select id="app_platformbundle_produit_taille'+(nbelement.length+1)+'" name="app_platformbundle_produit_taille'+(nbelement.length+1)+'" required="required" class="form-control taille"><option value="" selected="selected">Selectionner la taille</option><option value="mega">mega</option><option value="senior">senior</option><option value="junior">junior</option></select>';
        
        document.getElementById('new-bl-heightPrice').insertBefore(newbloc, document.getElementById("bloc-btn-new-t-p")); // Ajout du nouveau bloc dans le bloc principal
    }
    else{
        // On desactive le bouton 
    }
}, false);

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
