const firebaseConfig = {
    apiKey: "AIzaSyA6z_PmOfPIde4EykAw9CCLF7i9U0XuFoY",
    authDomain: "form-input-8df4d.firebaseapp.com",
    databaseURL: "https://form-input-8df4d-default-rtdb.firebaseio.com",
    projectId: "form-input-8df4d",
    storageBucket: "form-input-8df4d.appspot.com",
    messagingSenderId: "361516755037",
    appId: "1:361516755037:web:1124c31ec0723792bd85b4",
    measurementId: "G-PR7SV86EMX"
  };
    // Initialize Firebase
firebase.initializeApp(firebaseConfig);
// reference firebase database
var contactForm =firebase.database().ref('contactForm');

document.getElementById('contactForm').addEventListener('submit',submitForm);

function submitForm(e){
    e.preventDefault();
    var fname = getElementByval('fname');
    var lname = getElementByval('lname');
    var email = getElementByval('inputEmail');
    var number = getElementByval('inputnNumber');
    var address = getElementByval('inputAddress');
    var volunteer = getElementByval('volunteer');
    var charity = getElementByval('charity');
    var donation= getElementByval('donation');
    var petkeeping= getElementByval('pet_keeping');
    var adoption= getElementByval('adoption');
    var contemail= getElementByval('contact_pref_email');
    var contactphone= getElementByval('contact_pref_telephone');
    var contactpst= getElementByval('contact_pref_post');
    var queryt= getElementByval('contact_pref_text');
    
    console.log(fname,lname,email,number,address,volunteer,charity,donation,petkeeping,adoption,contemail,contactphone,contactpst,queryt);
}
const getElementByval =(id)=>{
    return document.getElementById(id).value;

}