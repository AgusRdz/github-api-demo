<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AgusRdz\GitHub\Contracts\GitHub as GitHub;

class HomeController extends Controller
{
	protected $github;
	protected $username;
	protected $accessToken;
	protected $client_secret;

    public function __construct(GitHub $github)
    {
    	$this->github = $github;
    	$this->username = env('GITHUB_USERNAME', 'octokit');
    	$this->accessToken = env('GITHUB_OAUTH_TOKEN');
    }

    public function index()
    {
    	$profile = $this->github->getProfile($this->username, $this->accessToken);
    	$followers = $this->github->getFollowers($this->username, $this->accessToken);
    	$followings = $this->github->getFollowings($this->username, $this->accessToken);
    	$repositories = $this->github->getRepositories($this->username, $this->accessToken);
    	$commits = $this->github->getTotalCommits($this->username, $this->accessToken);
    	return view('welcome', compact('profile', 'followers', 'followings', 'repositories', 'commits'));
    }
}
