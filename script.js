gapi.load('auth2', function() {
    gapi.auth2.init({
        client_id: '883753607901-0ilsu1hgvic6r2ck6ave0i7ciht90td7.apps.googleusercontent.com',
    });
});

function onSignIn(googleUser) {
    // Handle the user data returned by Google Sign-In API
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId());
    console.log('Name: ' + profile.getName());
    console.log('Email: ' + profile.getEmail());
    // You can also send the user's ID token to your server for verification
    var id_token = googleUser.getAuthResponse().id_token;
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
}

 function redirecionarParaOutraPagina() {
            // Lógica para processar o formulário, se necessário

            // Redirecionamento para outra página
            window.location.href = "cadastro.html";

            // Retornar false para evitar o envio normal do formulário
            return false;
}
