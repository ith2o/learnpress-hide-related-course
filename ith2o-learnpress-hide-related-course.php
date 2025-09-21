<?php
/*
Plugin Name: ITH2O LearnPress Hide Related Course
Description: Oculta cursos relacionados ou cursos específicos do LearnPress via CSS, sem interferir no LearnPress 4.x.
Version: 1.0
Author: ITH2O
*/

if (!defined('ABSPATH')) exit;

add_action('wp_head', function() {
    echo '<style>
        /* Oculta toda a seção de cursos relacionados */
        .lp-list-courses-related { display: none !important; }

        /* Oculta cursos específicos pelo data-id (adicione os IDs que quiser ocultar) */
        .course-item[data-id="0"],
        .course-item[data-id="0"],
        .course-item[data-id="0"] {
            display: none !important;
        }
    </style>';
});
