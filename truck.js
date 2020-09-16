import { getInputDirection } from "./input.js"

export const TRUCK_SPEED = 5
const truckBody = [
    { x: 11, y: 11 }
]
let newSegments = 0

export function update() {
    addSegments()
    const inputDirection = getInputDirection()
    for (let i = truckBody.length - 2; i >= 0; i--) {
        truckBody[i + 1] = {...truckBody[i] }
    }

    truckBody[0].x += inputDirection.x
    truckBody[0].y += inputDirection.y
}

export function render(gameBoard) {
    truckBody.forEach(segment => {
        const truckElement = document.createElement('div')
        truckElement.style.gridRowStart = segment.y
        truckElement.style.gridColumnStart = segment.x
        truckElement.classList.add('truck')
        gameBoard.appendChild(truckElement)
    })
}

export function expandTruck(amount) {
    newSegments += amount
}

export function onTruck(position, { ignoreHead = false } = {}) {
    return truckBody.some((segment, index) => {
        if (ignoreHead && index === 0) return false
        return equalPositions(segment, position)
    })
}

export function getTruckHead() {
    return truckBody[0]
}

export function truckCollision() {
    return onTruck(truckBody[0], { ignoreHead: true })
}

function equalPositions(pos1, pos2) {
    return pos1.x === pos2.x && pos1.y === pos2.y
}

function addSegments() {
    for (let i = 0; i < newSegments; i++) {
        truckBody.push({...truckBody[truckBody.length - 1] })
    }

    newSegments = 0
}