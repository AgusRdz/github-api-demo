<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="media">
                <div align="center">
                    <img class="thumbnail img-responsive" src="{{ $profile->avatar_url }}" width="300px" height="300px">
                </div>
                <div class="media-body">
                    <hr>
                    <h3><strong>Bio</strong></h3>
                    <p>{{ $profile->bio }}</p>
                    <hr>
                    <h3><strong>Location</strong></h3>
                    <p>{{ $profile->location }}</p>
                </div>
            </div>
        </div>
    </div>
</div>