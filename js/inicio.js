const formulario = document.getElementById('formReg');

const inputs = document.querySelectorAll('#formReg input');

const expRegulares = {

    xddocumento: /^\d{8,16}$/,

    xdContra:/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/,
}

const Cajas = {

    documento: false,

    Contra: false,

 }

const validarForm = (e) => {


    switch(e.target.id){

        
        case "documento":

            validarExpresion(expRegulares.xddocumento, e.target, e.target.id);

        break;

        case "Contra":

            validarExpresion(expRegulares.xdContra, e.target, e.target.id);
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

        document.querySelector(`#form_Contra .form_mensaje-error`).classList.remove('form_mensaje-error-activo');
 
         Cajas['Contra'] = true;
 
    }else{

        document.querySelector(`#form_Contra .form_mensaje-error`).classList.add('form_mensaje-error-activo');

        Cajas['Contra'] = false;
    } 
}

inputs.forEach((input) => {

    input.addEventListener('keyup', validarForm);
    input.addEventListener('blur', validarForm);

});

formulario.addEventListener('submit', (e) => {
    
    preventDefault();

});