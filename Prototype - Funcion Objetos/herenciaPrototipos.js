
/** Herencia de prototipos */
function Programador(nombre, lenguaje_programacion){
    this.nombre = nombre;
    this.lenguaje_programacion = lenguaje_programacion;

    this.informacion = function(){
        return "Programador " + this.nombre + "\nLenguaje con el que trabaja " + 
                this.lenguaje_programacion;
    }
}

function Backend(nombre, lenguaje_programacion, sueldo){
    this.super = Programador; //llamando al objeto funcion padre
    this.super(nombre, lenguaje_programacion); //constructor padre
    this.sueldo = sueldo;

    this.cargarSueldo = function(){
        return this.nombre + " su sueldo es " + this.sueldo;
    }
}

//Instancia
let programador1 = new Backend("Karla Soliz","c#", 1000);
console.log(programador1.informacion());
console.log(programador1.cargarSueldo());