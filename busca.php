<div>
    <label for="">Cep: </label>
</div>
<div>
    <button id="buscar"> Buscar </button>
</div>
<div>
    <p>compra: <span id="compra"> </span></p>
    <p>venda: <span id="venda"> </span></p>
    <p>maxima: <span id="máxima"> </span></p>
      <p>minimo: <span id="mínimo"> </span></p>
</div>
 <script type="text/javascript">
  
  document.querySelector("#buscar").addEventListener('click',function() {
        const opcoes = {
            method: 'GET',
            mode: 'cors',
            cache: 'default'
        }

        fetch('https://economia.awesomeapi.com.br/json/last/USD-BRL', opcoes)
        .then(

             response => { response.json()
                .then(data => {
                    document.querySelector("#compra").textContent = data['USDBRL']['bid'];
                    document.querySelector("#venda").textContent = data['USDBRL']['ask'];
                    document.querySelector("#máxima").textContent = data['USDBRL']['high'];
                    document.querySelector("#mínimo").textContent = data['USDBRL']['low'];
                });
            }
        )
    });
 </script>

 <!-- oi é o meu codigo bonito -->