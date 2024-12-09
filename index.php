<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

require_once __DIR__ . "/libraries/path.php";
require_once __DIR__ . "/libraries/method.php";
require_once __DIR__ . "/libraries/response.php";

// Routes Avis
if (isPath("avis")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/avis/getAll.php";
        die();
    }

    if (isPostMethod()) {
        require_once __DIR__ . "/routes/avis/post.php";
        die();
    }
    
}

if (isPath("avis/biens/:bien")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/avis/getByIdBiens.php";
        die();
    }
}

if (isPath("avis/reservations/:reservation")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/avis/getByIdReservations.php";
        die();
    }
}

if (isPath("avis/voyageurs/:voyageur")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/avis/getByIdVoyageurs.php";
        die();
    }
}

if (isPath("avis/:avis")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/avis/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/avis/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/avis/update.php";
        die();
    }

}

// Routes Bailleurs
if (isPath("bailleurs")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/bailleurs/getAll.php";
        die();
    }

    if (isPostMethod()) {
        require_once __DIR__ . "/routes/bailleurs/post.php";
        die();
    }

}

if (isPath("bailleurs/:bailleur")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/bailleurs/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/bailleurs/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/bailleurs/update.php";
        die();
    }

}

// Routes Biens
if (isPath("biens")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/bailleurs/getAll.php";
        die();
    }

    if (isPostMethod()) {
        require_once __DIR__ . "/routes/bailleurs/post.php";
        die();
    }

}

if (isPath("biens/bailleurs/:bailleur")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/bailleurs/getByIdBailleurs.php";
        die();
    }
}

if (isPath("biens/:bien")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/bailleurs/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/bailleurs/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/bailleurs/update.php";
        die();
    }

}

// Routes Equipements
if (isPath("equipements")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/equipements/getAll.php";
        die();
    }

    if (isPostMethod()) {
        require_once __DIR__ . "/routes/equipements/post.php";
        die();
    }

}

if (isPath("equipements/:equipement")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/equipements/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/equipements/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/equipements/update.php";
        die();
    }
}

// Routes ImageBien
if (isPath("imagesBien")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/imagesBien/getAll.php";
        die();
    }

    if (isPostMethod()) {
        require_once __DIR__ . "/routes/imagesBien/post.php";
        die();
    }

}

if (isPath("imagesBien/:imagesBien")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/imagesBien/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/imagesBien/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/imagesBien/update.php";
        die();
    }

}

// Routes PeriodeIndispoBiens
if (isPath("periodeIndispoBiens")) {
    if (isPostMethod()) {
        require_once __DIR__ . "/routes/periodeIndispoBiens/post.php";
        die();
    }
}

if (isPath("periodeIndispoBiens/biens/:bien")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/periodeIndispoBiens/getAllByIdBiens.php";
        die();
    }
}

if (isPath("periodeIndispoBiens/:periodeIndispoBien")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/periodeIndispoBiens/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/periodeIndispoBiens/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/periodeIndispoBiens/update.php";
        die();
    }

}

// Routes PeriodeIndispoPrestataires
if (isPath("PeriodeIndispoPrestataires")) {
    if (isPostMethod()) {
        require_once __DIR__ . "/routes/PeriodeIndispoPrestataires/post.php";
        die();
    }

}

if (isPath("PeriodeIndispoPrestataires/prestataires/:prestataire")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/PeriodeIndispoPrestataires/getAllByIdPrestataires.php";
        die();
    }
}

if (isPath("PeriodeIndispoPrestataires/:PeriodeIndispoPrestataire")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/PeriodeIndispoPrestataires/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/PeriodeIndispoPrestataires/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/PeriodeIndispoPrestataires/update.php";
        die();
    }
}

// Routes periodeTarifications
if (isPath("periodeTarifications")) {
    if (isPostMethod()) {
        require_once __DIR__ . "/routes/periodeTarifications/post.php";
        die();
    }

}

if (isPath("periodeTarifications/biens/:bien")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/periodeTarifications/getByIdBiens.php";
        die();
    }
}

if (isPath("periodeTarifications/:periodeTarification")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/periodeTarifications/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/periodeTarifications/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/periodeTarifications/update.php";
        die();
    }

}

// Routes prestataires
if (isPath("prestataires")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/prestataires/getAll.php";
        die();
    }

    if (isPostMethod()) {
        require_once __DIR__ . "/routes/prestataires/post.php";
        die();
    }

}

if (isPath("prestataires/:prestataire")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/prestataires/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/prestataires/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/prestataires/update.php";
        die();
    }

}

// Routes prestations
if (isPath("prestations")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/prestations/getAll.php";
        die();
    }

    if (isPostMethod()) {
        require_once __DIR__ . "/routes/prestations/post.php";
        die();
    }

}

if (isPath("prestations/prestataires/:prestataire")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/prestations/getByIdPrestataires.php";
        die();
    }
}

if (isPath("prestations/:prestation")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/prestations/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/prestations/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/prestations/update.php";
        die();
    }

}

// Routes reservations
if (isPath("reservations")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/reservations/getAll.php";
        die();
    }

    if (isPostMethod()) {
        require_once __DIR__ . "/routes/reservations/post.php";
        die();
    }

}

if (isPath("reservations/voyageurs/:voyageur")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/reservations/getByIdVoyageurs.php";
        die();
    }
}

if (isPath("reservations/:reservation")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/reservations/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/reservations/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/reservations/update.php";
        die();
    }
}

// Routes voyageurs
if (isPath("voyageurs")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/voyageurs/getAll.php";
        die();
    }

    if (isPostMethod()) {
        require_once __DIR__ . "/routes/voyageurs/post.php";
        die();
    }

}

if (isPath("voyageurs/:voyageur")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/voyageurs/get.php";
        die();
    }

    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/voyageurs/delete.php";
        die();
    }
    if (isPatchMethod()) {
        require_once __DIR__ . "/routes/voyageurs/update.php";
        die();
    }

}