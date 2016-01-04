<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Urbis Cartão de Exclusividades</title>

    <meta name="keywords" content="Urbis Cartão Exclusividades Descontos">


    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootstrap-dialog.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Mordernizr -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <meta property="og:title" content="Urbis Cartão de Exclusividades | Landing Page">
    <meta property="og:site_name" content="Urbis Cartão de Exclusividades | Landing Page">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">

    <meta property="og:image" content="">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:creator" content="@valmarjunior_">

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="120">


<div id="all">
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- *** MENU ***  -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#intro">
                    <img src="img/logo.png" width="300px" height="50px" href="#intro" class="img-responsive"/>
                </a>
            </div>

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#intro">inscreva-se</a>
                    </li>
                    <li><a href="#comoFunciona">como funciona</a>
                    </li>
                    <li><a href="#footer">Contato</a>
                    </li>


                </ul>
            </div>

        </div>
    </div>
    <!-- *** Fim Menu *** -->


    <!-- *** Seção 01 - Intro da LP ***-->
    <div id="intro" class="clearfix">
        <div class="item">
            <div class="container">
                <div class="row">
                    <h1 data-animate="fadeInDown">Desfrute dos melhores estabelecimentos da
                        cidade com descontos de até 50%!</h1>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="vid">
                            <iframe class="" src="https://www.youtube.com/embed/o9OIRrMj4Oo" frameborder="0"
                                    allowfullscreen>
                            </iframe>
                        </div>

                    </div>

                    <div class="col-lg-6 sobreNos">
                        <br>

                        <p class="lead margin-bottom texto"> Olá, pessoal! Nós do Urbis convidamos
                            todos vocês a fazerem do primeiro grupo a desfrutar dessa metrópole de exclusividades.
                            Nessa fase inicial, todas
                            as pessoas que tiverem se cadastrado ganharão um (01) mês de GRAÇA para aproveitarem ao
                            máximo os serviços de nossos parceiros.</p>

                        <p class="lead margin-bottom  "> Cadastre-se já e aguarde que logo mais deremos início ao
                            nosso
                            serviço!</p>

                        <button class="btn btn-lg btn-default ctaButton" id="ctaButton" data-toggle="modal"
                                data-target="#modalCadastro" type="button">
                            inscreva-se!
                        </button>
                        <br><br>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <button class="btn btn-link" id="buttonCliente">
                                        <img src="img/clientes-label.png"/>
                                    </button>
                                </div>

                                <div class="col-lg-6">
                                    <button class="btn btn-link" id="buttonParceiro">
                                        <img src="img/parceiros-label.png"/>
                                    </button>
                                </div>
                            </div>


                            <div class="formContainerCliente" id="inscricaoClienteContainer">
                                <br>

                                <form id="inscricaoClienteForm" name="inscricaoClienteForm" class="inscricaoClienteForm"
                                      data-toggle="validator" role="form" method="post" action="admin/index.php">

                                    <div class="ajax-hidden">
                                        <div class="row ">
                                            <div class="form-group col-lg-12 has-feedback">
                                                <input data-animate="fadeInDown" type="text" id="c_name"
                                                       class="form-control"
                                                       name="c_name" placeholder="Nome" required/>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group has-feedback">
                                                    <input data-animate="fadeInDown" type="text" id="c_cep"
                                                           class="form-control cep" name="c_cep" placeholder="C.E.P"
                                                           required/>
                                                    <span class="glyphicon form-control-feedback"
                                                          aria-hidden="true"></span>
                                                    <span class="help-block with-errors"></span>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text" id="c_rua"
                                                           class="form-control c_rua"
                                                           name="c_rua" placeholder="Rua" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text" id="c_numero"
                                                           class="form-control"
                                                           name="c_numero" placeholder="Nº" required/>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text" id="c_bairro"
                                                           class="form-control c_bairro"
                                                           name="c_bairro" placeholder="Bairro" disabled/>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text" id="c_complemento"
                                                           class="form-control"
                                                           name="c_complemento" placeholder="Complemento"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text" id="c_cidade"
                                                           class="form-control c_cidade"
                                                           name="c_cidade " placeholder="Cidade" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text" id="c_uf"
                                                           class="form-control c_uf"
                                                           name="c_uf " placeholder="UF" disabled/>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row ">
                                            <div class="form-group col-lg-12">
                                                <input data-animate="fadeInDown" type="email" id="c_email"
                                                       class="form-control"
                                                       name="c_email" placeholder="Email"
                                                       data-error="Email Inválido" required/>

                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <button class="btn btn-lg btn-default submitButton" id="submitButton" type="submit">
                                        inscreva-se!
                                    </button>
                                    <br><br>
                                </form>

                            </div>


                            <div class="formContainerParceiro" id="inscricaoParceiroContainer">
                                <div class="row"><br></div>

                                <form id="inscricaoParceiroForm" class="inscricaoParceiroForm" data-toggle="validator"
                                      role="form">

                                    <div class="ajax-hidden">
                                        <div class="row ">
                                            <div class="form-group col-lg-12 has-feedback">
                                                <input data-animate="fadeInDown" type="text" id="c_nomeRepresentante"
                                                       class="form-control"
                                                       name="c_name" placeholder="Nome do representante" required/>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <span class="help-block with-errors"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group has-feedback">
                                                    <input data-animate="fadeInDown" type="text" id="c_cepRepresentante"
                                                           class="form-control cep" name="c_cep" placeholder="C.E.P"
                                                           required/>
                                                    <span class="glyphicon form-control-feedback"
                                                          aria-hidden="true"></span>
                                                    <span class="help-block with-errors"></span>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text" id="c_ruaRepresentante"
                                                           class="form-control c_rua"
                                                           name="c_rua" placeholder="Rua" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown " type="text"
                                                           id="c_numeroRepresentante"
                                                           class="form-control"
                                                           name="c_numero" placeholder="Nº" required/>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text"
                                                           id="c_bairroRepresentante"
                                                           class="form-control c_bairro"
                                                           name="c_bairro" placeholder="Bairro" disabled/>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text"
                                                           id="c_complementoRepresentante"
                                                           class="form-control "
                                                           name="c_complemento" placeholder="Complemento"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text"
                                                           id="c_cidadeRepresentante"
                                                           class="form-control c_cidade"
                                                           name="c_cidade" placeholder="Cidade" disabled/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input data-animate="fadeInDown" type="text" id="c_ufRepresentante"
                                                           class="form-control c_uf"
                                                           name="c_ufRepresentante" placeholder="UF" disabled/>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row ">
                                            <div class="form-group col-lg-12">
                                                <input data-animate="fadeInDown" type="email" id="c_emailRepresentante"
                                                       class="form-control"
                                                       name="c_email" placeholder="Email"
                                                       data-error="Email Inválido" required/>

                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <button class="btn btn-lg btn-default submitButton" id="submitButtonRepresentante"
                                            type="submit">
                                        inscreva-se!
                                    </button>
                                    <br><br>
                                </form>

                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Inscrever-se</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="scroll-down" role="navigation">
                <a href="#comoFunciona">
                <span>
                    <i class="fa fa-angle-down fa-2x"></i>
			    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- *** Fim da Seção 01 - Intro da LP*** -->

    <!-- *** Seção 02 - Explicação Sobre Urbis *** -->
    <div class="section  text-gray" id="comoFunciona">
        <div class="container">

            <div class="col-lg-12 col-xs-12 col-sm-12">

                <h2 class="title" data-animate="fadeInDown">Como Funciona</h2>

                <p class="lead margin-bottom" data-animate="fadeInDown">Ser Urbis é saber aproveitar tudo que a cidade
                    oferece de
                    melhor. Genuinamente cearense, o Cartão Urbis veio para propiciar experiências únicas nos mais
                    diversos segmentos. </p>

                <p class="lead margin-bottom" data-animate="fadeInDown">
                    Faça parte dessa metrópole de exclusividades: Urbi-se!
                </p>

                <div class="row services">

                    <div class="col-lg-3" data-animate="fadeInUp">
                        <img src="img/URBI-SE.png" href="#intro" class="img-responsive "/>

                        <h3 class="heading">Cadastre-se</h3>
                    </div>

                    <div class="col-lg-3" data-animate="fadeInUp">
                        <img src="img/EXPLORE.png" href="#intro" class="img-responsive "/>

                        <h3 class="heading">Procure um estabelecimento parceiro mais próximo de você!</h3>
                    </div>

                    <div class="col-lg-3 " data-animate="fadeInUp">
                        <img src="img/APRESENTE-O-CARTAO.png" href="#intro" class="img-responsive "/>

                        <h3 class="heading">Apresente seu Cartão de exclusividades e comemore seu desconto!</h3>
                    </div>

                    <div class="col-lg-3" data-animate="fadeInUp">
                        <img src="img/DESFRUTE.png" href="#intro" class="img-responsive"/>

                        <h3 class="heading">Desfrute dos Urbis</h3>
                    </div>


                </div>


            </div>
        </div>
    </div>

    <!-- *** Fim da Seção 02 - Explicação Sobre Urbis *** -->

    <!-- *** Footer ***  -->

    <div class="section" id="footer">
        <div class="container">
            <div class="col-md-12">
                <br><br><br>

                <h2 class="title" data-animate="fadeInDown">Como Funciona</h2>

                <p class="lead margin-bottom" data-animate="fadeInDown">Ser Urbis é saber aproveitar tudo que a cidade
                    oferece de
                    melhor. Genuinamente cearense, o Cartão Urbis veio para propiciar experiências únicas nos mais
                    diversos segmentos.
                    <br>
                    Faça parte dessa metrópole de exclusividades: Urbi-se!
                </p>

                <div class="row services">

                    <div class="col-md-3"

                         data-animate="fadeInUp">
                        <img src="img/URBI-SE.png"
                             style="border-color: #9b9b9b; border-style: solid; border-width: 0px 01px 0px 0px;"
                             href="#intro" class="img-responsive"/>

                        <h3 class="heading">Cadastre-se</h3>

                    </div>


                    <div class="col-md-3" data-animate="fadeInUp">
                        <img src="img/EXPLORE.png" href="#intro"
                             style="border-color: #9b9b9b; border-style: solid; border-width: 0px 01px 0px 0px;"
                             class="img-responsive"/>

                        <h3 class="heading">Procure um estabelecimento parceiro mais próximo de você!</h3>
                    </div>


                    <div class="col-md-3" data-animate="fadeInUp">
                        <img src="img/APRESENTE-O-CARTAO.png" href="#intro" class="img-responsive"
                             style="border-color: #9b9b9b; border-style: solid; border-right-width: 10px;
                              border-width: 0px 01px 0px 0px;"/>

                        <h3 class="heading">Apresente seu Cartão de exclusividades e comemore seu desconto!</h3>
                    </div>

                    <div class="col-md-3" data-animate="fadeInUp">
                        <img src="img/DESFRUTE.png" href="#intro" class="img-responsive"/>

                        <h3 class="heading">Desfrute dos Urbis</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- *** FOOTER END *** -->
</div>

<!-- js base -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.js"></script>
<script src="js/bootstrap-dialog.min.js"></script>
<script src="js/jquery.inputmask.date.extensions.js"></script>
<script src="js/jquery.inputmask.js"></script>
<script src="js/jquery.inputmask.numeric.extensions.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/front.js"></script>
<script src="js/custom.js"></script>


</body>
</html>