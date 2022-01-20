const canvas = document.getElementById ("canvas")
const ctx = canvas.getContext("2d")

let cw = window.innerWidth
let ch = window.innerHeight

let charArr = ['a','b','c','d','e','f','g','h','j','k','l','m','n','o','p','q','r','s','t','y','v','w','x','y','z',
    'A','B','C','D','E','F','G','H','J','K','L','M','N','O','P','Q','R','S','T','Y','V','W','X','Y','Z',
    'а','б','в','г','д','е','ё','ж','з','и','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ш','щ','ъ','ь','э','ю','я',
    'А','Б','В','Г','Д','Е','Ё','Ж','З','И','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ш','Щ','Ъ','Ь','Э','Ю','Я',
    '1','2','3','4','5','6','7','8','9','#','$','%','^','&','?','/',';','=','+','!']

let maxCharCount = 1000000000000000
let fallingCharArray = []
let fontSize = 10

let maxColumns = cw/fontSize
canvas.width = cw
canvas.height = ch

let frames = 0

class FallingChar {
    constructor(x, y) {
        this.x = x;
        this.y = y
    }
    draw(ctx) {
        this.value = charArr[Math.floor((Math.random() * (charArr.length - 1)))]
        this.speed = Math.random() * fontSize * 3 / 4 + fontSize * 3 / 4

        ctx.fillStyle = "rgba(0,255,0)"
        ctx.font = fontSize + "px san-serif"
        ctx.fillText(this.value, this.x, this.y)
        this.y += this.speed;
    }
}

let update = () => {
    if(fallingCharArray.length < maxCharCount) {
        let fallingChar = new FallingChar(Math.floor(Math.random() * maxColumns) * fontSize, Math.random() * ch/2 - 50)
        fallingCharArray.push(fallingChar)
    }
    ctx.fillStyle = "rgba(0,0,0,0.05)"
    ctx.fillRect(0,0,cw,ch)
    for (let i = 0; i < fallingCharArray.length && frames % 2 == 0; i++) {
        fallingCharArray[i].draw(ctx);
    }
    requestAnimationFrame(update);
    frames++;
};
update()