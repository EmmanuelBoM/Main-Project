var firebaseConfig = {
    apiKey: "AIzaSyCxAGHAeS-Y9FpSQCVCfaFq4km7paysOEg",
    authDomain: "th-auth-6f777.firebaseapp.com",
    projectId: "th-auth-6f777",
    storageBucket: "th-auth-6f777.appspot.com",
    messagingSenderId: "932651977142",
    appId: "1:932651977142:web:56a56942ecccdb1d275917",
    measurementId: "G-2HVN46Z505"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
auth = firebase.auth();

const loginBtn = document.querySelector('#login-btn');

// Login
loginBtn.addEventListener('click', e => {
    const signinEmail = document.querySelector('#signin-email').value;
    const signinPassword = document.querySelector('#signin-password').value;
    auth
        .signInWithEmailAndPassword(signinEmail, signinPassword)
        .then(userCredential => {
            alert('Bienvenido')

        })

});
// Verificar si el usuario esta autenticado
auth.onAuthStateChanged(user => {

    if (user) {


        alert('Usuarios con sesión iniciada')
        window.location.href = "logout.html";


    } else {
        console.log('No hay usuarios con la sesion iniciada')
    }
});

