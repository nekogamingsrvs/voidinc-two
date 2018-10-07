$(document).ready(function() {
  var services_enabled = ['starbound', 'rust', 'starmade', 'unturned', 'unturned_arena', 'minecraft1', 'minecraft2', 'minecraft3', 'conan', 'ark1', 'ark2', 'ark3', 'ark4', 'ark5'];

  var json_services = JSON.stringify(services_enabled);

  $.ajax({
    type: "GET",
    url: "https://test.voidinc.net/getport.php",
    data: {
      services: json_services
    },
    success: function(data) {
      eval(data);
    }
  });
});
