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

const logoutBtn = document.querySelector('#logout');



// Verificar si el usuario esta autenticado
auth.onAuthStateChanged(user => {

    if (user) {

        const userEmail = document.querySelector('#uid');
        userEmail.innerHTML=user.uid;
        console.log(user.uid);
        //Logout
        logoutBtn.addEventListener('click', e => {
            auth.signOut().then(() => {
                alert('Sign Out')
                window.location.href = "./login.html";
            })
        })

    } else {
        console.log('No hay usuarios con la sesion iniciada')
    }
});