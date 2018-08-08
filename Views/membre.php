<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Membre</title>

    <!-- Bootstrap core CSS -->
    <link href="publicMembre/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="publicMembre/css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark   fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php if (isset($_GET['id'])) {
              echo $affMembreParId['photo'];
          } else {
              $affMembreParId = " ";
          }
          if (isset($_GET['idDirecteur'])) {
              echo $affDirecteurParId['photo'];
          } else {
              $affDirecteurParId = " ";
          } if (isset($_GET['idDirecteurAdjoint'])) {
              echo $affDirecteursAdjointeParId ['photo'];
          } else {
              $affDirecteursAdjointeParId  = " ";
          }?> " alt="">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#profil">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#formation">Formations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#certification">Certifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#engagement">Engagements</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#publication">Publication</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid p-0">
    <div class="container">

        <div class="my-auto" id="profil">
            <h4 class="mb-0"><?php if (isset($_GET['id'])) {
                    echo $affMembreParId['prenom'];
                } else {
                    $affMembreParId = " ";
                }
                if (isset($_GET['idDirecteur'])) {
                    echo $affDirecteurParId['prenom'];
                } else {
                    $affDirecteurParId = " ";
                } if (isset($_GET['idDirecteurAdjoint'])) {
                    echo $affDirecteursAdjointeParId ['prenom'];
                } else {
                    $affDirecteursAdjointeParId  = " ";
                }

                ?>
                <span><?php if (isset($_GET['id'])) {
                        echo $affMembreParId['nom'];
                    } else {
                        $affMembreParId = " ";
                    }
                    if (isset($_GET['idDirecteur'])) {
                        echo $affDirecteurParId['nom'];
                    } else {
                        $affDirecteurParId = " ";
                    } if (isset($_GET['idDirecteurAdjoint'])) {
                        echo $affDirecteursAdjointeParId ['nom'];
                    } else {
                        $affDirecteursAdjointeParId  = " ";
                    } ?></span>
            </h4>
            <div class="subheading mb-5"><p class="citation"> «<?php if (isset($_GET['id'])) {
                        echo $affMembreParId['citation'];
                    } else {
                        $affMembreParId = " ";
                    }
                    if (isset($_GET['idDirecteur'])) {
                        echo $affDirecteurParId['citation'];
                    } else {
                        $affDirecteurParId = " ";
                    } if (isset($_GET['idDirecteurAdjoint'])) {
                        echo $affDirecteursAdjointeParId ['citation'];
                    } else {
                        $affDirecteursAdjointeParId  = " ";
                    } ?> »</p></div>
            <p class="mb-5"><?php if (isset($_GET['id'])) {
                    echo $affMembreParId['fonction'];
                } else {
                    $affMembreParId = " ";
                }
                if (isset($_GET['idDirecteur'])) {
                    echo $affDirecteurParId['fonction'];
                } else {
                    $affDirecteurParId = " ";
                } if (isset($_GET['idDirecteurAdjoint'])) {
                    echo $affDirecteursAdjointeParId ['fonction'];
                } else {
                    $affDirecteursAdjointeParId  = " ";
                }?></p>
        </div>


        <div class="my-auto" id="formation">
            <h5 class="mb-5">Formation</h5>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <p><?php if (isset($_GET['id'])) {
                            echo $affMembreParId['formations'];
                        } else {
                            $affMembreParId = " ";
                        }
                        if (isset($_GET['idDirecteur'])) {
                            echo $affDirecteurParId['formations'];
                        } else {
                            $affDirecteurParId = " ";
                        } if (isset($_GET['idDirecteurAdjoint'])) {
                            echo $affDirecteursAdjointeParId ['formations'];
                        } else {
                            $affDirecteursAdjointeParId  = " ";
                        }?></p>
                </div>
            </div>
        </div>

        <div class="my-auto" id="certification">
            <h5 class="mb-5">Certification</h5>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <p><?php if (isset($_GET['id'])) {
                            echo $affMembreParId['certifications'];
                        } else {
                            $affMembreParId = " ";
                        }
                        if (isset($_GET['idDirecteur'])) {
                            echo $affDirecteurParId['certifications'];
                        } else {
                            $affDirecteurParId = " ";
                        } if (isset($_GET['idDirecteurAdjoint'])) {
                            echo $affDirecteursAdjointeParId ['certifications'];
                        } else {
                            $affDirecteursAdjointeParId  = " ";
                        } ?></p>
                </div>
            </div>
        </div>
        <div class="my-auto" id="engagement">
            <h5 class="mb-5">Engagement citoyen et associatif </h5>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <p><?php if (isset($_GET['id'])) {
                            echo $affMembreParId['engagements'];
                        } else {
                            $affMembreParId = " ";
                        }
                        if (isset($_GET['idDirecteur'])) {
                            echo $affDirecteurParId['engagements'];
                        } else {
                            $affDirecteurParId = " ";
                        } if (isset($_GET['idDirecteurAdjoint'])) {
                            echo $affDirecteursAdjointeParId ['engagements'];
                        } else {
                            $affDirecteursAdjointeParId  = " ";
                        } ?></p>
                </div>
            </div>
        </div>


        <div class="my-auto" id="publication">
            <h5 class="mb-5">Publications</h5>
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <p><?php if (isset($_GET['id'])) {
                            echo $affMembreParId['publications'];
                        } else {
                            $affMembreParId = " ";
                        }
                        if (isset($_GET['idDirecteur'])) {
                            echo $affDirecteurParId['publications'];
                        } else {
                            $affDirecteurParId = " ";
                        } if (isset($_GET['idDirecteurAdjoint'])) {
                            echo $affDirecteursAdjointeParId ['publications'];
                        } else {
                            $affDirecteursAdjointeParId  = " ";
                        }?></p>
                </div>
            </div>
        </div>


    </div>

</div>


<!-- Bootstrap core JavaScript -->
<script src="publicMembre/vendor/jquery/jquery.min.js"></script>
<script src="publicMembre/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="publicMembre/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="publicMembre/js/resume.min.js"></script>

</body>

</html>
