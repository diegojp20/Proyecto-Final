const cantidad = document.querySelector(".cantIv").textContent;


const DetectarStock = () => {


  for (let i = 1; i <= cantidad; i++) {
 

    let num = ".stock tr:nth-child(" + i + ") td:nth-child(3)";
    let mov = document.querySelector(num);
    let cantStock = document.querySelector(num).textContent;

    switch (true) {
      //activo
      case cantStock >= 71 && cantStock <= 100:
        mov.className += "activo";

        break;
      case cantStock >= 51 && cantStock <= 70:
        mov.className += "normal";

        break;
      case cantStock >= 0 && cantStock <= 50:
        // Do something.
        mov.className += "critico";

        break;
    }
  }
};

//Contenido
const HomeContenido = () => {
  DetectarStock();
};
document.addEventListener("DOMContentLoaded", HomeContenido());


