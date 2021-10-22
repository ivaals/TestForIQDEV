
<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>TestForIQDEV</title>
   
</head>

<body>

<header>

    <p>IQ DEV Deposit Calculator</p>

</header>

<main>
    <h1 align="center"> Депозитный калькулятор</h1><br>
    <p>Калькулятор депозитов позволяет рассчитать ваши доходы после внесения суммы на счет в банке по определенному тарифу.</p>

    <form id="formx" onsubmit="call()">
        <div class="left-column" >
            <div class="elementL">
                <input type="text" id="DateOpen" placeholder="Дата открытия">
            </div><br>

            <div class="elementL">
                <input type="text" id="SumStart" placeholder="Сумма вклада">
            </div><br>

            <div class="elementL">
                <input type="button" id="hider" value="Ежемесячное пополнение вклада" style="height: 56px; width: 308px">
            </div>

        </div>

        <div class="right-column" >
            <div class="elementR">
                <input type="text" id="Time" placeholder="Срок вклада" style="height:50px;width: 225px;">
                <select name="Time" style="height: 56px;width: 70px;">
                    <option value="Месяц">Месяц</option>
                    <option value="Год">Год</option>
                </select>
            </div>

            <div class="elementR">
                <input type="text" id="Percent" placeholder="Процентная ставка, %годовых">
            </div>

            <div class="elementR">
                <div id="HideEl">
                <input type="text" id="SumUp" placeholder="Сумма пополнения вклада">
                </div>
            </div>
        </div>

        <input value="Рассчитать" type="submit">
    </form>

    <div id="results"> </div>

    <script>
        document.getElementById('hider').onclick = function() {
            document.getElementById('HideEl').hidden = !document.getElementById('HideEl').hidden;
        }
    </script>


    
</main>

<footer>

    <p>Сабельников Иван</p>
    <p><a id="vk" href="https://vk.com/antitiming">Вконтакте</a></p>

</footer>

</body>
</html>
