
function mostrar1(){
    document.getElementById('zona1').style.display = "block";
    document.getElementById('zona2').style.display = "none";
    document.getElementById('zona3').style.display = "none";
    document.getElementById('zona4').style.display = "none";
}

function mostrar2(){
    document.getElementById('zona2').style.display = "block";
    document.getElementById('zona1').style.display = "none";
    document.getElementById('zona3').style.display = "none";
    document.getElementById('zona4').style.display = "none";
}

function mostrar3(){
    document.getElementById('zona3').style.display = "block";
    document.getElementById('zona2').style.display = "none";
    document.getElementById('zona1').style.display = "none";
    document.getElementById('zona4').style.display = "none";
}

function mostrar4(){
    document.getElementById('zona4').style.display = "block";
    document.getElementById('zona3').style.display = "none";
    document.getElementById('zona2').style.display = "none";
    document.getElementById('zona1').style.display = "none";
}

//ocultar//

function ocultar1(){
    document.getElementById('zona1').style.display = "none";
}

function ocultar2(){
    document.getElementById('zona2').style.display = "none";
}

function ocultar3(){
    document.getElementById('zona3').style.display = "none";
}

function ocultar4(){
    document.getElementById('zona4').style.display = "none";
}