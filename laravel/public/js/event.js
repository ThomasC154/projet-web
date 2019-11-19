(function($){
    $.fn.datepicker.dates['fr'] = {
    days: ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"],
    daysShort: ["dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam."],
    daysMin: ["d", "l", "ma", "me", "j", "v", "s"],
    months: ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"],
    monthsShort: ["janv.", "févr.", "mars", "avril", "mai", "juin", "juil.", "août", "sept.", "oct.", "nov.", "déc."],
    today: "Aujourd'hui",
    monthsTitle: "Mois",
    clear: "Effacer",
    weekStart: 1,
    format: "dd/mm/yyyy"
    };
    }(jQuery));
     
     
    $('.datepicker ').datepicker({
    language: 'fr',
    autoclose: true,
    todayHighlight: true
    })

$(document).ready(function(){
    $('.delete_form').on('submit', function(){
        if(confirm("Etes-vous sûr de vouloir supprimer cet évenement ?"))
        {
            return true;
        }
        else
        {
            return false;
        }
    });
});

$(document).ready(function(){
    $('.create_form').on('submit', function(){
        if(confirm("Etes-vous sûr de vouloir ajouter cet évenement ?"))
        {
            return true;
        }
        else
        {
            return false;
        }
    });
});
