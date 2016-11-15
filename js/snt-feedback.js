/*contacts-form*/
document.getElementById('contact-form').addEventListener('submit', function(evt){
  var http = new XMLHttpRequest(), f = this;
  evt.preventDefault();
  http.open("POST", "../contacts.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("nameFF=" + f.nameFF.value + "&contactFF=" + f.contactFF.value + "&messageFF=" + f.messageFF.value);
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
        
        $('#myModal').css({"display":"block","background":"rgba(0, 0, 0, 0.55)"});
        $('#myModal').addClass("fade in");
        function explode(){
            $('#myModal').removeClass("fade in");
          $('#myModal').addClass("fade out");
            $('#myModal').css("display","none");
        }
        setTimeout(explode, 4000);
         
      f.messageFF.removeAttribute('value'); // очистить поле сообщения (две строки)
      f.messageFF.value='';
        f.contactFF.value='';
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
}, false);