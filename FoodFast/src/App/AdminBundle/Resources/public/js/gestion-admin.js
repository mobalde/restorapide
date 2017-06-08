/**
 * @author BALDE Mamadou - mamoudous2005@yahoo.fr
 * Affiche le bon formulaire par rapport à l'item selectionné dans le menu
 */

document.getElementById("products").addEventListener("click", function( event ) {
    // Affiche le compte courant de clics à l'intérieur de la div cliquée
    console.log('--------- je suis tres bien -----------');
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
            $('#products').addClass('active');
            $('#products a').css('color', 'white');
            $('#products a').click(function(event){
                event.preventDefault();
            });
            break;
    }
});