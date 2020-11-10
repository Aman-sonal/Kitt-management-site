$('#ModalCenter').on('shown.bs.modal', function (e) {
    $("#remarksarea").focus();

   var now = new Date();
   var day = ("0" + now.getDate()).slice(-2);
   var month = ("0" + (now.getMonth() + 1)).slice(-2);

   var today = (now.getFullYear() + '-' + month + '-' + day);
   $('#datepicker').val(today);
})