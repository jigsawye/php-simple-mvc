<?php
    /**
     * load kernel file.
     */
    require_once __DIR__ . '/../app/Kernel/Router.php';

    /**
     * load config file.
     */
    require_once __DIR__ . '/../config/app.php';

    /**
     * load helper file.
     */
    require_once __DIR__ . '/../app/helper.php';

    /**
     * bootstrap the application.
     */
    require_once __DIR__ . '/../app/route.php';
