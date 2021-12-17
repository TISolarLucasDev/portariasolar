<?php
    loadModel('Sankhya');
    session_start();

    requireValidSession();

    loadTemplateView('checklist');