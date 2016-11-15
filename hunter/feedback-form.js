/*call-form*/
document.getElementById('snt-callback-form').addEventListener('submit', function(evt){
  var http = new XMLHttpRequest(), f = this;
  evt.preventDefault();
  http.open("POST", "/bitrix/templates/main-template/hunter/callback.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("&contactFF=" + f.contactFF.value);
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
        $('#snt-popup').fadeOut();
        $('#snt-mask').fadeIn();
        $('#snt-form-ok').fadeIn();
       function explode(){
        $('#snt-mask').fadeOut();
        $('#snt-form-ok').fadeOut();
        }
        setTimeout(explode, 4000); 
        
        f.contactFF.value=''; 
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
}, false);


/*mail-form*/
document.getElementById('snt-order-form').addEventListener('submit', function(evt){
  var http = new XMLHttpRequest(), f = this;
  evt.preventDefault();
  http.open("POST", "/bitrix/templates/main-template/hunter/mail.php", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("nameMM=" + f.nameMM.value + "&contactMM=" + f.contactMM.value + "&messageMM=" + f.messageMM.value);
  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
        $('#snt-popup').fadeOut();
        $('#snt-form-ok').fadeIn();
       function explode(){
        $('#snt-mask').fadeOut();
        $('#snt-form-ok').fadeOut();
        }
        setTimeout(explode, 4000); 
        
        f.contactMM.value=''; 
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
}, false);