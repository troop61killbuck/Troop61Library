<!-- Bootstrap core JavaScript-->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js" defer></script>

<!-- DataTables Bootstrap 4 JavaScript-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>


<!-- Core plugin JavaScript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js" integrity="sha512-xq+0+dRhI6SZOh+lDnMJEju2p2YPINflJLcYrRAsIMaXnJi6/V3lppCMCYsB2MLeF2E93r+fVo0MioY90pNzpw==" crossorigin="anonymous"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2/dist/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

<script>
function markRead(id) {
    newWin = window.open("mark_alert.php?id=" + id + "&status=read", "", "width=50,height=50");
    setTimeout(function (){
    newWin.close();
    window.location.reload();}, 500);
}
</script>
<script>
function markUnread(id) {
    newWin = window.open("mark_alert.php?id=" + id + "&status=unread", "", "width=50,height=50");
    setTimeout(function (){
    newWin.close();
    window.location.reload();}, 500);
}
</script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
