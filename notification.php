<script>
var conn = new WebSocket("ws://localhost:8080");
conn.onopen = function(e) {
  console.log("Welcome");
  }
  conn.onmessage = function(e) {
    var datamain = JSON.parse(e.data);
    var data = datamain[0];
    if (data.adminormanagerid == <?php echo "$user_id"; ?>) {
 
      if (<?php echo "$login_auth"; ?> == 3) {
        var alert = "" +
          "<a href='chat.php'><div class='alert'>" +
          "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>" +
          "New Message | Click to See" +
          "</div></a>";

      } else {
        var alert = "" +
          "<a href='messeges.php?id=" + data.project_id + "'><div class='alert'>" +
          "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>" +
          "New Message | Click to See" +
          "</div></a>";
      }


      $(".message_alert").html(alert);




    }
 
    var notification = datamain[1];

    if (notification.notification == 1) {
      if (3 == <?php echo "$login_auth"; ?>) {
        var alert = "" +
          "<a href='jobs.php'><div class='alert'>" +
          "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>" +
          " New Project Added" +
          "</div></a>";
        $(".message_alert").html(alert);
      }
    }



    if (notification.notification == 2) {
      if (1 == <?php echo "$login_auth"; ?>) {
        var alert = "" +
          "<a href='paymentrequest.php'><div class='alert'>" +
          "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>" +
          " Payment Request" +
          "</div></a>";
        $(".message_alert").html(alert);
      }
    }



   

    if (notification.notification == 4) {
      if (notification.user_id == <?php echo "$user_id"; ?>) {
        var alert = "" +
          "<a href='currentproject.php'><div class='alert'>" +
          "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>" +
          " Project Request Accepted" +
          "</div></a>";
        $(".message_alert").html(alert);
      }
    }


    if (notification.notification == 5) {
      if (notification.user_id == <?php echo "$user_id"; ?>) {
        var alert = "" +
          "<div class='alert'>" +
          "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>" +
          " Project Request Rejected" +
          "</div>";
        $(".message_alert").html(alert);
      }
    }

    if (notification.notification == 6) {
      if (notification.aormanagerid == <?php echo "$user_id"; ?>) {
        var alert = "" +
          "<a href='donerequests.php'><div class='alert'>" +
          "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>" +
          "   Project  Done Request" +
          "</div></a>";
        $(".message_alert").html(alert);
      }
    }


    if (notification.notification == 7) {
      if (notification.user_id == <?php echo "$user_id"; ?>) {
        var alert = "" +
          "<a href='previousprojects.php'><div class='alert'>" +
          "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>" +
          "   Project  Done  " +
          "</div></a>";
        $(".message_alert").html(alert);
      }
    }

    if (notification.notification == 10) {
      if (notification.user_id == <?php echo "$user_id"; ?>) {
        var alert = "" +
          "<a href='currentproject.php'><div class='alert'>" +
          "<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>" +
          "   Project For Review " +
          "</div></a>";
        $(".message_alert").html(alert);
      }
    }

    setTimeout(function() {
      $(".message_alert").html("");
    }, 5000);
  }
  console.clear();
  </script>
  
  
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61433fb225797d7a89ff4f69/1ffnb1kl6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->