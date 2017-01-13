<div class="panel panel-default">
    <div class="panel-heading">
            <h4>
                <a href="#repositories" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle" style="text-decoration:none;"><strong>Repositories</strong>
                </a>
            </h4>
    </div>
        <div id="repositories" class="panel-collapse collapse in">
    <div class="panel-body">
            @foreach($repositories as $repository)
            <div class="pull-left">
                <a href="#">
                    <img class="media-object img-circle" src="imgs/octicon.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                </a>
            </div>
            <div class="post-content">
                <p class="repository-name">{{ $repository->name }}</p>
                @if(!empty($repository->language))
                <p>Language: <strong>{{ $repository->language }}</strong></p>
                @endif
                @if(!empty($repository->description))
                <p class="description">{{ $repository->description }}</p>
                @endif
                <p>
                    <div class="pull-right">    
                        <span>
                            Created: {{ date('m-d-Y', strtotime($repository->created_at)) }} - 
                            Updated: {{ date('d-m-Y', strtotime($repository->updated_at)) }} - 
                            Pushed: {{ date('m-d-Y', strtotime($repository->pushed_at)) }}
                        </span>
                    </div>
                </p>
                <p>
                    <a href="{{ $repository->html_url }}">View on GitHub</a>
                </p>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>