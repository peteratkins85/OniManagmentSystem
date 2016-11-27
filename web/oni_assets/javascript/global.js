/**
 * Created by peteratkins on 31/12/2015.
 */


$(document).on('click', '.oni-delete-action', function() {

        var url = $(this).attr('delete-url');
        var msg = $(this).attr('delete-msg');
        var modal = $($(this).attr('href'));

        if (url && msg){

            modal.find('.modal-body').html(msg);
            modal.find('.oni-action-btn').attr('href', url);

        }

});

