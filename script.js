const h = document.getElementById("h")
const w = document.getElementById("w")

img1.onclick = function() {
    let i = Math.floor(Math.random() * 4) + 1
    img1.setAttribute("src", `images/${i}.jpg`)
}
img2.onclick = function() {
    let i = Math.floor(Math.random() * 4) + 1
    img2.setAttribute("src", `images/${i}.jpg`)
}
img3.onclick = function() {
    let i = Math.floor(Math.random() * 4) + 1
    img3.setAttribute("src", `images/${i}.jpg`)
}
img4.onclick = function() {
    let i = Math.floor(Math.random() * 4) + 1
    img4.setAttribute("src", `images/${i}.jpg`)
}
buttonrv.onclick = function() {
	img1.setAttribute("src", `images/4.jpg`)
	img2.setAttribute("src", `images/3.jpg`)
	img3.setAttribute("src", `images/2.jpg`)
	img4.setAttribute("src", `images/1.jpg`)
}
buttonst.onclick = function() {
	img1.setAttribute("src", `images/1.jpg`)
	img2.setAttribute("src", `images/2.jpg`)
	img3.setAttribute("src", `images/3.jpg`)
	img4.setAttribute("src", `images/4.jpg`)
}

buttonset.onclick = function() {
    img1.setAttribute("height", h.value)
    img1.setAttribute("width", w.value)
    img2.setAttribute("height", h.value)
    img2.setAttribute("width", w.value)
    img3.setAttribute("height", h.value)
    img3.setAttribute("width", w.value)
    img4.setAttribute("height", h.value)
    img4.setAttribute("width", w.value)
}