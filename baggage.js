import { onTruck, expandTruck, score, round} from './truck.js'
import { randomGridPosition } from './grid.js'

let baggage = getRandomBaggagePosition()
const EXPANSION_RATE = 1
let notStarted = true

export function update() {
    if (onTruck(baggage)) {
        expandTruck(EXPANSION_RATE)
        baggage = getRandomBaggagePosition()
    }

}


export function render(gameBoard) {

    const baggageElement = document.createElement('div')
    baggageElement.style.gridRowStart = baggage.y
    baggageElement.style.gridColumnStart = baggage.x
    baggageElement.classList.add('baggage')
    gameBoard.appendChild(baggageElement)
}

function getRandomBaggagePosition() {
    let newBaggagePosition
    let number = parseInt(score.innerHTML)
    while (newBaggagePosition == null || onTruck(newBaggagePosition)) {
        
        newBaggagePosition = randomGridPosition()
        
    }
    
    if(parseInt(score.innerHTML) == 0)
    {
        return newBaggagePosition
    }    

    number += (15 * round)
    score.innerHTML = number.toString()
    
    return newBaggagePosition
}