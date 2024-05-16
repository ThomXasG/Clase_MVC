class Operaciones {
    constructor(valor, valor2) {
        this.valor = valor;
        this.valor2 = valor2;
    }
    
    sumar(valor, valor2) {
        return this.valor + this.valor2;
    }
}

class Resta extends Operaciones {
    constructor(valor, valor2) {
        super(valor, valor2);
    }
    
    restar(valor, valor2) {
        return this.valor - this.valor2;
    }
}

class Multiplicacion extends Operaciones {
    constructor(valor, valor2) {
        super(valor, valor2);
    }
    
    multiplicar(valor, valor2) {
        return this.valor * this.valor2;
    }
}

class Division extends Operaciones {
    constructor(valor, valor2) {
        super(valor, valor2);
    }
    
    dividir(valor, valor2) {
        return this.valor / this.valor2;
    }
}

function sumaDeNumeros() {
    var n1 = document.getElementById("numero1").value;
    var n2 = document.getElementById("numero2").value;
    //var result = parseInt(n1) + parseInt(n2);
    var result = new Operaciones(parseInt(n1), parseInt(n2));
    window.alert(result.sumar());

    document.getElementById("suma").innerHTML = "Resultado: " + result.sumar();
}

function restaDeNumeros() {
    var n1 = document.getElementById("numer1").value;
    var n2 = document.getElementById("numer2").value;
    //var result = parseInt(n1) - parseInt(n2);
    var result = new Resta(parseInt(n1), parseInt(n2));
    window.alert(result.restar());

    document.getElementById("resta").innerHTML = "Resultado: " + result.restar();
}

function multiplicacionDeNumeros() {
    var n1 = document.getElementById("numero1").value;
    var n2 = document.getElementById("numero2").value;
    //var result = parseInt(n1) * parseInt(n2);
    var result = new Multiplicacion(parseInt(n1), parseInt(n2));
    window.alert(result.multiplicar());

    document.getElementById("multi").innerHTML = "Resultado: " + result.multiplicar();
}

function divisionDeNumeros() {
    var n1 = document.getElementById("numero1").value;
    var n2 = document.getElementById("numero2").value;
    //var result = parseInt(n1) / parseInt(n2);
    var result = new Division(parseInt(n1), parseInt(n2));
    window.alert(result.dividir());

    document.getElementById("divi").innerHTML = "Resultado: " + result.dividir();
}