<html lang="sv">

<head>
    <title>Kombinationsselektorer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="d">
        <h1>Avkomlingsselektorn</h1>
        <h2 lang="en">(Descendant selector)</h2>

        <pre>
            #d p{
                color: red;
            }
        </pre>

        <p>Detta element påverkas.(Ett p-element som är avkomling - barn - till ett element med id='d')</p>
        <div>
            <p>Liksom detta. (Ett p-element som är avkomling - barnbarn - till ett element med id='d')</p>
            <div>
                <p>Och detta. (Ett p-element som är avkomling - barnbarnsbarn - till ett element med id='d')</p>
            </div>
        </div>
        <span>Men inte detta. (Ett span-element)</span>

        <p>Med avkomlingsselektorn når man element som är barn, barnbarn, barnbarnsbarn och så vidare, till
            något annat element.</p>
    </section>

    <section id="c">
        <h1>Barnselektorn</h1>
    </section>

    <section id="gs">
        <h1>Syskonselektorn</h1>
    </section>

    <section id="as">
        <h1>Angränsande-syskon-selektorn</h1>
    </section>
</body>

</html>