<div>
    <label for="">CEP: </label>
</div>
<div>
    <button id="buscar"> Buscar </button>
</div>
<div>
    <p>Compra: <span id="compra"> </span></p>
    <p>Venda: <span id="venda"> </span></p>
    <p>Maxima: <span id="máxima"> </span></p>
      <p>Minimo: <span id="mínimo"> </span></p>
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
