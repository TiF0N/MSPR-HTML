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
                    <h1 class="card-title">BASIC</h1>
                    <div class="card-body">
                        <p class="price"><span class="price-symbol">39</span>€</p>
                        <p class="price-tag">/JOUR TTC</p>
                    </div>
                    <ol class="card-list">
                        <li class="card-list-item">Accès au restaurant "Zenitude"</li>
                        <li class="card-list-item">Participation au "ZenEvent"</li>
                        <li class="card-list-item">Coaching personallisé</li>
                    </ol>
                    <button class="card-button"
                            type="button"
                            value="select"
                            onclick="alert('Basic Selected');">GO
                    </button>
                </div>

                <div id="advanced" class="card">
                    <h1 class="card-title">PRO</h1>
                    <div class="card-body">
                        <p class="price"><span class="price-symbol">239</span>€</p>
                        <p class="price-tag">/MOIS TTC</p>
                    </div>
                    <ol class="card-list">
                        <li class="card-list-item">Accès zone zen</li>
                        <li class="card-list-item">Accès espace relaxation</li>
                        <li class="card-list-item">Accès conférences privées</li>
                    </ol>
                    <button class="card-button"
                            type="button"
                            value="select"
                            onclick="alert('Advanced Selected');">GO
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
            <div class="button-container">
                <a class="btn btn-primary" href="contact.php">Nous contacter</a>
            </div>
        </div>
    </section>
<?php include_once 'includes/footer.php'; ?>