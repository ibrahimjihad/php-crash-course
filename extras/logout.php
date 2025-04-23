<?php
 session_start();
 session_destroy();
 header('location: /13_sessions.php');