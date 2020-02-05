<?php include_once 'includes/header.php'; ?>

    <section id="jumbotron" style="background-image: url(public/images/ile-de-versaille.png);">
        <div class="jumbotron">
            <h1><span class="highlight-word"> Nos tarifs</span></h1>
        </div>
    </section>
    <section id="tarifs">
        <div class="container">
            <h2>Nos tarifs</h2>
            <div class="prices">
                <div id="card" class="card">
                    <h1 class="card-title">Basic</h1>
                    <div class="card-body">
                        <p class="price"><span class="price-symbol">39</span>€</p>
                        <p class="price-tag">loral ipsum loral</p>
                    </div>
                    <ol class="card-list">
                        <li class="card-list-item">Ipsum ipsum ipsum</li>
                        <li class="card-list-item">Ipsum loral</li>
                        <li class="card-list-item">Loral ipsum loral loral</li>
                    </ol>
                    <button class="card-button"
                            type="button"
                            value="select"
                            onclick="alert('Basic Selected');">Select
                    </button>
                </div>

                <div id="advanced" class="card">
                    <h1 class="card-title">Advanced</h1>
                    <div class="card-body">
                        <p class="price"><span class="price-symbol">239</span>€</p>
                        <p class="price-tag">loral ipsum loral</p>
                    </div>
                    <ol class="card-list">
                        <li class="card-list-item">Ipsum ipsum ipsum</li>
                        <li class="card-list-item">Ipsum loral</li>
                        <li class="card-list-item">Loral ipsum loral loral</li>
                    </ol>
                    <button class="card-button"
                            type="button"
                            value="select"
                            onclick="alert('Advanced Selected');">Select
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="pre-footer">
        <div class="container">
            <h2>Vous souhaitez plus d'informations ?</h2>
            <p>Vous avez déjà visiter nos pages Facebook et Instagram ? Vous avez aussi essayer de venir nous voir mais
                personnes n'étais disponible ? Envoyez donc nous un email comportant toutes les informations nécessaires à
                accomplir votre demande dans les plus brefs délais (et oui nous sommes rapides !)</p>
            <button class="btn-primary">
                <a href="contact.php">Nous contacter</a>
            </button>
        </div>
    </section>
<?php include_once 'includes/footer.php'; ?>