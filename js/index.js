const btnLogin = document.querySelector('#btn-login');
const btnSignup = document.querySelector('#btn-signup');

btnLogin.addEventListener('click', e=>{
    window.location.href = "./login.html";
})

btnSignup.addEventListener('click',e =>{
    window.location.href = "./signUp.html";
})