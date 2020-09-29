import { getInputDirection } from "./input.js"

const countDown = document.querySelector('#timer-output')
export const score     = document.querySelector('#score-output')

export const TRUCK_SPEED = 5
let gameStarted = false;
let threeMinutes = 10
export let round = 1

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
    let count = 1;
    truckBody.forEach(segment => {
        if(count === 1)
        {
            const truckElement = document.createElement('div')
            truckElement.style.gridRowStart = segment.y
            truckElement.style.gridColumnStart = segment.x
            truckElement.classList.add('truck')
            gameBoard.appendChild(truckElement)
            count++;
        }
        else
        {
            if(gameStarted === false)
            {
                startTimer(threeMinutes, countDown)
                gameStarted = true
            }
            const truckElement = document.createElement('div')
            truckElement.style.gridRowStart = segment.y
            truckElement.style.gridColumnStart = segment.x
            truckElement.classList.add('car')
            gameBoard.appendChild(truckElement)
        }
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

function startTimer(duration, display) {
    let num = 0
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        
        num = parseInt(score.innerHTML)
        num += 1
        score.innerHTML = num.toString()
        if (--timer <= -1) {
            round++
            timer = duration
            if(round == 6)
            {               
                if(confirm("You Won!"))
                {
                    location.reload()
                }    
                else
                {
                    window.location = '/'  
                }          
            }
        }
    }, 1000);
}