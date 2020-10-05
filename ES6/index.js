
// Convert ke Arrow Function
golden = () =>"This is Golden"
golden()

// Object Literals ES6
function newFunction(firstName, lastName){
    return {
      firstName,
      lastName,
      fullName(){
        console.log(firstName + " " + lastName)
      }
    }
  }
  //Driver Code 
  newFunction("Ardan", "Hilal").fullName()

// Destructuring ES6
const newObject = {
  firstName: "Harry",
  lastName: "Potter Holt",
  destination: "Hogwarts React Conf",
  occupation: "Deve-wizard Avocado",
  spell: "Vimulus Renderus!!!"
}

let {firstName, lastName, destination, occupation, spell} = newObject

console.log(firstName, lastName, destination, occupation, spell)

// Array Spreading ES6
const west = ['Will', 'Chris', 'Sam', 'Holly']
const east = ["Gill", "Brian", "Noel", "Maggie"]
const combine = [...west, ...east]

console.log(combine)

// Template Literals ES6
const planet = "earth"
const view = "glass" 
let before = `Lorem ipsum dolor, ${planet} sit amet consectetur adipisicing elit. A molestias aspernatur, ${view} quia incidunt ad aliquid minima, nemo qui laborum, veritatis nesciunt!`


console.log(before)