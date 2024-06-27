const usuario = {
    boleta: '',
    nombre: '',
    email: '',
    edad: '',
    peso: '',
    estatura: '',
    calorias: ''
};

let usuarioArray = [];

function processContactForm(e) {
    e.preventDefault();
    
    usuario.boleta = document.forms["fcontact"]["boleta"].value;
    usuario.nombre = document.forms["fcontact"]["nombre"].value;
    usuario.email = document.forms["fcontact"]["email"].value;
    usuario.edad = document.forms["fcontact"]["edad"].value;
    usuario.peso = document.forms["fcontact"]["peso"].value;
    usuario.estatura = document.forms["fcontact"]["estatura"].value;
    usuario.calorias = document.forms["fcontact"]["calorias"].value;

    let usuarioJson = JSON.stringify(usuario);

    usuarioArray.push(usuarioJson);

    alert("Datos Guardados");
}