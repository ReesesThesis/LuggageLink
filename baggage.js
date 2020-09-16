import { onTruck, expandTruck } from './truck.js'
import { randomGridPosition } from './grid.js'

let baggage = getRandomBaggagePosition()
const EXPANSION_RATE = 1

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
    while (newBaggagePosition == null || onTruck(newBaggagePosition)) {
        newBaggagePosition = randomGridPosition()
    }
    return newBaggagePosition
}