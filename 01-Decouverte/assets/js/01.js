
jQuery(document).ready(function () {
    /**
     * Une fois que ma page HTML, mon JS et
     * ma librairie jQuery est chargée, ma
     * fonction anonyme s'execute, je peux
     * commender à utiliser jQuery.
     */
   console.log('Ma librairie est chargée !');
});

// 2ème méthode (Rencontrée généralement)
$(document).ready(function () {
    console.log('jQuery is ready !');
});

// 3ème méthode (Privilégiée)
$(function () {
    console.log('jQuery is ready to rock !');
});

// 4ème méthode (ES6 - Déconseillé)
$(() => {
    console.log('jQuery is ready to rock and roll !');
});