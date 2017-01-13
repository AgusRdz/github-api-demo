<div class="navbar-wrapper">
    <div class="container-fluid">
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="margin-right:-8px; margin-top:-5px;">
                        <img alt="Brand" src="imgs/octicon.png" width="30px" height="30px">
                    </a>
                    <a class="navbar-brand" href="#">GitHub API</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                <img src="{{ $profile->avatar_url }}" class="img-responsive img-circle" title="John Doe" alt="John Doe" width="30px" height="30px">
                            </span>
                            <span class="user-name">
                                {{ $profile->login }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top:50px;"> </div>