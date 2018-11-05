$(function () {

    function btnChangeImage() {
        dialog.dialog("open");
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

        $('#btnChangeImage').click(btnChangeImage);

    }

    $(document).ready(init);

});
