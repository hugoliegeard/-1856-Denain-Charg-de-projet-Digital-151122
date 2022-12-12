/* ---------------------------------------
        LES SELECTEURS DE JQUERY
--------------------------------------- */

// -- Format : $('selecteur')
// -- Tous les sélecteurs CSS sont disponible.

$(function() { // DOM is ready !

    document.querySelectorAll('span');
    document.getElementsByTagName('span');
    $('span'); // Version jQuery

    document.getElementById('monElementId');
    document.querySelector('#monElementId');
    $('#monElementId');

});