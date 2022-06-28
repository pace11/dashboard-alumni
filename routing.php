<?php 

        if (isset($_GET['page'])) $page=$_GET['page'];
        else $page="home";

        if ($page == "home")                       include("pages/dashboard.php");
        elseif ($page == "logout")                 include("pages/logout.php");

        //------------------------------------ ALUMNI ------------------------------------
        elseif ($page == 'alumni')                 include("pages/alumni/alumni.php");
        elseif ($page == 'alumniadd')              include("pages/alumni/alumniadd.php");
        elseif ($page == 'alumniaddpro')           include("pages/alumni/alumniaddpro.php");
        elseif ($page == 'alumniedit')             include("pages/alumni/alumniedit.php");
        elseif ($page == 'alumnieditpro')          include("pages/alumni/alumnieditpro.php");
        elseif ($page == 'alumnidelete')           include("pages/alumni/alumnidelete.php");

        //------------------------------------ GENERATION ------------------------------------
        elseif ($page == 'generation')             include("pages/generation/generation.php");
        elseif ($page == 'generationadd')          include("pages/generation/generationadd.php");
        elseif ($page == 'generationaddpro')       include("pages/generation/generationaddpro.php");
        elseif ($page == 'generationedit')         include("pages/generation/generationedit.php");
        elseif ($page == 'generationeditpro')      include("pages/generation/generationeditpro.php");
        elseif ($page == 'generationdelete')       include("pages/generation/generationdelete.php");

        else include("pages/404.php");
        
?>