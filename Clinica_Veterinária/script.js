// ----- Carrossel de Imagens -----
const imagens = document.querySelectorAll('.carousel img');
const btnPrev = document.getElementById('prev');
const btnNext = document.getElementById('next');
let index = 0;

function mostrarImagem(indice) {
  imagens.forEach((img, i) => {
    img.classList.remove('active');
    if (i === indice) img.classList.add('active');
  });
}

btnPrev.addEventListener('click', () => {
  index = (index === 0) ? imagens.length - 1 : index - 1;
  mostrarImagem(index);
});

btnNext.addEventListener('click', () => {
  index = (index === imagens.length - 1) ? 0 : index + 1;
  mostrarImagem(index);
});

// Mostra a primeira imagem ao carregar
mostrarImagem(index);

// ----- Botão Voltar ao Topo -----
const btnTopo = document.getElementById('btnTopo');

window.addEventListener('scroll', () => {
  if (window.scrollY > 300) {
    btnTopo.style.display = 'block';
  } else {
    btnTopo.style.display = 'none';
  }
});

btnTopo.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});