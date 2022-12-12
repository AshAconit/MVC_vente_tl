<?php 
    session_start() ;
    const URL = "http://localhost/Main/TranonjakaLabelMVC/" ;

    
    include "Controls/Initializer.php" ;

    

    
    
    Initializer::loadViews("template-parts/headerVente.php") ;
    Initializer::loadViews("Ventes.php") ;
    Initializer::loadViews("template-parts/footerVente.php") ;

 ?>