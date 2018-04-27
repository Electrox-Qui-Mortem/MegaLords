if (window.location.href === "http://megalords.000webhostapp.com/") {
  window.location.href = "https://megalords.000webhostapp.com/";
}else if(window.location.href === "http://megalords.000webhostapp.com/about.php"){
    window.location.href = "https://megalords.000webhostapp.com/about.php";
}
if ('serviceWorker' in navigator) {
    // Register a service worker hosted at the root of the
    // site using the default scope.
    navigator.serviceWorker.register('sw.js').then(function(registration) {
        console.log('Service worker registration succeeded:', registration);
    }).catch(function(error) {
        console.log('Service worker registration failed:', error);
        document.body.innerHTML += "Stop Please <br>"
    });
} else {
    console.log('Service workers are not supported.');
}

Notification.requestPermission(function(status) {
    console.log('Notification permission status:', status);
});
var notifyMe = function() {
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support system notifications");
  }
  // Let's check whether notification permissions have already been granted
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
  }
  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function(permission) {
      // If the user accepts, let's create a notification
      if (permission === "granted") {}
    });
  }
  // Finally, if the user has denied notifications and you 
  // want to be respectful there is no need to bother them any more.
}
notifyMe();

function displayNotification() {
  if (Notification.permission == 'granted') {
    navigator.serviceWorker.getRegistration().then(function(reg) {
      var options = {
        body: 'Here is a notification body!',
        icon: 'images/example.png',
        vibrate: [100, 50, 100],
        data: {
          dateOfArrival: Date.now(),
          primaryKey: 1
        }
      };
      reg.showNotification('Hello world!', options);
    });
  }
}
var subscribeUser = function() {
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.ready.then(function(reg) {
      reg.pushManager.subscribe({
        userVisibleOnly: true
      }).then(function(sub) {
        var xhttp = new XMLHttpRequest()
        xhttp.onreadystatechange = function(){
            if(xhttp.status == 200 && xhttp.readyState == 4){
                console.log(xhttp.responseText)
            }
        }
        var substring = JSON.stringify(sub)
        window.subi = JSON.parse(substring)
        console.log(subi)
        console.log(subi.endpoint)
        xhttp.open("GET",'/script/savesub.php?newsub='+ subi.endpoint + "&auth=" + subi.keys.auth + "&p256dh=" + subi.keys.p256dh, true);
        xhttp.send();
      }).catch(function(e) {
        if (Notification.permission === 'denied') {
          console.warn('Permission for notifications was denied');
        } else {
          console.error('Unable to subscribe to push', e);
        }
      });
    })
  }
}
subscribeUser();
var lose = function() {
  displayNotification();
}
