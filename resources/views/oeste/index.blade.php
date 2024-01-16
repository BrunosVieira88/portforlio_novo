<x-layout title="Colina da Fumaca">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-2 card">
                    <img src="img/batalhapeloleste.jpeg" style="width: 100%;height:50%;" alt="">
                </div>
                <div class="custom1">
                    <div class="custom">
                        <h2>Faroeste</h2>
                        <p id="paragraph1"></p>
                        <p id="paragraph2"></p>
                        <p id="paragraph3"></p>
                        <p id="paragraph4"></p>

                    </div>
                    <img src="img/capawestern.jpeg" class="custom-image" alt="">
                </div>

            </div>
        </div>
    </section>
</x-layout>
<script>
    function typeWriterEffect(text, elementId, speed, callback) {
  let i = 0;
  const textLength = text.length;
  const element = document.getElementById(elementId);

  const timer = setInterval(() => {
    if (i < textLength) {
      element.innerHTML += text.charAt(i);
      i++;
    } else {
      clearInterval(timer);
      if (callback) {
        callback(); // Chama a função de callback quando a digitação estiver completa
      }
    }
  }, speed);
}
    const paragraphs = [
  {
    text: "Além do extenso deserto das Terras Secas, situado nas Terras de Ninguém, encontra-se a misteriosa Colina de Vapor. Em meio à engrenagem constante da vida, surge um forasteiro de Calhes, uma nação restrita e hostil a estrangeiros. A sua jornada através do deserto revela um passado sombrio e uma nação em guerra, onde Nordia e Calhes disputam a supremacia.",
    id: "paragraph1",
    speed: 70
  },
  {
    text: "Ao chegar na Colina de Vapor, o forasteiro depara-se com uma cidade dominada por uma família poderosa, detentora do controle sobre as engrenagens da vida cotidiana. A vila, envolta em fumaça e enigmas, torna-se palco de intrigas políticas e tecnologias proibidas. Os habitantes, acostumados ao ritmo implacável das máquinas, veem no forasteiro uma ameaça desconhecida.",
    id: "paragraph2",
    speed: 70
  },
  {
    text: "Enquanto a guerra entre Calhes e Nordia projeta sua sombra sobre as Terras de Ninguém, o forasteiro se vê enredado em uma teia de segredos. A família que governa a cidade do vapor esconde mistérios que remontam a tempos esquecidos. Lealdades são testadas, alianças improváveis se formam, e o destino da Colina de Vapor está intrinsecamente ligado às escolhas do forasteiro.",
    id: "paragraph3",
    speed: 70
  },
  {
    text: "\"Os Segredos Além do Deserto\" é uma epopeia steampunk que mergulha nas profundezas de uma cidade onde a confiança é tão frágil quanto a névoa que paira sobre as engrenagens. Nessa terra de máquinas e mistérios, o forasteiro luta para descobrir a verdade por trás das sombras que assolam a Colina de Vapor, desvendando segredos que podem redefinir o curso da guerra e da própria história das Terras de Ninguém.",
    id: "paragraph4",
    speed: 70
  }
];

function typeWriterParagraphs(paragraphs, index) {
  if (index < paragraphs.length) {
    const paragraph = paragraphs[index];
    typeWriterEffect(paragraph.text, paragraph.id, paragraph.speed, () => {
      typeWriterParagraphs(paragraphs, index + 1); 
    });
  }
}

typeWriterParagraphs(paragraphs, 0);
</script>

<style>
    body {
        background-image: url('img/ColinaDeVapor.jpeg');
    }

    .custom-image {
        width: 70%;
        height: 50%;
        opacity: 1 !important;
    
    }

    .custom {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -10%);
        background-color: #FFF;
        border: solid black 1px;
        padding: 1%;
        box-shadow: 2px 2px 2px black;
        opacity: 0.8;
    }
    .custom1{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -10%);
        border: solid black 1px;
        padding: 1%;
        box-shadow: 2px 2px 2px black;
    }  
    .custom h2 {
        opacity: 1;
        font-size: 24px;
        font-weight: bold;
        color: rgb(0, 0, 0);
        text-shadow: 1px 2px 2px rgb(236, 240, 6);

    }

    .custom p {
        opacity: 1 !important;
        font-size: 20px;
        font-weight: bold;
        color: rgb(0, 0, 0);
        text-shadow: 1px 2px 2px rgb(236, 240, 6);

    }
</style>