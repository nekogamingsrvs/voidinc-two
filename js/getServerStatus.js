$(document).ready(function() {
  $.ajax(
    {
      type: "POST",
      url: "//test.voidinc.net/getport.php",
      data: {
        port: "21025"
      },
      success:function(data) {
        console.log(data);
        if(data.includes("Online")) {
          $("#starbound-var").addClass("online").removeClass("pending").text("Online")
        }
        else if(data.includes("Offline")) {
          $("#starbound-var").addClass("offline").removeClass("pending").text("Offline")
        }
      }
    }
  )

  $.ajax(
    {
      type: "POST",
      url: "//test.voidinc.net/getport.php",
      data: {
        port: "28015"
      },
      success:function(data) {
        console.log(data);
        if (data.includes("Online")) {
          $("#rust-var").addClass("online").removeClass("pending").text("Online")
        }
        else if(data.includes("Offline")) {
          $("#rust-var").addClass("offline").removeClass("pending").text("Offline")
        }
      }
    }
  )

  $.ajax(
    {
      type: "POST",
      url: "//test.voidinc.net/getport.php",
      data: {
        port: "4242"
      },
      success:function(data) {
        console.log(data);
        if(data.includes("Online")) {
          $("#starmade-var").addClass("online").removeClass("pending").text("Online")
        }
        else if(data.includes("Offline")) {
          $("#starmade-var").addClass("offline").removeClass("pending").text("Offline")
        }
      }
    }
  )

  $.ajax(
    {
      type: "POST",
      url: "//test.voidinc.net/getport.php",
      data: {
        port: "27080"
      },
      success:function(data) {
        console.log(data);
        if(data.includes("Online")) {
          $("#unturned-var").addClass("online").removeClass("pending").text("Online")
        }
        else if(data.includes("Offline")) {
          $("#unturned-var").addClass("offline").removeClass("pending").text("Offline")
        }
      }
    }
  )

  $.ajax(
    {
      type: "POST",
      url: "//test.voidinc.net/getport.php",
      data: {
        port: "25565"
      },
      success:function(data)
      {
        console.log(data);
        if(data.includes("Online")) {
          $("#minecraft-var").addClass("online").removeClass("pending").text("Online")
        }
        else if(data.includes("Offline")) {
          $("#minecraft-var").addClass("offline").removeClass("pending").text("Offline")
        }
      }
    }
  )
});
