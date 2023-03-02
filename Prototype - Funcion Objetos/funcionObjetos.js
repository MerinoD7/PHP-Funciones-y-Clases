/**
 * funciones son objetos
 */

let objetoPersona = {
    nombre: "Juan Soliz",
    edad: 20,

    obtenerNombre(){
        console.log(this.nombre + this.edad);
    }
}
//objetoPersona.obtenerNombre();

/** funciones constructoras => las funciones constructoras utilizan el operador new para instanciar */
function Persona(nombre, edad){
    this.nombre = nombre;
    this.edad = edad;

    this.obtenerInfomacion = function(){
        return "Nombre: " + this.nombre + "\nEdad: " + this.edad;
    }
}

console.log(Persona.prototype); //El protoype del objeto Persona esta vacio {}
/*instanciando el objeto funcion*/
let persona1 = new Persona("Carlos",24);
console.log(persona1.obtenerInfomacion());

let persona2 = new Persona("Samuel",30);
console.log(persona2.obtenerInfomacion());


/** factory function => funcion de fabrica */
function Usuario(usuario, password){
    const user = {}

    user.usuario = usuario;
    user.password = password;

    user.obtenerUsuario = function(){
        return "Usuario: " + user.usuario + "\nPassword: " + user.password;
    }
}

/*instancia del objeto - funcion de fabrica */
let usuario1 = Usuario("duvan@gmail.com","12345");
console.log(usuario1.obtenerUsuario());

let usuario2 = Usuario("david@hotmail.com","123456");
console.log(usuario2.obtenerUsuario());

/** funcion flecha */
const correo = () => {

}