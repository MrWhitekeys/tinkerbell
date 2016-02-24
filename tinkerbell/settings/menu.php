<div class="column one-fourth" role="navigation">
    <nav class="menu">
        <a href="/settings/" aria-selected="true" class="js-selected-navigation-item 
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/settings/') {
                        echo 'selected';
                    }
                    ?> 
                    menu-item" >
            PXE
        </a>
        <a href="/settings/network" class="js-selected-navigation-item 
                    <?php
                    if (strpos($_SERVER['REQUEST_URI'],'network') !== false) {
                        echo 'selected';
                    }
                    ?> 
                    menu-item" >
            Network
        </a>
        <a href="/settings/" class="js-selected-navigation-item 
                    <?php
                    if (strpos($_SERVER['REQUEST_URI'],'tbd') !== false) {
                        echo 'selected';
                    }
                    ?> 
                    menu-item" >
            TBD
        </a>
        <a href="/settings/users" class="js-selected-navigation-item 
                   <?php
                   if (strpos($_SERVER['REQUEST_URI'],'users') !== false) {
                       echo 'selected';
                   }
                   ?> 
                    menu-item">
            Users
        </a>
        <a href="/settings/app" class="js-selected-navigation-item
                    <?php
                    if (strpos($_SERVER['REQUEST_URI'],'app') !== false) {
                        echo 'selected';
                    }
                    ?> 
                    menu-item">
            Apliance Settings
        </a>
    </nav>
</div>
