/*
* Autor: Paco Gomez
* Actividad: Mostrar variables
*/

//Inicializacion de variables
var numero=34;
var frase="Paco la tiene corta";
var semaforo=false;

//REalizar multiplicacion
var a=3;
var b=11.5;
var resultado=0;
var contador=0;

console.log("El valor de resultado es "+resultado);
//Operaciones
resultado=a*b;
console.log(contador);
contador--;
console.log(contador);

//Sacara por pantalla
console.log("El numero guardado es: "+numero);
console.log(frase);
console.log(semaforo);
console.log("La multiplicación de a("+a+") y b("+b+") es "+resultado);
if (resultado>40) {
  alert("Resultado por encima de 40");
}else{
  alert("Resultado por debajo de 40");
  alert("Que si que esta por debajo capullo");

}
alert("FIN");
