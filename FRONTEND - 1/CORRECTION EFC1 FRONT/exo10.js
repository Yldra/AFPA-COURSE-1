function helloWorld() {
  setTimeout(function() {
    let message = document.createElement('p');
    message.textContent = 'Hello World';
    document.body.appendChild(message);
  }, 5000);
}

// Pour lancer la fonction :
helloWorld()
