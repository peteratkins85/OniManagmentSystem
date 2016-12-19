

var ONI = {
    env: null,
    devMode: false,
    urlPrefix: null,
    ui: {
        initEvents: function () {
            $(document).on('click', '.oni-delete-action', function () {
                var url = $(this).attr('delete-url');
                var msg = $(this).attr('delete-msg');
                var modal = $($(this).attr('href'));

                if (url && msg) {

                    modal.find('.modal-body').html(msg);
                    modal.find('.oni-action-btn').attr('href', url);

                }
            });
        }
    },
    init: function () {
        if ($("input[data-oni-environment]").length) {
            this.env = $("input[data-oni-environment]").val();

            if (this.env == 'dev') {
                this.devMode = true;
                this.urlPrefix = '/app_dev.php';
            }
        } else {
            throw "oni-environment element not set, environment cannot be deciphered";
        }

        this.ui.initEvents();

    },
    configurePath: function (url) {

        if (this.devMode) {
            url = this.urlPrefix + url;
        }

        return url;
    }

};


ONI.init();





