function recarrega(){
    location.reload();
}

function muda(elemento){
    
    jogador = document.getElementById('valor');
    
    if (jogador.innerHTML == 'X') {
        let player = document.getElementById('troca_'+elemento);
        let HTMLTemporario = player.innerHTML;
        
        if (HTMLTemporario != "" || HTMLTemporario.length >= 1) {
            vencedor();
            Swal.fire({
                position: 'center',
                html: '<span  class="player_ativo">Já Foi escolhido</span>',
                showConfirmButton: false,
                timer: 1000
              });
        }else{
           

              let HTMLNovo = 'X'; 
              HTMLTemporario = HTMLNovo + HTMLTemporario;
              player.innerHTML = HTMLTemporario;
              jogador.innerHTML = "0";
      
              vencedor();
              Swal.fire({
                  position: 'center',
                  title: '<span  class="player_ativo">Jogador 0</span>',
                  showConfirmButton: false,
                  timer: 1000
                });

        }
    }else{
        let player = document.getElementById('troca_'+elemento);
        let HTMLTemporario = player.innerHTML;

        if (HTMLTemporario != "" || HTMLTemporario.length >= 1) {
            vencedor();
            Swal.fire({
                position: 'center',
                title: '<span  class="player_ativo">Já Foi escolhido</span>',
                showConfirmButton: false,
                timer: 1000
              });
        }else{
          
            let HTMLNovo = '0'; 
            HTMLTemporario = HTMLNovo + HTMLTemporario;
            player.innerHTML = HTMLTemporario;
            jogador.innerHTML = "X";
            vencedor();

            Swal.fire({
                position: 'center',
                title: '<span  class="player_ativo">Jogador X</span>',
                showConfirmButton: false,
                timer: 1000
            });
        }

    }
    
      
}  

function vencedor(){
    let array = [];
    empatou =[];
    for (let i = 1; i <= 9; i++) {
        array[i] = document.getElementById('troca_'+ i).innerHTML;
        if (array[i] != "") {
            empatou.push(array[i]);
            if (empatou.length == 9) {
                Swal.fire('Empatou');
            }
        }
        
    }


    //primeira linha 
    if(array[1] == 'X' && array[2] == 'X' && array[3] == 'X' ){
        Swal.fire('Voce Venceu Jogador X');
        document.getElementById('troca_1').style.backgroundColor = "#03F035";
        document.getElementById('troca_2').style.backgroundColor = "#03F035";
        document.getElementById('troca_3').style.backgroundColor = "#03F035";

    }else if(array[1] == '0' && array[2] == '0' && array[3] == '0' ){
        Swal.fire('Voce Venceu Jogador 0');
        document.getElementById('troca_1').style.backgroundColor = "#03F035";
        document.getElementById('troca_2').style.backgroundColor = "#03F035";
        document.getElementById('troca_3').style.backgroundColor = "#03F035";
    }

    //segunda linha 
    if(array[4] == 'X' && array[5] == 'X' && array[6] == 'X' ){
        Swal.fire('Voce Venceu Jogador X');
        document.getElementById('troca_4').style.backgroundColor = "#03F035";
        document.getElementById('troca_5').style.backgroundColor = "#03F035";
        document.getElementById('troca_6').style.backgroundColor = "#03F035";

    }else if(array[4] == '0' && array[5] == '0' && array[6] == '0' ){
        Swal.fire('Voce Venceu Jogador 0');
        document.getElementById('troca_4').style.backgroundColor = "#03F035";
        document.getElementById('troca_5').style.backgroundColor = "#03F035";
        document.getElementById('troca_6').style.backgroundColor = "#03F035";
    }


    //terceira linha 
    if(array[7] == 'X' && array[8] == 'X' && array[9] == 'X' ){
        Swal.fire('Voce Venceu Jogador X');
        document.getElementById('troca_7').style.backgroundColor = "#03F035";
        document.getElementById('troca_8').style.backgroundColor = "#03F035";
        document.getElementById('troca_9').style.backgroundColor = "#03F035";

    }else if(array[7] == '0' && array[8] == '0' && array[9] == '0' ){
        Swal.fire('Voce Venceu Jogador 0');
        document.getElementById('troca_7').style.backgroundColor = "#03F035";
        document.getElementById('troca_8').style.backgroundColor = "#03F035";
        document.getElementById('troca_9').style.backgroundColor = "#03F035";
    }


    //1 coluna 
    if(array[1] == 'X' && array[4] == 'X' && array[7] == 'X' ){
        Swal.fire('Voce Venceu Jogador X');
        document.getElementById('troca_1').style.backgroundColor = "#03F035";
        document.getElementById('troca_4').style.backgroundColor = "#03F035";
        document.getElementById('troca_7').style.backgroundColor = "#03F035";

    }else if(array[1] == '0' && array[4] == '0' && array[7] == '0' ){
        Swal.fire('Voce Venceu Jogador 0');
        document.getElementById('troca_1').style.backgroundColor = "#03F035";
        document.getElementById('troca_4').style.backgroundColor = "#03F035";
        document.getElementById('troca_7').style.backgroundColor = "#03F035";
    }
    
    //2coluna
    if(array[2] == 'X' && array[5] == 'X' && array[8] == 'X' ){
        Swal.fire('Voce Venceu Jogador X');
        document.getElementById('troca_2').style.backgroundColor = "#03F035";
        document.getElementById('troca_5').style.backgroundColor = "#03F035";
        document.getElementById('troca_8').style.backgroundColor = "#03F035";

    }else if(array[2] == '0' && array[5] == '0' && array[8] == '0' ){
        Swal.fire('Voce Venceu Jogador 0');
        document.getElementById('troca_2').style.backgroundColor = "#03F035";
        document.getElementById('troca_5').style.backgroundColor = "#03F035";
        document.getElementById('troca_8').style.backgroundColor = "#03F035";
    }

    //3 coluna 
    if(array[3] == 'X' && array[6] == 'X' && array[9] == 'X' ){
        Swal.fire('Voce Venceu Jogador X');
        document.getElementById('troca_3').style.backgroundColor = "#03F035";
        document.getElementById('troca_6').style.backgroundColor = "#03F035";
        document.getElementById('troca_9').style.backgroundColor = "#03F035";

    }else if(array[3] == '0' && array[6] == '0' && array[9] == '0' ){
        Swal.fire('Voce Venceu Jogador 0');
        document.getElementById('troca_3').style.backgroundColor = "#03F035";
        document.getElementById('troca_6').style.backgroundColor = "#03F035";
        document.getElementById('troca_9').style.backgroundColor = "#03F035";
    }

    //1 cruzado 
    if(array[1] == 'X' && array[5] == 'X' && array[9] == 'X' ){
        Swal.fire('Voce Venceu Jogador X');
        document.getElementById('troca_1').style.backgroundColor = "#03F035";
        document.getElementById('troca_5').style.backgroundColor = "#03F035";
        document.getElementById('troca_9').style.backgroundColor = "#03F035";

    }else if(array[1] == '0' && array[5] == '0' && array[9] == '0' ){
        Swal.fire('Voce Venceu Jogador 0');
        document.getElementById('troca_1').style.backgroundColor = "#03F035";
        document.getElementById('troca_5').style.backgroundColor = "#03F035";
        document.getElementById('troca_9').style.backgroundColor = "#03F035";
    }

    // segundo cruzado 
    if(array[3] == 'X' && array[5] == 'X' && array[7] == 'X' ){
        Swal.fire('Voce Venceu Jogador X');
        document.getElementById('troca_3').style.backgroundColor = "#03F035";
        document.getElementById('troca_5').style.backgroundColor = "#03F035";
        document.getElementById('troca_7').style.backgroundColor = "#03F035";

    }else if(array[3] == '0' && array[5] == '0' && array[7] == '0' ){
        Swal.fire('Voce Venceu Jogador 0');
        document.getElementById('troca_3').style.backgroundColor = "#03F035";
        document.getElementById('troca_5').style.backgroundColor = "#03F035";
        document.getElementById('troca_7').style.backgroundColor = "#03F035";
    }



   
}