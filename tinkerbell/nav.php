<div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
    <div class="container">

        <nav class="reponav js-repo-nav js-sidenav-container-pjax js-octicon-loaders" itemscope="" itemtype="http://schema.org/BreadcrumbList" role="navigation" data-pjax="#js-repo-pjax-container">
            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
                <a href="/" class="js-selected-navigation-item 
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/') {
                        echo 'selected';
                    }
                    ?> reponav-item" itemprop="url">
                    <svg aria-hidden="true" class="octicon octicon-issue-opened" height="16" role="img" version="1.1" viewbox="0 0 14 16" width="14">
                        <path d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7S10.14 13.7 7 13.7 1.3 11.14 1.3 8s2.56-5.7 5.7-5.7m0-1.3C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7S10.86 1 7 1z m1 3H6v5h2V4z m0 6H6v2h2V10z"></path>
                    </svg>
                    <span itemprop="name">Dashboard</span>
                    <meta itemprop="position" content="3" />
                </a>
            </span>
            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
                <a href="/server" aria-selected="true" class="js-selected-navigation-item 
                    <?php
                    if (strpos($_SERVER['REQUEST_URI'],'server') !== false) {
                        echo 'selected';
                    }
                    ?> reponav-item" itemprop="url">
                    <svg aria-hidden="true" class="octicon octicon-book" height="16" role="img" version="1.1" viewbox="0 0 16 16" width="16">
                        <path d="M2 5h4v1H2v-1z m0 3h4v-1H2v1z m0 2h4v-1H2v1z m11-5H9v1h4v-1z m0 2H9v1h4v-1z m0 2H9v1h4v-1z m2-6v9c0 0.55-0.45 1-1 1H8.5l-1 1-1-1H1c-0.55 0-1-0.45-1-1V3c0-0.55 0.45-1 1-1h5.5l1 1 1-1h5.5c0.55 0 1 0.45 1 1z m-8 0.5l-0.5-0.5H1v9h6V3.5z m7-0.5H8.5l-0.5 0.5v8.5h6V3z"></path>
                    </svg>
                    <span itemprop="name">Servers</span>
                    <span class="counter">
                    </span>
                    <meta itemprop="position" content="1">
                </a>
            </span>
            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
                <a href="/os" class="js-selected-navigation-item 
                    <?php
                    if (strpos($_SERVER['REQUEST_URI'],'os') !== false) {
                        echo 'selected';
                    }
                    ?>
                   reponav-item"  itemprop="url">
                    <svg aria-hidden="true" class="octicon octicon-code" height="16" role="img" version="1.1" viewbox="0 0 14 16" width="14">
                        <path d="M9.5 3l-1.5 1.5 3.5 3.5L8 11.5l1.5 1.5 4.5-5L9.5 3zM4.5 3L0 8l4.5 5 1.5-1.5L2.5 8l3.5-3.5L4.5 3z"></path>
                    </svg>
                    <span itemprop="name">Operating Systems</span>
                    <meta itemprop="position" content="2">
                </a>
            </span>


            <a href="/vcenter" class="js-selected-navigation-item 
                <?php
                if (strpos($_SERVER['REQUEST_URI'],'vcenter') !== false) {
                    echo 'selected';
                }
                ?> 
               reponav-item" >
                <svg aria-hidden="true" class="octicon octicon-pulse" height="16" role="img" version="1.1" viewbox="0 0 14 16" width="14">
                    <path d="M11.5 8L8.8 5.4 6.6 8.5 5.5 1.6 2.38 8H0V10h3.6L4.5 8.2l0.9 5.4L9 8.5l1.6 1.5H14V8H11.5z"></path>
                </svg>
                vCenter
            </a>
            <a href="/deploy" class="js-selected-navigation-item 
                <?php
                if (strpos($_SERVER['REQUEST_URI'],'deploy') !== false) {
                    echo 'selected';
                }
                ?> 
               reponav-item" >
                <svg aria-hidden="true" class="octicon octicon-git-pull-request" height="16" role="img" version="1.1" viewbox="0 0 12 16" width="12">
                    <path d="M11 11.28c0-1.73 0-6.28 0-6.28-0.03-0.78-0.34-1.47-0.94-2.06s-1.28-0.91-2.06-0.94c0 0-1.02 0-1 0V0L4 3l3 3V4h1c0.27 0.02 0.48 0.11 0.69 0.31s0.3 0.42 0.31 0.69v6.28c-0.59 0.34-1 0.98-1 1.72 0 1.11 0.89 2 2 2s2-0.89 2-2c0-0.73-0.41-1.38-1-1.72z m-1 2.92c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2 1.2 0.55 1.2 1.2-0.55 1.2-1.2 1.2zM4 3c0-1.11-0.89-2-2-2S0 1.89 0 3c0 0.73 0.41 1.38 1 1.72 0 1.55 0 5.56 0 6.56-0.59 0.34-1 0.98-1 1.72 0 1.11 0.89 2 2 2s2-0.89 2-2c0-0.73-0.41-1.38-1-1.72V4.72c0.59-0.34 1-0.98 1-1.72z m-0.8 10c0 0.66-0.55 1.2-1.2 1.2s-1.2-0.55-1.2-1.2 0.55-1.2 1.2-1.2 1.2 0.55 1.2 1.2z m-1.2-8.8c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2 1.2 0.55 1.2 1.2-0.55 1.2-1.2 1.2z"></path>
                </svg>
                Deployment
            </a>
            <a href="/stats" class="js-selected-navigation-item 
                <?php
                if (strpos($_SERVER['REQUEST_URI'],'stats') !== false) {
                    echo 'selected';
                }
                ?>
               reponav-item" >
                <svg aria-hidden="true" class="octicon octicon-graph" height="16" role="img" version="1.1" viewBox="0 0 16 16" width="16"><path d="M16 14v1H0V0h1v14h15z m-11-1H3V8h2v5z m4 0H7V3h2v10z m4 0H11V6h2v7z"></path></svg>
                Statistics
            </a>
            <a href="/settings" class="js-selected-navigation-item 
               <?php
                   if (strpos($_SERVER['REQUEST_URI'],'settings') !== false) {
                       echo 'selected';
                   }
                   ?>
                reponav-item">
                <svg aria-hidden="true" class="octicon octicon-gear" height="16" role="img" version="1.1" viewBox="0 0 14 16" width="14"><path d="M14 8.77V7.17l-1.94-0.64-0.45-1.09 0.88-1.84-1.13-1.13-1.81 0.91-1.09-0.45-0.69-1.92H6.17l-0.63 1.94-1.11 0.45-1.84-0.88-1.13 1.13 0.91 1.81-0.45 1.09L0 7.23v1.59l1.94 0.64 0.45 1.09-0.88 1.84 1.13 1.13 1.81-0.91 1.09 0.45 0.69 1.92h1.59l0.63-1.94 1.11-0.45 1.84 0.88 1.13-1.13-0.92-1.81 0.47-1.09 1.92-0.69zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"></path></svg>
                Server Settings
            </a>
        </nav>

    </div>
</div>