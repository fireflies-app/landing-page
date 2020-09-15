jQuery(document).ready(function () {
    AOS.init();
    jQuery('.close-modal').on("click", function(){
        const current_modal = jQuery(this).parents('div[class^="modal"]');
        current_modal.modal('hide');
    });
});