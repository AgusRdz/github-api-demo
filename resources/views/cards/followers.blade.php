<div class="panel panel-default">
<div class="panel-heading">
            <h4>
                <a href="#followers" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" style="text-decoration:none;"><strong>Followers</strong>
                </a>
            </h4>
        </div>
        
        <div id="followers" class="panel-collapse collapse">
    <div class="panel-body">
            @foreach($followers as $follower)
            <div class="pull-left">
                <a href="#">
                    <img class="media-object img-circle" src="{{ $follower->avatar_url }}" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                </a>
            </div>
            <div class="post-content">
                <p>{{ $follower->login }}</p>
                <p><a href="{{ $follower->html_url }}">View on GitHub</a></p>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>