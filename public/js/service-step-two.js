$(function () {

    var iRowCount = 0;

    var dialogChargeOthers;

    function createChargeOthers() {
        dialogChargeOthers = $( "#dialog-form" ).dialog({
            autoOpen: false,
            modal: true,
            height: 400,
            width: 600,
            close: function() {
                document.getElementById("frmChargesOthers").reset();
            }
        });

    }

    function addChargeOthers() {
        var sDescription = $("#chargeOthersName").val();
        var sCharge = $("#chargeOthersPrice").val();

        sCharge = parseFloat(sCharge).toFixed(2);

        iRowCount ++;
        var tr = "<tr id='" + iRowCount + "'><td>" + sDescription + "</td><td>$ " + sCharge + "</td><td>"+
            "<button class='button button-red button-2' data-id='" + iRowCount + "' data-charge='" + sCharge + "' >" +
                "<i class='fa fa-fw fa-trash'></i>" +
            "</button>" +
        "</td></tr>";

        var chargePrice = $("#chargeTotal").val();
        chargePrice = parseFloat(parseFloat(chargePrice) + parseFloat(sCharge)).toFixed(2);

        $("#chargesOthers tbody").append(tr);

        changeChargeTotal(chargePrice);

        $('.button-2[data-id="' + iRowCount + '"]').click(function () {
            deleteChargeOthers(this);
        });
    }

    function deleteChargeOthers(e) {

        var element = $(e);
        var id = element.data("id");

        var sCharge = $('.button-2[data-id="' + id + '"]').data("charge");


        var chargePrice = $("#chargeTotal").val();
        chargePrice = parseFloat(parseFloat(chargePrice) - parseFloat(sCharge)).toFixed(2);

        $('#' + id).remove();

        changeChargeTotal(chargePrice);
    }

    function changeChargeTotal(chargePrice) {

        $("#chargeTotal").val(chargePrice);


        $(".odometer-inside").html('');

        var div = '<span class="odometer-formatting-mark">$</span>';
        var i = chargePrice.toString().length;
        i--;

        for(x=0;x <= i; x++) {
            var char = chargePrice.toString().charAt(x);

            if ((char == ".") || (char == ".")) {
                div = div + '<span class="odometer-formatting-mark">' + char + '</span>';
            } else {
                div = div + '<span class="odometer-digit">' +
                    '<span class="odometer-digit-spacer">8</span>' +
                    '<span class="odometer-digit-inner">' +
                    '<span class="odometer-ribbon">' +
                    '<span class="odometer-ribbon-inner">' +
                    '<span class="odometer-value">' + char + '</span>' +
                    '</span>' +
                    '</span>' +
                    '</span>' +
                    '</span>';
            }
        }


        $(".odometer-inside").append(div);
    }

    function changeVehicle() {

    }

    $('#frmChargesOthers').submit(function(e) {
        e.preventDefault();
        addChargeOthers();
        dialogChargeOthers.dialog("close");
    });

    function loadPage(){
        setTimeout(function() {
            $(".odometer-inside").prepend('<span class="odometer-formatting-mark" id="mark" style="display: none !important;">$</span>');
            $("#mark").show('slow');
        }, 3000);

        createChargeOthers();
        $("#addChargeOthers").click(function () {
            dialogChargeOthers.dialog("open");
        });

        $("#vehicle").change(function () {
            window.alert("asdf");
        })

    }

    $(document).ready(loadPage);

})
