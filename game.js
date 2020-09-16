import { update as updateTruck, render as renderTruck, TRUCK_SPEED, getTruckHead, truckCollision } from '/truck.js'
import { update as updateBaggage, render as renderBaggage } from './baggage.js'
import { outsideGrid } from './grid.js'

let lastRenderTime = 0
let gameOver = false

const gameBoard = document.getElementById('game-board')

function main(currentTime) {
    if (gameOver) {
        if (confirm('You lost. Press ok to restart')) {
            window.location = '/'
        }
        return
    }

    window.requestAnimationFrame(main)
    const secondsSinceLastRender = (currentTime - lastRenderTime) / 1000
    if (secondsSinceLastRender < 1 / TRUCK_SPEED)
        return

    lastRenderTime = currentTime


    update()
    render()
}

window.requestAnimationFrame(main)

function update() {
    updateTruck()
    updateBaggage()
    checkDeath()
}

function render() {
    gameBoard.innerHTML = ''
    renderTruck(gameBoard)
    renderBaggage(gameBoard)
}

function checkDeath() {
    gameOver = outsideGrid(getTruckHead()) || truckCollision()
}