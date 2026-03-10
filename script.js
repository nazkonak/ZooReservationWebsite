const signUpButton= document.getElementById('signUpButton');
const signInButton= document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signUp');

signUpButton.addEventListener('click', function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
}) 

signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})


  function selectGender(value) {
    document.getElementById('gender-input').value = value;

    // opsiyonel: aktif butonu görsel olarak belirtmek için
    const buttons = document.querySelectorAll('.choice');
    buttons.forEach(btn => btn.setAttribute('aria-pressed', 'false'));

    // seçilen butonun aria-pressed'ını true yap
    Event.currentTarget.setAttribute('aria-pressed', 'true');
  }
