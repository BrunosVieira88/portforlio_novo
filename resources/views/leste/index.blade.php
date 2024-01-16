<x-layout title="Revolução das Memórias">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="p-2 card">
                    <img src="img/newCasteloBruxo.jpeg" style="width: 100%;height:50%;" alt="">
                </div>
                <div class="custom1">
                    <div class="custom">
                        <h2>Revolução das Memórias: Silêncio Mágico</h2>
                        <p id="paragraph1"></p>
                        <p id="paragraph2"></p>
                        <p id="paragraph3"></p>
                        <p id="paragraph4"></p>
                    </div>
                    <img src="img/CasteloBruxo.png" class="custom-image" alt="">
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
    text: "",
    id: "paragraph1",
    speed: 70
  },
  {
    text: "Megan decidiu vir ao Brasil para investigar um aumento no contrabando de plantas mágicas que estava afetando diretamente o fluxo para o Reino Unido. Ao desembarcar, entretanto, ela se viu envolvida em uma intricada rede de intriga e conspirações por parte do governo brasileiro. Descobriu-se que uma série de cidadãos da comunidade bruxa estava perdendo suas memórias de forma suspeita.",
    id: "paragraph2",
    speed: 70
  },
  {
    text: "Acompanhada por um astuto auror chamado Carlos e um prisioneiro revolucionário de nome Arthur Vieira, Megan começou a desvendar o emaranhado de segredos que cercava o Ministério da Magia brasileiro. Conforme a trama se desenrolava, eles perceberam que estavam imersos em um complexo jogo de conspirações que poderiam abalar as estruturas do mundo bruxo.",
    id: "paragraph3",
    speed: 70
  },
  {
    text: "Enquanto isso, um jovem bruxo chamado Miguel iniciava seu primeiro ano em Castelo Bruxo, completamente alheio às mudanças tumultuadas que estavam ocorrendo nos bastidores. Contudo, seu destino estava prestes a se entrelaçar com os eventos que se desenrolavam no cenário mágico do Brasil",
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
        background-image: url('img/estrelados.jpg');
    }

    .custom-image {
        width: 100%;
        height: 80%;
        opacity: 1 !important;
    
    }

    .custom {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: absolute;
        width: 90%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -10%);
        background-color: #FFF;
        border: solid black 1px;
        padding: 5%;
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