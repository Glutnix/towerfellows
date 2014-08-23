jQuery(document).ready(function() {

    /**
     * make the sign in button give the first field focus
     * @return void
     */
    $('#nav-sign-in').click(function(evt) {

        setTimeout(function() {

            $('#nav-sign-in')
                .parent()
                .find("input[type!='hidden']")
                .first()
                .focus();

        }, 10);

    });

});