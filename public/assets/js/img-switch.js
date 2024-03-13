const image = document.querySelector('.perfil-img-content'),
input = document.querySelector('#perfil-img')

input.addEventListener('change', () => {
    image.src = URL.createObjectURL(input.files[0])
})

document.addEventListener("DOMContentLoaded", function() {
    const perfilImgContent = document.querySelector(".perfil-img-content");
    const perfilImgInput = document.getElementById("perfil-img");
  
    // Quando a imagem é clicada, aciona o clique no input de arquivo
    perfilImgContent.addEventListener("click", function() {
      perfilImgInput.click();
    });
  
    // Quando um arquivo é selecionado, atualize a exibição da imagem, se desejar
    perfilImgInput.addEventListener("change", function() {
      const files = perfilImgInput.files;
      if (files.length > 0) {
        const file = files[0];
        if (file.type.startsWith("image/")) {
          const reader = new FileReader();
          reader.onload = function(e) {
            perfilImgContent.src = e.target.result;
          };
          reader.readAsDataURL(file);
        }
      }
    });
  });