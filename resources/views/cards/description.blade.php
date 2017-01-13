<div class="panel panel-default">
    <div class="panel-body">
        <span>
            <h1 class="panel-title pull-left" style="font-size:30px;">{{ $profile->name }} <small>{{ $profile->email }}</small></h1>
        </span>
        <br><br>
        <i class="fa fa-tags" aria-hidden="true"></i> <a href="{{ $profile->html_url }}" class="tag">View Profile on GitHub</a>
        <br>
        <i class="fa fa-calendar" aria-hidden="true"></i> <span class="tag">Member since: {{ date('d-m-Y', strtotime($profile->created_at)) }}</span>
        <br><hr>
        <span class="pull-left">
            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-files-o" aria-hidden="true"></i> Repos <span class="badge">{{ $profile->public_repos }}</span></a>
            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-picture-o" aria-hidden="true"></i> Gists <span class="badge">{{ $profile->public_gists }}</span></a>
            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Followers <span class="badge">{{ $profile->followers }}</span></a>
            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Followers <span class="badge">{{ $profile->following }}</span></a>
            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Total Commits <span class="badge">{{ $commits }}</span></a>
        </span>
    </div>
</div>