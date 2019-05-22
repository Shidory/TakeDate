<!doctype html>
<!--[if IE 9]> <html class="ie9 no-js supports-no-cookies" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js supports-no-cookies" lang="en">
<!--<![endif]-->

<!-- Mirrored from materialize-shopify-themes.myshopify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2019 07:16:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#7db557">
    <link rel="canonical" href="index.html">

    <title>

    </title>


    <link href="<?php echo base_url('')?>assets/css/gallery-materialize.mincfcd.css?0" rel="stylesheet"
        type="text/css" media="all" />

    <link href="<?php echo base_url('')?>assets/css/theme.scsscfcd.css?0" rel="stylesheet" type="text/css"
        media="all" />

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/20302737/digital_wallets/dialog">


    <script integrity="sha256-ZGMHgi9G7WU+Z7WiP2suSn84yzoN83sGf9nMWJhVHAw=" defer="defer"
        src="../cdn.shopify.com/s/assets/storefront/express_buttons-646307822f46ed653e67b5a23f6b2e4a7f38cb3a0df37b067fd9cc5898551c0c.js"
        crossorigin="anonymous"></script>
    <script integrity="sha256-6HOSr+Kf4wcoL05qrRLLS8wq/v1rf+vwtw7f0xX5aEw=" defer="defer"
        src="../cdn.shopify.com/s/assets/storefront/features-e87392afe29fe307282f4e6aad12cb4bcc2afefd6b7febf0b70edfd315f9684c.js"
        crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/materialize/js/materialize.min.js');?>"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link rel="stylesheet" href="<?php echo base_url('')?>assets/calendar/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/materialize/css/materialize.min.css');?>">

    <style>
        #shopify-section-header>nav,
        .gradient-back {
            background: rgb(221, 135, 182);
            background: linear-gradient(90deg, rgba(221, 135, 182, 1) 0%, rgba(4, 195, 159, 1) 100%);
        }

        .viollet {
            color: rgb(221, 135, 182);
        }

        .greener {
            color: #04c39f;
        }

        #semaine {
            height: 300px;
        }

        * {
            font-family: 'Quicksand', sans-serif;
        }

        #p {
            background: rgba(221, 135, 182, 0.4);
        }
        .mt-1{
            margin-top: 15px;
        }

        #p p {
            color: #fff;
            size: 30px;
        }

        #dates {
            padding: 10px 8px;
            position: relative;
            top: 35px;
        }

        #dates > div > ul > li {

            margin-left: 10%;

        }

        #arrows {
            position: relative;
            top: 10px;

        }

        .enter_entry > input {
            border: none;
        }

        textarea{
            border-color: #CACACA;
            padding: 10px;
            border-radius: 8px;
        }

        .fa-pencil {

            line-height: 0px;
            margin-top: -70px;

        }
        #not-all-day{
            margin-top: 20px;
        }
        #all-days-label, #all-days-icon{
            display: none;
        }

        input[type="number"]{
            height: 35px;
            border-radius: 8px;
        }

        #ignoreOverflow .btn{
            color: #04C39F;
            background: transparent;
            box-shadow: none;
            top: -17px;
            border-radius: 50%;
        }

        .entry {
            height: initial;
        }

        .delete_entry {
            text-align: right;
        }

        .enter_entry > input {
            padding: 0px 10px;
            margin: 0 20px auto;
        }
        .warning {
            padding: 7px 15px;
            background: #ff5353;
            border-radius: 10px;
            margin: 10px;

        }
        #shopify-section-footer{
            width: 100%;
        }
    </style>
</head>

<body id="materialize-shopify-themes" class="template-index white">
    <head>
        <script src="https://use.fontawesome.com/484df5253e.js"></script>
    </head>
    <div id="shopify-section-header" class="shopify-section">
        <nav class="nav-extended">
            <div class="nav-background">
                <div class="pattern active"
                    style="background-image: url('<?= base_url('') ?>assets/img/icon-seamless_ef568d79-394b-49ab-a3c5-128827d788e837cb.png?v=1496294246');">
                </div>
            </div>
            <div class="nav-wrapper container">
                <a href="index2.html" itemprop="url" class="brand-logo site-logo">
                    TakeDate
                </a>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">

                    <li class="site-nav--active active">
                        <a href="<?= base_url()?>" class="site-nav__link">Acceuil</a>
                    </li>
                    <li>
                        <a href="" class="site-nav__link">Rendez-Vous</a>
                    </li>
                    <li>
                        <a href="<?= base_url('entreprise')?>">
                            Entreprises
                        </a>
                    </li>
                    <li>
                        <a class="fullscreen-search" href="#">
                            <i class="material-icons">search</i>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('logout'); ?>" id="customer_login_link">Se deconnecter</a>
                    </li>
                    <li>
                        <a href="#profil" class="modal-trigger btn-floating right waves-effect btn-flat" style="margin-top: 20px;">
                            <div class="circle" style="background: rgba(15,15,15,0.3); margin-top: 2pxpx;">
                                <img src="<?= base_url('assets/img/avatar/avatar-7.png');?>" alt="" srcset="" class="circle right" style="margin-top: 0px;">
                            </div>
                            <i style="background-color : #00E676; height:7px; width : 7px; float:right; border-radius:100%; margin-top:-8px; margin-left:-20px;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div id="trade-info" class="modal">
            <div class="modal-content">
                <form method="post" action="#" id="create_customer" accept-charset="UTF-8"><input type="hidden" name="form_type"
                        value="create_customer" /><input type="hidden" name="utf8" value="✓" />
                    <div class="modal-content">
                        <div class="row center">
                            <a href="#">
                                <div id="trade-logo" class="col s12" style="background-image: url('rumeur-apple-realite-augmentee-conduite-autonome.jpg');">
                                    
                                </div>
                            </a>
                        </div>
                        <div class="input-field">
                            <label for="name">
                                Nom
                            </label>
                            <input type="text" name="name" id="name">
                        </div>

                        <div class="input-field">
                            <label for="phone">
                                Numero de téléphone
                            </label>
                            <input type="text" name="customer[last_name]" id="LastName">
                        </div>

                        <div class="input-field">
                            <label for="Email">
                                Email
                            </label>
                            <input type="email" name="email" id="Email" class="" value="" spellcheck="false" autocomplete="off"
                                autocapitalize="off">
                        </div>

                        <div class="input-field">
                            <label for="desc">
                                Description
                            </label>
                            <textarea name="desc" id="desc" rows="10"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Enregistrer" class="btn-flat waves-effect waves-light white-text"
                            style="background-color: #04C39F;">
                        <a href="#!" class="modal-close waves-effect waves-red btn-flat">Fermer</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="row center">
            <h2 class="collection-title">Google</h2>
            <div class="card"
                style="background-image : url('<?= base_url('assets/img/rumeur-apple-realite-augmentee-conduite-autonome.jpg');?>');"
                id="semaine">
                <div class="card-content center" id="p">
                    <a href="#add_agent_form" class="modal-trigger btn-floating right red waves-effect waves-light btn-flat" style="margin-right:30px;">
                        <i class="material-icons white-text">person_add</i>
                    </a>
                
                    <a href="#add_departement_form" class="modal-trigger btn-floating  waves-effect waves-light red right" style="margin-right:16px;">
                        <i class="material-icons">edit</i>
                    </a>
                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                </div>
            </div>
        </div>

        <div id="agent-modif" class="modal modal-fixed-footer">
            <form method="post" action="#" id="create_customer" accept-charset="UTF-8"><input type="hidden" name="form_type"
                    value="create_customer" /><input type="hidden" name="id" value="<?= $this->session->userdata('id');?>" />
                <div class="modal-content">
                    <div class="row center">
                        <a href="#">
                            <img src="yuna.jpg" alt="" height="80" class="circle">
                        </a>
                    </div>
                   
                    <!-- <div class="input-field">
                        <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Materialize Select</label>
                    </div> -->
                    <div class="input-field">
                        <label for="name">
                            Nom du prestataire
                        </label>
                        <input type="text" name="name" id="name">
                    </div>
                
                    <div class="input-field">
                        <label for="phone">
                            Numero de téléphone
                        </label>
                        <input type="text" name="customer[last_name]" id="LastName">
                    </div>
                
                    <div class="input-field">
                        <label for="Email">
                            Email
                        </label>
                        <input type="email" name="email" id="Email" class="" value="" spellcheck="false" autocomplete="off"
                            autocapitalize="off">
                    </div>                    
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Enregistrer" class="btn-flat waves-effect waves-light white-text"
                        style="background-color: #04C39F;">
                    <a href="#!" class="modal-close waves-effect waves-red btn-flat">Fermer</a>
                </div>
            </form>
        </div>

        <div id="add_agent_form" class="modal">
            <div class="modal-content">
                <h5>Ajouter un agent</h5>
                <p style="color : red; font-size : 20px;"><em><?= $error;?></em></p>
                <form method="post" action="<?= base_url('ajouter_agent');?>" id="create_customer" accept-charset="UTF-8">
                    <input type="hidden" name="idEntreprise" value="" />

                    <div class="input-field">
                        <label for="name">
                            Nom
                        </label>
                        <input type="text" name="name" id="name">
                    </div>
                
                    <div class="input-field">
                        <label for="phone">
                            Numero de téléphone
                        </label>
                        <input type="text" name="phone" id="phone">
                    </div>
                
                    <div class="input-field">
                        <label for="Email">
                            Email
                        </label>
                        <input type="email" name="email" id="Email" class="" value="" spellcheck="false" autocomplete="off"
                            autocapitalize="off">
                    </div>
                
                    <div class="input-field">
                        <label for="pwd">
                            Mot de passe
                        </label>
                        <input type="password" name="pwd" id="pwd" class="">
                    </div>
                
                    <div class="input-field">
                        <label for="pwd">
                            Confirmez le Mot de passe
                        </label>
                        <input type="password" name="confpwd" id="pwd" class="">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Créer" class="btn-flat waves-effect waves-light white-text" style="background-color: #04C39F;">
                        <a href="#!" class="modal-close waves-effect waves-red btn-flat">Fermer</a>
                    </div> 
                </form>
            </div>
        </div>



        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col s12 center">
                        <h4 class="collection-title">Agents de l'entreprise</h4>
                    </div>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>email</th>
                                <th>departement</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $id = $this->session->userdata('id'); 
                                foreach($agents as $agent){
                                    foreach($depts as $dept){
                            ?>
                            <tr>
                                <td><?= $agent->nomAgent; ?></td>
                                <td><?= $agent->email; ?></td>
                                <td><?= $dept->nomDept; ?></td>
                                <td>
                                    <a href="#">Supprimer</a>
                                    <a href="<?= base_url('modifier_agent');?>?id=<?= $agent->idAgent?>">Modifier</a>
                                </td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="add_departement_form" class="modal">
            <div class="modal-content">
                <h5>Ajouter un agent</h5>
                <form method="post" action="<?= base_url('ajouter_departement');?>" id="create_customer" accept-charset="UTF-8">
                    <input type="hidden" name="idEntreprise" value="" />
                    <input type="hidden" name="idDpt" value="✓" />
                    <div class="input-field">
                        <label for="name">
                            Nom
                        </label>
                        <input type="text" name="name" id="name">
                    </div>
                
                    <div class="modal-footer">
                        <input type="submit" value="Créer" class="btn-flat waves-effect waves-light white-text" style="background-color: #04C39F;">
                        <a href="#!" class="modal-close waves-effect waves-red btn-flat">Fermer</a>
                    </div>
                </form>
            </div>
        </div>

        <div id="shopify-section-footer" class="shopify-section">
            <footer class="page-footer" style="background-color: #04c39f">
                <div class="footer-copyright">
                    <div class="container center">
                        <small class="white-text">Copyright © 2019, <a href="index.html" class="white-text"
                                title="">Take
                                Date</a>. <a class="white-text" target="_blank" rel="nofollow" href="#">
                                Powered
                                by ITOT-Afica</a>
                        </small>
                    </div>
                </div>
            </footer>
        </div>  
        <!-- Javascript -->


        <script
            src="../cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"
            type="text/javascript"></script>

        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://npmcdn.com/react@15.3.0/dist/react.min.js'></script>
        <script src='https://npmcdn.com/react-dom@15.3.0/dist/react-dom.min.js'></script>

        <script
            src="../cdn.shopify.com/s/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js"
            type="text/javascript"></script>

        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="../cdn.shopify.com/s/files/1/2030/2737/t/6/assets/vendorcfcd.js?0" defer="defer"></script>
        <!--<![endif]-->
        <!--[if lt IE 9]><script src="//cdn.shopify.com/s/files/1/2030/2737/t/6/assets/vendor.js?0"></script><![endif]-->

        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="../cdn.shopify.com/s/files/1/2030/2737/t/6/assets/themecfcd.js?0" defer="defer"></script>
        <!--<![endif]-->
        <!--[if lt IE 9]><script src="//cdn.shopify.com/s/files/1/2030/2737/t/6/assets/theme.js?0"></script><![endif]-->

        <script src="<?php echo base_url('')?>assets/calendar/js/index.js"></script>

        <script src="<?php echo base_url('')?>assets/js/agent.js"></script>

        <script>
            window.onresize = jesaispas;
            function jesaispas (){
                var mainElement = document.querySelector('#shopify-section-header');
                var footer = document.querySelector('#shopify-section-footer');
                if(mainElement.clientHeight < window.innerHeight){
                    footer.style.position = 'absolute';
                    footer.style.bottom = '0';
                } else{
                    footer.style.position = 'static';
                }
            }
            jesaispas();
            $(document).ready(function () {
                var categories = $('nav .categories-container');
                if (categories.length) {
                    categories.pushpin({ top: categories.offset().top });
                }

                var elems = document.querySelectorAll('.modal');
                var instances = M.Modal.init(elems);
            });
            var base_url = '<?php echo base_url('')?>';
            
        </script>

</body>

</html>