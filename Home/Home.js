var imgs = []
var slider
var imgAtual
var maxImg
var tmp

function preCarregamento() {
  var s = 1
  for (var i = 0; i < 2; i++) {
    imgs[i] = new Image()
    imgs[i].src = '../assets/img/' + s + '.png'
    s++
  }
}

function carregarImg(img) {
  slider.style.backgroundImage = "url('" + imgs[img].src + "')"
}

function inicia() {
  preCarregamento()
  imgAtual = 0
  maxImg = imgs.length - 1
  slider = document.querySelector('.container__slide')
  carregarImg(imgAtual)
  tmp = setInterval(troca, 3000)
}

function troca() {
  imgAtual++
  if (imgAtual > maxImg) {
    imgAtual = 0
  }
  carregarImg(imgAtual)
}

window.addEventListener('load', inicia)
