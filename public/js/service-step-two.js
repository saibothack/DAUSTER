$(function () {

    var dialogChargeOthers;

    function createChargeOthers() {
        dialogChargeOthers = $( "#dialog-form" ).dialog({
            autoOpen: false,
            modal: true,
            height: 450,
            width: 600,
            close: function() {
                document.getElementById("frmChargesOthers").reset();
            }
        });

    }

    function loadPage(){
        setTimeout(function() {
            $(".odometer-inside").prepend('<span class="odometer-formatting-mark" id="mark" style="display: none !important;">$</span>');
            $("#mark").show('slow');
        }, 3000);

        createChargeOthers();
        $("#addChargeOthers").click(function () {
            dialogChargeOthers.dialog("open");
        });
    }

    $(document).ready(loadPage);

})
