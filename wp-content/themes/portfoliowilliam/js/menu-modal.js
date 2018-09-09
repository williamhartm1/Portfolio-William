// open contact modal
jQuery(document).ready(function () {
    jQuery('#menu-item-171').find('a').attr('data-toggle', 'modal');
    jQuery('#menu-item-171').find('a').attr('data-target', '#modal-contact');
});

// menu effects
let modals = $('#modal');

modals.on('show.bs.modal', function () {
    $('.container').addClass('blur');
});

modals.on('hide.bs.modal', function () {
    $('.container').removeClass('blur');
});