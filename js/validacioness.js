
const formulario = document.getElementById('formReg');

const inputs = document.querySelectorAll('#formReg input');

const expRegulares = {

    xdCurso: /^\d{4,5}$/,

    xdApellido: /^[A-Za-záéíóúÁÉÍÓÚñÑüÜ]+(?:\s+[A-Za-záéíóúÁÉÍÓÚñÑüÜ]+)$/,
    
    xdNombre: /^[A-Za-záéíóúÁÉÍÓÚñÑüÜ]+(?:\s+[A-Za-záéíóúÁÉÍÓÚñÑüÜ]+)$/,

    xdCorreo: /\w+@\w+\.+[a-z]/,
            
	xdPass: /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/,
	
    xdDocumento: /^\d{8,16}$/,

}

const Cajas = {

    Curso: false,

    Apellido: false,

    Nombre: false,

    Documento: false,

    Correo: false,

    Contra: false,

 }

const validarForm = (e) => {


    switch(e.target.id){

        
        case "Curso":

            validarExpresion(expRegulares.xdCurso, e.target, e.target.id);

        break;

        
        case "Apellido":

            validarExpresion(expRegulares.xdApellido, e.target, e.target.id);

        break;

        case "Nombre":

            validarExpresion(expRegulares.xdNombre, e.target, e.target.id);

        break;

        case "Documento":

            validarExpresion(expRegulares.xdDocumento, e.target, e.target.id);

        break;

        case "Correo":

            validarExpresion(expRegulares.xdCorreo, e.target, e.target.id);

        break;

        case "Contra":

            validarExpresion(expRegulares.xdPass, e.target, e.target.id);
            compararPass();

        break;

        case "contra2":

            compararPass();

        break;

    }

}

const validarExpresion = (exR, input, caja) => {

    if(exR.test(input.value)){

        document.querySelector(`#form_${caja} .form_mensaje-error`).classList.remove('form_mensaje-error-activo');

        Cajas[caja] = true;

    }else{

        document.querySelector(`#form_${caja} .form_mensaje-error`).classList.add('form_mensaje-error-activo');
 
        Cajas[caja] = false;

    }

} 

const compararPass = () =>{

    const inputPass1 = document.getElementById('Contra');

    const inputPass2 = document.getElementById('contra2');

    if(inputPass1.value === inputPass2.value){

        document.querySelector(`#form_contra2 .form_mensaje-error`).classList.remove('form_mensaje-error-activo');
        document.querySelector(`#form_contra .form_mensaje-error`).classList.remove('form_mensaje-error-activo');
 
         Cajas['Pass'] = true;
 
    }else{

        document.querySelector(`#form_contra2 .form_mensaje-error`).classList.add('form_mensaje-error-activo');
        document.querySelector(`#form_contra .form_mensaje-error`).classList.add('form_mensaje-error-activo');
        
        Cajas['Pass'] = false;
    } 
}

inputs.forEach((input) => {

    input.addEventListener('keyup', validarForm);
    input.addEventListener('blur', validarForm);

});

formulario.addEventListener('submit', (e) => {
    
    preventDefault();

});