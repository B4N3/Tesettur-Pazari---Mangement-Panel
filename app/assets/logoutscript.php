<?php
include  '../config/urls.php';
 ?>
 <!--Logout Script-->
<script>

            $(document).ready(function () {

                $("#logoutbtn").click(function(){

                var token = $("#token").val();
                var url = "<?=$logoutcontrol?>/logout.php";
                // Submit the form using AJAX.
                $("#loader").css("display", "block");
                $.ajax({
                  type: 'POST',
                  url:url ,
                  data: {
                    token: token

                  }
                }).done(function (data, status) {
                  $("#loader").css("display", "none");
                  if (data === '1') {
                    location.reload();
                  }
                })
                  });

            });
</script>
<!--Logout Script End -->
