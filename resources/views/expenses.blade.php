<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../../vendors/expenses/style.css">
  </head>
  <body>
    <h2>Gastos</h2>

    <div class="container">
      <h4>Balanço</h4>
      <h1 id="balance">€0.00</h1>

      <div class="inc-exp-container">
        <div>
          <h4>Receita</h4>
          <p id="money-plus" class="money plus">+€0.00</p>
        </div>
        <div>
          <h4>Gasto</h4>
          <p id="money-minus" class="money minus">-€0.00</p>
        </div>
      </div>

      <h3>Registo</h3>
      <ul id="list" class="list">
        <!-- <li class="minus">
          Cash <span>-$400</span><button class="delete-btn">x</button>
        </li> -->
      </ul>

      <h3>Adicionar transação</h3>
      <form id="form">
        <div class="form-control">
          <label for="text">Text</label>
          <input type="text" id="text" placeholder="Enter text..." />
        </div>
        <div class="form-control">
          <label for="amount"
            >Montante <br />
            (negativo - gasto, positivo - receita)</label
          >
          <input type="number" id="amount" placeholder="Enter amount..." />
        </div>
        <button class="btn">Adicionar transação</button>
      </form>
    </div>
    <script src="../../vendors/expenses/script.js"></script>

    <div class="card-body"><div class="col-md-12 text-center">
      <a href="{{ URL::previous() }}">Go Back</a>
    </div> </div>

  </body>
</html