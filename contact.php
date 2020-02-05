<?php include_once 'includes/header.php'; ?>

<section id="jumbotron" style="background-image: url(public/images/ile-de-versaille.png);">
    <div class="jumbotron">
        <h1><span class="highlight-word">Nous contacter !</span></h1>
    </div>
</section>

<section id="contact-form">
    <div class="container">

        <h2>Contactez-nous !</h2>
        <h4 style="text-align:center">Nous adorons avoir de vos nouvelles !</h4>

        <form class="form">
            <div class="grid-2">
                <div class="styled-input">
                    <input type="text" required/>
                    <label>Nom</label>
                </div>
                <div class="styled-input">
                    <input type="text" required/>
                    <label>Prénom</label>
                </div>
            </div>

            <div class="styled-input">
                <input type="text" required/>
                <label>Email</label>
            </div>

            <div class="styled-input">
                <input type="text" required/>
                <label>Numéro de téléphone</label>
            </div>

            <div class="styled-input">
                <input type="text" required/>
                <label>Nom de l'entreprise</label>
            </div>

            <div class="styled-input">
                <textarea required></textarea>
                <label>Message</label>
            </div>

            <div class="form-group">
                <p>Je suis déjà client</p>
                <input type="checkbox" id="choice1" name="fruit-1">
                <label for="choice1">Oui</label>
                <input type="checkbox" id="choice2" name="fruit-2">
                <label for="choice2">Non</label>
                <input type="checkbox" id="choice3" name="fruit-3">
                <label for="choice3">Je souhaite en faire partie 😍</label>
            </div>

            <div class="button-container">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>

    </div>
</section>

<section id="pre-footer" class="section">
    <div class="container">
        <h2>Vous souhaitez plus d'informations ?</h2>
        <p>Vous avez déjà visiter nos pages Facebook et Instagram ? Vous avez aussi essayer de venir nous voir mais
            personnes n'étais disponible ? Envoyez donc nous un email comportant toutes les informations nécessaires
            à
            accomplir votre demande dans les plus brefs délais (et oui nous sommes rapides !).</p>
        <div class="button-container">
            <a class="btn btn-primary" href="contact.php">Nous contacter</a>
        </div>
    </div>
</section>

<?php include_once 'includes/footer.php'; ?>
