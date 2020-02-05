<?php include_once 'includes/header.php'; ?>

<section id="jumbotron" style="background-image: url(public/images/ile-de-versaille.png);">
    <div class="jumbotron">
        <h1>Nous contacter !</h1>
    </div>
</section>
<div class="container">
    <div class="row">
        <h2><strong>Contactez-nous !</strong></h2>
    </div>
    <div class="row">
        <h4 style="text-align:center">Nous adorons avoir de vos nouvelles !</h4>
    </div>
    <div class="row input-container">
        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" required/>
                <label>Nom</label>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
                <input type="text" required/>
                <label>Prénom</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" required/>
                <label>Email</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" required/>
                    <label>Numéro de téléphone</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" required/>
                <label>Nom de l'entreprise</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="styled-input wide">
                <textarea required></textarea>
                <label>Message</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="btn-lrg submit-btn">Envoyer</div>
        </div>
    </div>
</div>

<section id="pre-footer">
    <div class="container">
        <h2>Vous souhaitez plus d'informations ?</h2>
        <p>Vous avez déjà visiter nos pages Facebook et Instagram ? Vous avez aussi essayer de venir nous voir mais
            personnes n'étais disponible ? Envoyez donc nous un email comportant toutes les informations nécessaires à
            accomplir votre demande dans les plus brefs délais (et oui nous sommes rapides !).</p>
        <button class="btn-primary">
            <a href="contact.php">Nous contacter</a>
        </button>
    </div>
</section>
<?php include_once 'includes/footer.php'; ?>
