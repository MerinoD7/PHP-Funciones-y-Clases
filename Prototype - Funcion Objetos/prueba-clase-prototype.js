
class Estudiante{
    nombre
    apellido
    materia

    constructor(nombre, apellido, materia){
        this.nombre = nombre;
        this.apellido = apellido;
        this.materia = materia;
    }

    //asignamos
    informacion(){
        //code..
    }
}

/** funcion constructora */
function Estudiantes(nombre, apellido, materia){
    this.nombre = nombre;
    this.apellido = apellido;
    this.materia = materia;

    this.informacion = function(){
        return "Estudiante: " + this.nombre + " " + this.apellido + "\nMateria: " +
                this.materia;
    }
}

//Utilizando prototype para tener un metodo extra al objeto funcion Estudiantes
//Los protoype son propiedades que podemos asignar atributos y metodos a un objeto
Estudiantes.prototype.saludar = function(){
    return "Hola! soy " + this.nombre;
}

console.log(Estudiantes.prototype);

/** instancia del objeto funcion */
let estudiante1 = new Estudiantes("Rodrigo","Morales","Sociales");
console.log(estudiante1.informacion());
console.log(estudiante1.saludar());