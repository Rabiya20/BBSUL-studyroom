/*Downloaded from https://www.codeseek.co/suez/loginregistration-form-transition-RpNXOR */
document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});
// -----------------------------------firebase commands-----------------
  // Initialize Firebase
  $(function(){
    var config = {
      apiKey: "AIzaSyCLTeTYyg9m060l0zkCUhH-2jsgCkx-T7w",
      authDomain: "study-room-fae71.firebaseapp.com",
      databaseURL: "https://study-room-fae71.firebaseio.com",
      projectId: "study-room-fae71",
      storageBucket: "study-room-fae71.appspot.com",
      messagingSenderId: "139431980479"
    };
    firebase.initializeApp(config);
    $(',js-form').on('sumbit', event => {
      event.preventDefault();
      const email = $('js-email').val();
      const password = $('js-password').val();

      firebase.auth().signInWithEmailAndPassword(email, password)
        .then(user => {
          firebase.database().ref('message').push({message})
        })
        .catch(erre => {
          console.log(error);
        })
    })
  })
//---------------------------------------------------for login-----------------------
function submit() {
var email = document.getElementsByClassName("email").value;
var pass = document.getElementsByClassName('password').value;
submitOK = "true";
if(email ==null && pass ==null){
  submitOK = "false"
}
else if(email == ' ' && pass == ' '){
  submitOK = "false"
}
else{
  alert(submitOK)
}
}