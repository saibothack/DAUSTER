$(function () {

    function btnChangeImage() {
        dialog.dialog("open");
    }

    function btnChangeImageUser() {
        dialogUser.dialog("open");
    }

    function btnChangeImageVehicle() {
        dialogVehicle.dialog("open");
    }

    function init() {
        dialog = $( "#dialog-change-iamge" ).dialog({
            autoOpen: false,
            height: 230,
            width: 550,
            modal: true,
            close: function() {
            }
        });

        dialogUser = $("#dialog-user-iamge").dialog({
            autoOpen: false,
            height: 230,
            width: 550,
            modal: true,
            close: function() {
            }
        });

        dialogVehicle = $("#dialog-vehicle-iamge").dialog({
            autoOpen: false,
            height: 230,
            width: 550,
            modal: true,
            close: function() {
            }
        });

        $('#btnUserImage').click(btnChangeImageUser);
        $('#btnChangeImage').click(btnChangeImage);
        $('#btnVehicleImage').click(btnChangeImageVehicle);


    }

    $(document).ready(init);

});
